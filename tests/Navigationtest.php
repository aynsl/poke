<?php

use PHPUnit\Framework\TestCase;

class NavigationTest extends TestCase
{

    public function testIndex()
    {
        $client = new \GuzzleHttp\Client();

        // Faites une requête HTTP GET vers la page d'accueil
        $response = $client->request('GET', 'http://localhost/POKEMON_POO/');

        // Vérifiez si la réponse est OK (code 200)
        $this->assertEquals(200, $response->getStatusCode());

        // Vérifiez si le titre de la page est correct
        $body = $response->getBody()->getContents();
        $this->assertStringContainsString('Pikachu', $body);
    }

    
}