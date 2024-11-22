CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    coins INT NOT NULL DEFAULT 0
);

CREATE TABLE items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    price FLOAT NOT NULL,
    name VARCHAR(40) NOT NULL,
    bonus ENUM('money', 'change', 'tip'),
    amount int,
    path VARCHAR(255) NOT NULL,
    type ENUM('head', 'torso', 'legs') NOT NULL
);

CREATE TABLE users_items (
    users_id INT,
    items_id INT,
    eqquiped BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (users_id, items_id),
    FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (items_id) REFERENCES items(id) ON DELETE CASCADE
);

CREATE TABLE class (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE users_class (
    users_id INT,
    class_id INT,
    PRIMARY KEY (users_id, class_id),
    FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (class_id) REFERENCES class(id) ON DELETE CASCADE
);

CREATE TABLE questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    class_id INT,
    question VARCHAR(255) NOT NULL,
    a VARCHAR(255) NOT NULL,
    b VARCHAR(255) NOT NULL,
    c VARCHAR(255) NOT NULL,
    d VARCHAR(255) NOT NULL,
    correct CHAR(1) NOT NULL,
    tip VARCHAR(255) NOT NULL,
    FOREIGN KEY (class_id) REFERENCES class(id) ON DELETE CASCADE
);

INSERT INTO class (name) VALUES 
('TAD'), 
('Lista Simples'), 
('Lista Dupla'), 
('Fila'), 
('Fila Prioridade'), 
('Pilha');

INSERT INTO questions (question, a, b, c, d, correct, class_id, tip) VALUES
('O que é um Tipo Abstrato de Dados (TAD)?', 'Um conceito na programação', 'Um tipo de dado primitivo', 'Uma linguagem de programação', 'Um algoritmo', 'A', 1, 'Pense em como os dados são organizados e manipulados.'),
('Quais são as duas partes principais de um TAD?', 'Variáveis e Constantes', 'Dados Armazenados e Funções', 'Classes e Objetos', 'Métodos e Atributos', 'B', 1, 'Considere como os dados são armazenados e como as operações são realizadas.'),
('O que significa encapsulação em um TAD?', 'Mostrar detalhes internos', 'Ocultar detalhes internos', 'Dividir dados e funções', 'Combinar dados e funções', 'B', 1, 'Pense em como os detalhes internos são tratados.'),
('Quais tipos de dados podem ser armazenados em um TAD?', 'Variáveis, vetores, estruturas', 'Apenas variáveis', 'Apenas vetores', 'Apenas estruturas', 'A', 1, 'Considere a flexibilidade dos TADs.'),
('Como os dados são manipulados em um TAD?', 'Por meio de variáveis', 'Diretamente pelo usuário', 'Por meio de funções', 'Por meio de constantes', 'C', 1, 'Pense em como as operações são realizadas.'),
('Dê um exemplo de um TAD.', 'Função', 'Variável', 'Constante', 'Lista encadeada', 'D', 1, 'Considere estruturas de dados complexas.'),
('O que é ocultado do usuário em um TAD?', 'Funções', 'Operações', 'Dados', 'Detalhes internos', 'D', 1, 'Pense no que o usuário não precisa ver.'),
('Como um usuário interage com os dados em um TAD?', 'Por meio das operações definidas', 'Diretamente', 'Por meio de variáveis', 'Por meio de constantes', 'A', 1, 'Considere como as operações são realizadas.'),
('Por que a encapsulação é importante em um TAD?', 'Para dividir dados e funções', 'Para mostrar detalhes internos', 'Para ocultar detalhes internos e se capaz de controlar como os dados serão modificados', 'Para combinar dados e funções', 'C', 1, 'Pense na proteção dos dados internos.'),

