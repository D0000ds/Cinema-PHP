<?php

Class Role
{
    private string $nameRole;
    private array $roleList;

    public function __construct($nameRole)
    {
        $this->nameRole = $nameRole;
        $this->roleList = [];
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

    // add a role list
    public function addRoleList(Casting $cast)
    {
        $this->roleList[] = $cast;
    }

    public function searchRole()
    {
        echo "<h3 style='margin-top: 10px;'>Les acteurs ayant joué le role de <strong>".$this->getNameRole()."</strong> :</h3><p> ";
        foreach($this->roleList as $rl)
        {
            echo $rl->getActeur().", ";
        }
        echo "</p><br>";
    }
    
    public function __toString()
    {
        return $this->getNameRole();
    }
}