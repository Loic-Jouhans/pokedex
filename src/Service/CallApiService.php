<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
  private $client;

  public function __construct(HttpClientInterface $client)
  {
    $this->client = $client;
  }

  //On créer un fonction ou l'on va consomer l'API 
  public function getPokemonData(): array
  {
    //Dans cette fonction on a besoin d'une réponse dans la quelle on mets la ressource désirée (par ex: requête GET + tel adresse de l'API..)
    $response = $this->client->request(
      'GET',
      'https://pokeapi.co/api/v2/'
    );

    //On retourne notre réponse sous forme de tableau grâce à "->toArray()"
    return $response->toArray();
  }

}