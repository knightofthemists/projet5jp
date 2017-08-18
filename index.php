<?php

// Ici on instancie le routeur puis on lui fait router la requête.

require 'Controleur/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();