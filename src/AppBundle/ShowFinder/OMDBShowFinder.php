<?php

namespace AppBundle\ShowFinder;

use GuzzleHttp\Client;

class OMDBShowFinder implements ShowFinderInterface {

  public function __construct(Client $client) {
    $this->client = $client;
  }

  public function findByName($query){
    $results = $this->client->get('/?apikey=');
  }

  public function getName() {
    return 'IMDB API';
  }

}
