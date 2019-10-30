<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class ApiMoviesManager
{
    const URL = "https://hackathon-wild-hackoween.herokuapp.com";
    public function getMovies()
    {
        $client = HttpClient::create();
        $response = $client->request("GET", self::URL."/movies");
        return $response->toArray();
    }
}
