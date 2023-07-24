<?php

use Src\Api;
use Src\Pokemons\Feu;

   

      include_once './vendor/autoload.php';

      if(isset($_POST['pokemon'])){
        $pokemons = $_POST['pokemon'];
      }else{
        header('location:index.php');
      }

      $combatant1 = $pokemons[0];
      $combatant2 = $pokemons[1];

      $api = new Api();
     
      $combatant1 = $api->getPokemonById($combatant1);
      $combatant2 = $api->getPokemonById($combatant2);
    
      $combatant1->attaque($combatant2);
      $combatant2->attaque($combatant1);
