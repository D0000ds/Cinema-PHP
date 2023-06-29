<?php

Class Casting
{
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct(Film $film, Acteur $acteur, Role $role)
    {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $film->addCasting($this);
        $role->addRoleList($this);
        $acteur->addActeurRoleList($this);
    }

    // Get the value of $film 
    public function getFilm()
    {
        return $this->film;
    }
    // Set the value of $film
    public function setFilm($film)
    {
        $this->film = $film;
    }

    // Get the value of $acteur
    public function getActeur()
    {
        return $this->acteur;
    }
    // Set the value of $acteur
    public function setActeur($acteur)
    {
        $this->acteur= $acteur;
    }
    // Get the value of $role
    public function getRole()
    {
        return $this->role;
    }
    // Set the value of $role
    public function setRole($role)
    {
        $this->role= $role;
    }

    public function __toString()
    {
        return $this->getFilm()." ".$this->getActeur()." ".$this->getRole();
    }
}