<?php

namespace boubacar\poo;

use Boubacar\Poo\Card;
use Boubacar\Poo\ListCard;

require_once __DIR__ . '/vendor/autoload.php';

// Utilisation de la fonction recurcive displayMenu()

function displayMenu() {

   //instanciation et initialisation (créer une nouvelle instance de la classe LisCard )         

    $myList = new ListCard();
    
    $nbreCard = readline(" combien de cartes voulez vous choisir? : ");

    // Vérification de la valeur donnée.
    if (is_numeric($nbreCard)) {
        if ((int)$nbreCard > 0) {
            for ($i = 0; $i < $nbreCard; $i++) {
                $question = readline(" entrez une question pour la carte " . ($i + 1) . " : ") ;
                $answer = readline("Entrez une reponse à la question: " . ($i + 1) . " : ") ;
                
      //instanciation et initialisation (créer une nouvelle instance de la classe card)         

                $card = new Card($question, $answer);

                $myList->addCard($card);

            }
            
        } else {
            displayMenu();
        }
    } else {
        echo "Votre saisie n'est pas un nombre". PHP_EOL;
        displayMenu();

    }  
    echo PHP_EOL . "Listing des cartes contenues dans la liste :" . PHP_EOL;
    $myList->printCardsInfo();
 
}

// recursive 
displayMenu();



