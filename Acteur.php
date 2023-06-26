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
    public function addActeurRoleList(Role $role)
    {
        $this->listRoleDid[] = $role;
    }

    // List the filmography of an actor
    public function acteurRoleList()
    {
        foreach ($this->listRoleDid as $listRoleDid)
        {
            echo "Il a joué ".$listRoleDid->getNameRole()." dans ".$listRoleDid->getFilm()->getTitle()."<br>";
        }
    }

    public function __toString()
    {
        return $this->getName()." ".$this->getSurname();
    }
}