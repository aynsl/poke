<?php
namespace Src;
class Api{

  public function getPokemonById($id)
  
  {
    $utility = new Utility();

    $obj = file_get_contents('https://pokebuildapi.fr/api/v1/pokemon/'.$id);
    $obj = json_decode($obj);
    $type = $utility->mrPropre($obj->apiTypes[0]->name);

    $className = "Src\\Pokemons\\$type";
    return   new $className(
        $obj->name,
        $obj->stats->HP,
        $obj->stats->attack,
        $obj->stats->defense,
        $obj->apiGeneration,
        $obj->image
    );

  }

}
