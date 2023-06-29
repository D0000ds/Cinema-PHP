<?php

Class Personne
{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected DateTime $birthDate;

    public function __construct($name, $surname, $gender, $birthDate)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->birthDate = new DateTime($birthDate);
    }

    
    // Get the value of $name
    public function getName()
    {
        return $this->name;
    }
    // Set the value of $name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Get the value of $surname
    public function getSurName()
    {
        return $this->surname;
    }
    // Set the value of $surname
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    // Get the value of $gender
    public function getGender()
    {
        return $this->gender;
    }
    // Set the value of $gender
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    // Get the value of $birthDate
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    // Set the value of $BirthDate
    public function setBirthDate($birthDate)
    {
        $this->birthDate = new DateTime($birthDate);
    }
}

