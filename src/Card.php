<?php

namespace boubacar\poo;

class Card
{
    private string $question;
    private string $answer;

    //création d'un constructeur

    public function __construct(string $question, string $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    public function getQuestion()
    {
        return $this->question;
    }
    public function getAnswer()
    {
        return $this->answer;
    }
}
