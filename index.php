<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Votre nom");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");

// Creation d'une instance de princesse
$princesse = new Princesse();
$princesse->setNom("Princesse");

// Creation d'une instance de sorcier
$sorcier = new Sorcier();
$sorcier->setNom("Sorcier");

echo "<pre>";
var_dump($princesse->getNom());
var_dump($princesse->getId());
var_dump($princesse->getVie());
var_dump($princesse->getX());
var_dump($princesse->getY());
echo "</pre>";

echo "<pre>";
var_dump($sorcier->getNom());
var_dump($sorcier->getId());
var_dump($sorcier->getVie());
var_dump($sorcier->getX());
var_dump($sorcier->getY());
echo "</pre>";