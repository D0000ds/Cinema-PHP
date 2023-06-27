<?php

Class Genre
{
    private string $genre;
    private array $listMovieGenre;

    public function __construct($genre)
    {
        $this->genre = $genre;
        $this->listMovieGenre = [];
    }

    // Get the value of $genre
    public function getGenre()
    {
        return $this->genre;
    }  
    // Set the value of $genre
    public function setGenre($genre)
    {
        $this->genre= $genre;
    }

    // add a movie ithe array
    public function addMovieGenre(Film $films)
    {
        $this->listMovieGenre[] = $films;
        
    }

    // List movies by genre
    public function movieListGenre()
    {

        foreach($this->listMovieGenre as $lmg)
        {
            echo $lmg."<br>";
        }
    }

    public function __toString()
    {
        return $this->getGenre();
    }
}