('O que é uma Lista Simples?', 'Uma estrutura de dados linear', 'Um tipo de variável', 'Um tipo de constante', 'Um tipo de função', 'A', 2, 'Considere a estrutura básica de uma lista.'),
('Qual é a principal característica de uma Lista Simples?', 'Cada nó aponta para o próximo nó', 'Cada nó aponta para o nó anterior', 'Cada nó aponta para o primeiro nó', 'Cada nó aponta para o último nó', 'A', 2, 'Pense em como os nós estão conectados.'),
('Como é feita a inserção em uma Lista Simples?', 'Inserindo no início', 'Inserindo no meio', 'Inserindo no final', 'Inserindo em qualquer posição', 'B', 2, 'Considere a flexibilidade de inserção.'),
('Como é feita a remoção em uma Lista Simples?', 'Removendo do início', 'Removendo do meio', 'Removendo do final', 'Removendo de qualquer posição', 'B', 2, 'Pense na flexibilidade de remoção.'),
('Qual é a complexidade de tempo para acessar um elemento em uma Lista Simples?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'C', 2, 'Considere a eficiência de acesso.'),
('Qual é a vantagem de usar uma Lista Simples?', 'Fácil de implementar', 'Fácil de acessar elementos', 'Fácil de ordenar', 'Fácil de inserir e remover elementos', 'D', 2, 'Pense na simplicidade de uso.'),
('Qual é a desvantagem de usar uma Lista Simples?', 'Difícil de implementar', 'Difícil de acessar elementos', 'Difícil de ordenar', 'Difícil de inserir e remover elementos', 'D', 2, 'Considere as limitações de uso.'),
('Como é representada uma Lista Simples?', 'Como um array', 'Como uma matriz', 'Como uma árvore', 'Como uma sequência de nós', 'D', 2, 'Pense na estrutura de representação.'),
('Qual é a diferença entre uma Lista Simples e uma Lista Dupla?', 'Lista Simples aponta para o próximo nó', 'Lista Simples aponta para o nó anterior', 'Lista Simples aponta para o primeiro nó', 'Lista Simples aponta para o último nó', 'D', 2, 'Considere as conexões entre os nós.'),

('O que é uma Lista Dupla?', 'Uma estrutura de dados linear', 'Um tipo de variável', 'Um tipo de constante', 'Um tipo de função', 'A', 3, 'Considere a estrutura básica de uma lista.'),
('Qual é a principal característica de uma Lista Dupla?', 'Cada nó aponta para o próximo nó', 'Cada nó aponta para o nó anterior e o próximo nó', 'Cada nó aponta para o primeiro nó', 'Cada nó aponta para o último nó', 'B', 3, 'Pense em como os nós estão conectados.'),
('Como é feita a inserção em uma Lista Dupla?', 'Inserindo no início', 'Inserindo no meio', 'Inserindo no final', 'Inserindo em qualquer posição', 'A', 3, 'Considere a flexibilidade de inserção.'),
('Como é feita a remoção em uma Lista Dupla?', 'Removendo do início', 'Removendo do meio', 'Removendo do final', 'Removendo de qualquer posição', 'B', 3, 'Pense na flexibilidade de remoção.'),
('Qual é a complexidade de tempo para acessar um elemento em uma Lista Dupla?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'C', 3, 'Considere a eficiência de acesso.'),
('Qual é a vantagem de usar uma Lista Dupla?', 'Fácil de implementar', 'Permite navegação em ambas as direções', 'Fácil de ordenar', 'Fácil de inserir e remover elementos', 'B', 3, 'Pense na flexibilidade de navegação.'),
('Qual é a desvantagem de usar uma Lista Dupla?', 'Ocupa mais memória', 'Difícil de acessar elementos', 'Difícil de ordenar', 'Difícil de inserir e remover elementos', 'A', 3, 'Considere as limitações de uso.'),
('Como é representada uma Lista Dupla?', 'Como um array', 'Como uma matriz', 'Como uma árvore', 'Como uma sequência de nós com ponteiros para o próximo e o anterior', 'D', 3, 'Pense na estrutura de representação.'),
('Qual é a diferença entre uma Lista Simples e uma Lista Dupla?', 'Lista Simples aponta para o próximo nó', 'Lista Dupla aponta para o nó anterior e o próximo nó', 'Lista Simples aponta para o primeiro nó', 'Lista Dupla aponta para o último nó', 'B', 3, 'Considere as conexões entre os nós.'),
('Como é feita a busca em uma Lista Dupla?', 'Busca binária', 'Busca linear', 'Busca em profundidade', 'Busca em largura', 'B', 3, 'Pense na eficiência de busca.'),

('O que é uma Fila?', 'Uma estrutura de dados linear', 'Um tipo de variável', 'Um tipo de constante', 'Um tipo de função', 'A', 4, 'Considere a estrutura básica de uma fila.'),
('Qual é a principal característica de uma Fila?', 'Primeiro a entrar, primeiro a sair (FIFO)', 'Último a entrar, primeiro a sair (LIFO)', 'Primeiro a entrar, último a sair (FILO)', 'Último a entrar, último a sair (LILO)', 'A', 4, 'Pense na ordem de processamento.'),
('Como é feita a inserção em uma Fila?', 'Inserindo no início', 'Inserindo no meio', 'Inserindo no final', 'Inserindo em qualquer posição', 'C', 4, 'Considere a flexibilidade de inserção.'),
('Como é feita a remoção em uma Fila?', 'Removendo do início', 'Removendo do meio', 'Removendo do final', 'Removendo de qualquer posição', 'A', 4, 'Pense na flexibilidade de remoção.'),
('Qual é a complexidade de tempo para acessar um elemento em uma Fila?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'C', 4, 'Considere a eficiência de acesso.'),
('Qual é a vantagem de usar uma Fila?', 'Fácil de implementar', 'Fácil de acessar elementos', 'Fácil de ordenar', 'Fácil de inserir e remover elementos', 'D', 4, 'Pense na simplicidade de uso.'),
('Qual é a desvantagem de usar uma Fila?', 'Difícil de implementar', 'Difícil de acessar elementos', 'Difícil de ordenar', 'Difícil de inserir e remover elementos', 'B', 4, 'Considere as limitações de uso.'),
('Como é representada uma Fila?', 'Como um array', 'Como uma matriz', 'Como uma árvore', 'Como uma sequência de nós', 'D', 4, 'Pense na estrutura de representação.'),
('Qual é a diferença entre uma Fila e uma Pilha?', 'Fila é FIFO', 'Pilha é LIFO', 'Fila é LIFO', 'Pilha é FIFO', 'A', 4, 'Considere a ordem de processamento.'),
('Como é feita a busca em uma Fila?', 'Busca binária', 'Busca linear', 'Busca em profundidade', 'Busca em largura', 'B', 4, 'Pense na eficiência de busca.'),

('O que é uma Fila de Prioridade?', 'Uma estrutura de dados onde cada elemento tem uma prioridade', 'Uma estrutura de dados linear', 'Um tipo de variável', 'Um tipo de constante', 'A', 5, 'Considere a importância dos elementos.'),
('Como os elementos são removidos em uma Fila de Prioridade?', 'Com base na prioridade', 'Com base na ordem de inserção', 'Com base na ordem alfabética', 'Com base no tamanho', 'A', 5, 'Pense na ordem de remoção.'),
('Qual é a principal característica de uma Fila de Prioridade?', 'Elementos com maior prioridade são removidos primeiro', 'Elementos com menor prioridade são removidos primeiro', 'Elementos são removidos em ordem de chegada', 'Elementos são removidos aleatoriamente', 'B', 5, 'Considere a ordem de remoção.'),
('Qual é a vantagem de usar uma Fila de Prioridade?', 'Fácil de implementar', 'Fácil de acessar elementos', 'Fácil de ordenar', 'Permite gerenciar tarefas com diferentes prioridades', 'D', 5, 'Pense na flexibilidade de uso.'),
('Qual é a desvantagem de usar uma Fila de Prioridade?', 'Difícil de implementar', 'Difícil de acessar elementos', 'Difícil de ordenar', 'Pode ser ineficiente para grandes conjuntos de dados', 'D', 5, 'Considere as limitações de uso.'),

('O que é uma Pilha?', 'Uma estrutura de dados linear', 'Um tipo de variável', 'Um tipo de constante', 'Um tipo de função', 'A', 6, 'Considere a estrutura básica de uma pilha.'),
('Qual é a principal característica de uma Pilha?', 'Primeiro a entrar, primeiro a sair (FIFO)', 'Último a entrar, primeiro a sair (LIFO)', 'Primeiro a entrar, último a sair (FILO)', 'Último a entrar, último a sair (LILO)', 'B', 6, 'Pense na ordem de processamento.'),
('Como é feita a inserção em uma Pilha?', 'Inserindo no início', 'Inserindo no meio', 'Inserindo no final', 'Inserindo em qualquer posição', 'B', 6, 'Considere a flexibilidade de inserção.'),
('Como é feita a remoção em uma Pilha?', 'Removendo do início', 'Removendo do meio', 'Removendo do final', 'Removendo de qualquer posição', 'B', 6, 'Pense na flexibilidade de remoção.'),
('Qual é a complexidade de tempo para acessar um elemento em uma Pilha?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'C', 6, 'Considere a eficiência de acesso.'),
('Qual é a vantagem de usar uma Pilha?', 'Fácil de implementar', 'Fácil de acessar elementos', 'Fácil de ordenar', 'Permite gerenciar tarefas com diferentes prioridades', 'D', 6, 'Pense na flexibilidade de uso.'),
('Qual é a desvantagem de usar uma Pilha?', 'Difícil de implementar', 'Difícil de acessar elementos', 'Difícil de ordenar', 'Pode ser ineficiente para grandes conjuntos de dados', 'D', 6, 'Considere as limitações de uso.'),
('Como é representada uma Pilha?', 'Como um array', 'Como uma matriz', 'Como uma árvore', 'Como uma sequência de nós', 'C', 6, 'Pense na estrutura de representação.');

insert INTO items (id, price, name, path, type, bonus, amount) VALUES
(10,50, 'perna5', '/EnsinoEstruturaDeDados/img/perso/perna.png', 'legs', 'money', 0),
(11,30, 'perna1', '/EnsinoEstruturaDeDados/img/perso/perna1.png', 'legs', 'money', 10),
(12,50, 'perna2', '/EnsinoEstruturaDeDados/img/perso/perna2.png' , 'legs', 'money', 20),
(13,60, 'perna3', '/EnsinoEstruturaDeDados/img/perso/perna3.png' , 'legs', 'money', 30),
(14,100, 'perna4', '/EnsinoEstruturaDeDados/img/perso/perna4.png' , 'legs', 'money', 50),
(22,50, 'corpo1', '/EnsinoEstruturaDeDados/img/perso/corpo1.png' , 'torso', 'change', 1),
(23,70, 'corpo2', '/EnsinoEstruturaDeDados/img/perso/corpo2.png' , 'torso', 'change', 1),
(24,120, 'corpo3', '/EnsinoEstruturaDeDados/img/perso/corpo3.png' , 'torso', 'change', 2),
(25,90, 'corpo4', '/EnsinoEstruturaDeDados/img/perso/corpo4.png' , 'torso', 'change', 2),
(20,90, 'corpo5', '/EnsinoEstruturaDeDados/img/perso/corpo5.png' , 'torso', 'change', 0),
(30,30, 'rosto1', '/EnsinoEstruturaDeDados/img/perso/rosto1.png' , 'head', 'tip', 0),
(31,50, 'rosto2', '/EnsinoEstruturaDeDados/img/perso/rosto2.png' , 'head', 'tip', 1),
(32,50, 'rosto3', '/EnsinoEstruturaDeDados/img/perso/rosto3.png' , 'head', 'tip', 1),
(33,70, 'rosto4', '/EnsinoEstruturaDeDados/img/perso/rosto4.png' , 'head', 'tip', 2),
-- (34,100, 'rosto5', '/EnsinoEstruturaDeDados/img/perso/rosto5.png' , 'head'),
(35,160, 'rosto6', '/EnsinoEstruturaDeDados/img/perso/rosto6.png' , 'head', 'tip', 3),
(36,300, 'rosto7', '/EnsinoEstruturaDeDados/img/perso/rosto7.png' , 'head', 'tip', 3);


