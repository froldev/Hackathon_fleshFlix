<?php

namespace App\Controller;

use App\Model\ApiMoviesManager;
use Symfony\Component\HttpClient\HttpClient;

class MonsterController extends AbstractController
{

    public function movies()
    {
        $moviesApi = new ApiMoviesManager();
        $movies = $moviesApi->getMovies();
        return $this->twig->render('Monster/movies.html.twig', [
            "movies" => $movies,
        ]);
    }

    public function profils(string $profil)
    {
        $moviesApi = new ApiMoviesManager();
        $movies = $moviesApi->getProfil($profil);
        return $this->twig->render('Monster/profils.html.twig', [
            "movies" => $movies,
        ]);
    }

    public function final()
    {
        return $this->twig->render('Monster/final.html.twig');
    }
}
