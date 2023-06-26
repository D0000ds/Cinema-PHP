<?php

Class Role
{
    private Film $film;
    private Acteur $acteur;
    private string $nameRole;
    private array $roleList;

    public function __construct($nameRole, Acteur $acteur, Film $film)
    {
        $this->nameRole = $nameRole;
        $this->acteur = $acteur;
        $this->film = $film;
        $this->roleList = [];
        $acteur->addActeurRoleList($this);
    }

    //Get the value of $nameRole
    public function getNameRole()
    {
        return $this->nameRole;
    }
    //Set the value of $nameRole
    public function setNameRole($nameRole)
    {
        $this->nameRole = $nameRole;
    }

    //Get the value of $acteur
    public function getActeur()
    {
        return $this->acteur;
    }
    //Set the value of $acteur
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;
    }

    //Get the value of $film
    public function getFilm()
    {
        return $this->film;
    }
    //Set the value of $film
    public function setFilm($film)
    {
        $this->film = $film;
    }

    // add a role list
    public function addRoleList(Casting $cast)
    {
        $this->roleList[] = $cast;
    }

    public function searchRole()
    {
        foreach($this->roleList as $rl)
        {
            echo $rl;
        }
    }
    
    public function __toString()
    {
        return $this->getNameRole();
    }
}