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
        echo "<h3 style='margin-top: 10px;'>Le genre <strong>".$this->getGenre()."</strong> est associé a ".count($this->listMovieGenre)." films :</h3><p> ";
        foreach($this->listMovieGenre as $lmg)
        {
            echo $lmg.", ";
        }
        echo "</p><br>";
    }

    public function __toString()
    {
        return $this->getGenre();
    }
}