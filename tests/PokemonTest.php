<?php 

use PHPUnit\Framework\TestCase;

final class PokemonTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeting = 'Hello,Alice!';
        $this->assertSame('Hello, Alice!', $greeting);
    }
   
    public function testInstanciate():void
    {

          $pokemon = new \Src\Pokemons\Eau('toto',10,10,10,2,'');
          $name = $pokemon->getName();

          $this->assertSame('toto',$name);
    }

    public function testIspropertyExist() {
          
        $pokemon = new \Src\Pokemons\Eau('toto',10,10,10,2,'');

        $this->assertObjectHasProperty('name',$pokemon);
        $this->assertObjectHasProperty('pa',$pokemon);
        $this->assertObjectHasProperty('pd',$pokemon);
        $this->assertObjectHasProperty('pd',$pokemon);

        
    }



}