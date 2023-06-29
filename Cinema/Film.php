<?php

Class Film
{
    private string $title;
    private int $time_movie;
    private DateTime $release_date;
    private string $synopsis;
    private Genre $genre;
    private string $genreResearch;
    private Realisateur $rea;
    private array $castList;

    public function __construct($title, $time_movie, $release_date, $synopsis, Genre $genre, Realisateur $rea)
    {
        $this->title = $title;
        $this->time_movie = $time_movie;
        $this->release_date = new DateTime($release_date);
        $this->synopsis= $synopsis;
        $this->genre = $genre;
        $genre->addMovieGenre($this);
        $this->rea = $rea;
        $rea->addMovie($this);
        $this->castList = [];

    }

    // Get the value of $title
    public function getTitle()
    {
        return $this->title;
    }
    // Set the value of $title
    public function setTitle($title)
    {
        $this->title = $title;
    }

    // Get the value of $time_movie
    public function getTimeMovie()
    {
        return $this->time_movie;
    }  
    // Set the value of $time_movie
    public function setTimeMovie($time_movie)
    {
        $this->time_movie = $time_movie;
    }

    // Get the value of $release_date
    public function getReleaseDate()
    {
        return $this->release_date;
    }  
    // Set the value of $release_date
    public function setReleaseDate($release_date)
    {
        $this->release_date = new DateTime($release_date);
    }
    
    // Get the value of $synopsis
    public function getSynopsis()
    {
        return $this->synopsis;
    }  
    // Set the value of $synopsis
    public function setSynopsis($synopsis)
    {
        $this->synopsis= $synopsis;
    }

    // Get the value of $rea
    public function getRea()
    {
        return $this->rea;
    }  
    // Set the value of $rea
    public function setRea($rea)
    {
        $this->rea= $rea;
    }

    // add a cast to a movie
    public function addCasting(Casting $casting)
    {
        $this->castList[] = $casting;
    }

    //List the cast of a film
    public function castingList()
    {
        echo "<h3 style='margin-top: 10px;'>Dans le film <strong>$this->title</strong></h3> <p>";
        foreach($this->castList as $cast)
        {
            echo $cast->getRole()." a été incarné par ".$cast->getActeur().", ";
        }
        echo "<br></p>";
    }

    public function __toString()
    {
        return $this->getTitle();
    }
}
