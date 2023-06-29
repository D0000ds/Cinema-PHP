<?php

require('Film.php');
require('Genre.php');
require('Realisateur.php');
require('Acteur.php');
require('Casting.php');
require('Role.php');

$r1 = new Realisateur("Dan", "Trachtenberg", "Homme", "05/11/1981");
$r2 = new Realisateur("Jon", "Watts", "Homme", "06/28/1981");

$a1 = new Acteur("Tom", "Holland", "Homme", "06/01/1996");
$a2 = new acteur("Tobey", "Maguire", "Homme", "06/27/1975");

$g1 = new Genre("Horreur");
$g2 = new Genre("Aventure");
$g3 = new Genre("SuperHero");

$f1 = new Film("Prey", 100, "08/05/2022", "Cinquième volet de la franchise Predator. Il y a trois siècles sur le territoire des Comanches, Naru, une farouche et brillante guerrière, se fait désormais un devoir de protéger sa tribu dès qu un danger la menace", $g1, $r1);
$f2 = new Film("Uncharted", 116, "02/16/2022", "Nathan Drake, voleur astucieux et intrépide, est recruté par le chasseur de trésors chevronné Victor « Sully » Sullivan pour retrouver la fortune de Ferdinand Magellan, disparue il y a 500 ans. Ce qui ressemble d abord à un simple casse devient finalement une course effrénée autour du globe pour s emparer du trésor avant l impitoyable Moncada, qui est persuadé que sa famille est l nhéritière légitime de cette fortune.", $g2 , $r1);
$f3 = new Film("Spider-Man: No Way Home", 148, "12/15/2021", "Après les événements liés à l'affrontement avec Mystério , l'identité secrète de Spider-Man a été révélée au monde entier. Il est poursuivi par le gouvernement américain, qui l'accuse du meurtre de Mystério", $g3, $r2);

$role2 = new Role("Spiderman");
$role1 = new Role("Nathan Drake");

$c1 = new Casting($f3, $a1, $role2);
$c2 = new Casting($f3, $a2, $role2);
$c3 = new Casting($f2, $a1, $role1);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/journal/bootstrap.min.css" integrity="sha384-QDSPDoVOoSWz2ypaRUidLmLYl4RyoBWI44iA5agn6jHegBxZkNqgm2eHb6yZ5bYs" crossorigin="anonymous">
    <title>Cinema POO</title>
</head>
<body>
    <ul class="background">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>

   <h1>CINEMA POO</h1>
   
    <?php
    $f3->castingList();

    $role2->searchRole();

    $g3->movieListGenre();

    $r1->reaListMovie();

    $a1->acteurRoleList();

    $a2->acteurRoleList();

    ?>
</ul>
</body>
</html>

