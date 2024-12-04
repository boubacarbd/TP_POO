<?php

namespace boubacar\poo;
use boubacar\poo\Card;

class ListCard {
    private array $listCards =[];


public function addCard(Card $card){

    $this -> listCards[] = $card;
}


    public function printCardsInfo(){
        foreach($this->listCards as $index => $card){
            echo "info sur la carte ".($index + 1)." :".PHP_EOL;
            echo "question : " . $card -> getquestion().PHP_EOL;
            echo "answer : " .$card -> getanswer() .PHP_EOL;
        }
}


}