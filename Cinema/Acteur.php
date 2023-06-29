<?php

Class Acteur extends Personne
{
    private array $listRoleDid;
    public function __construct($name, $surname, $gender, $birthDate)
    {
        parent::__construct($name, $surname, $gender, $birthDate);
        $this->listRoleDid = [];
    }

    // add a role in the list
    public function addActeurRoleList(Casting $cast)
    {
        $this->listRoleDid[] = $cast;
    }

    // List the filmography of an actor
    public function acteurRoleList()
    {
        echo "<h2 style='margin-top: 10px;'>".$this->getName()." ".$this->getSurname()."</h2><p> Il a incarnés : ";
        foreach ($this->listRoleDid as $listRoleDid)
        {
            echo $listRoleDid->getRole()." dans ".$listRoleDid->getFilm()->getTitle().", ";
        }
        echo "</p><br>";
    }

    public function __toString()
    {
        return $this->getName()." ".$this->getSurname();
    }
}