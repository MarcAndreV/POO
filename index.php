<?php 

require "classes/Automobile.php";

$mon_auto = new Automobile(200);
$mon_auto->demarrer();
$mon_auto->etat();
$mon_auto->accellerer(300);
$mon_auto->arreter();
$mon_auto->etat();

$mon_auto->bonjour();

// Automobile::$langue  ="en";
Automobile::changerLangue("en");
$my_car = new Automobile(200);
$my_car->bonjour();
$mon_auto->bonjour();