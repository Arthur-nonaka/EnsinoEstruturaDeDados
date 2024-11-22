<?php

class Question
{
    private $question;
    private $optionA;
    private $optionB;
    private $optionC;
    private $optionD;
    private $correctAnswer;
    private $tip;

    public function __construct($question, $optionA, $optionB, $optionC, $optionD, $correctAnswer, $tip)
    {
        $this->question = $question;
        $this->optionA = $optionA;
        $this->optionB = $optionB;
        $this->optionC = $optionC;
        $this->optionD = $optionD;
        $this->correctAnswer = $correctAnswer;
        $this->tip = $tip;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function getOptionA()
    {
        return $this->optionA;
    }

    public function getOptionB()
    {
        return $this->optionB;
    }

    public function getOptionC()
    {
        return $this->optionC;
    }

    public function getOptionD()
    {
        return $this->optionD;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    public function getTip()
    {
        return $this->tip;
    }

    public function setTip($tip) {
        $this->tip = $tip;
    }
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    public function setOptionA($optionA)
    {
        $this->optionA = $optionA;
    }

    public function setOptionB($optionB)
    {
        $this->optionB = $optionB;
    }

    public function setOptionC($optionC)
    {
        $this->optionC = $optionC;
    }

    public function setOptionD($optionD)
    {
        $this->optionD = $optionD;
    }

    public function setCorrectAnswer($correctAnswer)
    {
        $this->correctAnswer = $correctAnswer;
    }
}
?>