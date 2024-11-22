<?php

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct($host, $user, $password, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        return mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    public function insertUser(User $user)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO users (name, password, email, coins) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $name = $user->getName();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $coins = $user->getCoins();
        $stmt->bind_param("sssi", $name, $password, $email, $coins);

        if ($stmt->execute()) {
            $userId = $stmt->insert_id;
            $stmt->close();
            $conn->close();
            return $userId;
        } else {
            echo "Error: " . $stmt->error;
            $stmt->close();
            $conn->close();
            return false;
        }
    }

    public function getItems() {
        $conn = $this->connect();
        $sql = "SELECT * FROM items";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public function getUserItems($id) {
        $conn = $this->connect();
        $sql = "SELECT items.id, items.name, items.path, users_items.eqquiped, items.type, items.bonus, items.amount
            FROM users_items 
            JOIN items ON users_items.items_id = items.id 
            WHERE users_items.users_id = " . $id;
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public function buyItem($userId, $itemId, $price) {
        $conn = $this->connect();
        $sql = "UPDATE users SET coins = coins - " . $price . " WHERE id = " . $userId;
        if ($conn->query($sql) === TRUE) {
            $sql = "INSERT INTO users_items (users_id, items_id) VALUES (".$userId.", ".$itemId.")";
            if ($conn->query($sql) === TRUE) {
                $conn->close();
                return true;
            }
        }
        $conn->close();
        return false;
    }

    public function equipItem($userId, $itemId) {
        $conn = $this->connect();
        $query = "UPDATE users_items ui
                  JOIN items i ON ui.items_id = i.id
                  SET ui.eqquiped = FALSE
                  WHERE ui.users_id = ? AND i.type = (SELECT type FROM items WHERE id = ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $userId, $itemId);
        $stmt->execute();
    
        $query = "UPDATE users_items SET eqquiped = TRUE WHERE users_id = ? AND items_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $userId, $itemId);
        return $stmt->execute();
    }

    public function insertUserItems($userId, $itemIds)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO users_items (users_id, items_id, eqquiped) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        foreach ($itemIds as $itemId) {
            $eqquiped = 1;
            $stmt->bind_param("iii", $userId, $itemId, $eqquiped);
            if (!$stmt->execute()) {
                echo "Error: " . $stmt->error;
                $stmt->close();
                $conn->close();
                return false;
            }
        }

        $stmt->close();
        $conn->close();
        return true;
    }

    public function getUsers($id)
    {
        $conn = $this->connect();
        $sql = "SELECT id, name, password, email, coins FROM users WHERE id = " . $id;
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    public function getUserById($id)
    {
        $conn = $this->connect();
        $sql = "SELECT id, name, password, email, coins FROM users WHERE id = " . $id;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        } else {
            $user = null;
        }
        $conn->close();
        return $user;
    }

    public function getUserByEmail($email)
    {
        $conn = $this->connect();
        $sql = "SELECT id, name, password, email, coins FROM users WHERE email = '" . $email . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        } else {
            $user = null;
        }
        $conn->close();
        return $user;
    }

    public function getClassesByUserId($id)
    {
        $conn = $this->connect();
        $sql = 'SELECT class_id FROM users_class WHERE users_id = ' . $id;
        $result = $conn->query($sql);
        $classes = [];
        while ($row = $result->fetch_assoc()) {
            $classes[] = $row['class_id'];
        }
        $conn->close();
        return $classes;
    }

    public function updateUser(User $user, $id)
    {
        $conn = $this->connect();
        $sql = "UPDATE users SET name = '" . $user->getName() . "', password = '" . $user->getPassword() . "', email = '" . $user->getEmail() . "', coins = " . $user->getCoins() . " WHERE id = " . $id;
        if ($conn->query($sql) === TRUE) {
            // echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if ($user->getClasses() != null) {
            $this->updateClassUser($user, $id);
        }

        $conn->close();
    }

    public function updateClassUser(User $user, $id)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM users_class WHERE users_id = " . $id;
        if ($conn->query($sql) === TRUE) {
            // echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        $conn = $this->connect();
        $add = "";
        foreach ($user->getClasses() as $class) {
            $add .= "(" . $id . ", " . $class . "),";
        }
        $add = rtrim($add, ',');
        $sql = "INSERT INTO users_class (users_id, class_id) VALUES " . $add;
        if ($conn->query($sql) === TRUE) {
            // echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function deleteUser($id)
    {
        $conn = $this->connect();
        $this->deleteClassUser($id);
        $sql = "DELETE FROM users WHERE id = " . $id;
        if ($conn->query($sql) === TRUE) {
            // echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    public function deleteClassUser($id)
    {
        $conn = $this->connect();
        $sql = "DELETE FROM users_class WHERE users_id = " . $id;
        $conn->query($sql);
        $conn->close();
    }

    public function getQuestions($classId)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM questions WHERE class_id = " . $classId;
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}