<?php

require('Personne.php');

Class Realisateur extends Personne
{
    private array $listMovies;

    public function __construct($name, $surname, $gender, $birthDate)
    {
        parent::__construct($name, $surname, $gender, $birthDate);
        $this->listMovies = [];
    }


    // add a movie in the lisl
    public function addMovie(Film $film)
    {
        $this->listMovies[] = $film;
    }

    //List a director's filmography
    public function reaListMovie()
    {
        foreach($this->listMovies as $listMovieDid)
        {
            // var_dump($this->listMovies);
            echo "Il a réaliser ce film : ".$listMovieDid.". <br>";
        }
    }

    public function __toString()
    {
        return "rea";
    }
}