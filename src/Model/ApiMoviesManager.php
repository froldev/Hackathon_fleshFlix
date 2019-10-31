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

    public function getProfil(string $profil)
    {
        switch ($profil) {
            case "ghost":
                return $movies = [
                    ["title" => "The Ring",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/zHJFdhqEXZJxG653oZvOM3PmNON.jpg",
                        "profil" => "La possession n'attend que toi",
                        ],
                    ["title" => "Annabelle",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/yAgxM61Sn0dYML4C9v3MJFp5zPI.jpg",
                        ],
                    ["title" => "A Ghost Story ",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/rp5JPIyZi9sMob15l46zNQLe5cO.jpg",
                        ],
                ];
                break;
            case "slasher":
                return $movies = [
                    ["title" => "Friday the 13th: The Final Chapter",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/5KRBkaF6PdorcFjWiDY4tJy67Jf.jpg",
                        "profil" => "",],
                    ["title" => "Cult of Chucky",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/vSVz5on2HCHhiVTIV7aYIKUN7XG.jpg",],
                    ["title" => "Halloween: The Curse of Michael Myers",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/8Tw5IttoEATGD2FHhcG9bDzqwbi.jpg",],
                ];
                break;
            case "zombie":
                return $movies = [
                    ["title" => "Zombie Flesh Eaters",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/wew8A4gTZEhSRKCBAmziFFK6gGi.jpg",
                        "profil" => "",],
                    ["title" => "World War Z",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/Ha5t0J21eyiq6Az1EXzx0iwsGH.jpg",],
                    ["title" => "Zombieland",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/vUzzDpVrab1BOG3ogxhRGfLN94d.jpg",],
                ];
                break;
            case "secret":
                return $movies = [
                    ["title" => "Bambi",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/wV9e2y4myJ4KMFsyFfWYcUOawyK.jpg",
                        "profil" => "",],
                    ["title" => "Toy Story 4",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/w9kR8qbmQ01HwnvK4alvnQ2ca0L.jpg",],
                    ["title" => "The Angry Birds Movie 2",
                        "url" => "https://image.tmdb.org/t/p/w600_and_h900_bestv2/ebe8hJRCwdflNQbUjRrfmqtUiNi.jpg",],
                ];
                break;
        }
    }
}
