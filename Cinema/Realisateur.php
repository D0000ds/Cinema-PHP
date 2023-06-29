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
        echo "<h2 style='margin-top: 10px;'>".$this->getName()." ".$this->getSurname()."</h2><p> Il a réaliser ".count($this->listMovies)." films : <br>";
        foreach($this->listMovies as $listMovieDid)
        {
            echo $listMovieDid.".<br>";
        }
        echo"</p>";
    }

    public function __toString()
    {
        return "rea";
    }
}