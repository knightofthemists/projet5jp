<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurListe {

// Ce contrôleur utilise les services des classes des parties Modèle et Vue

  private $billet;

  public function __construct() {
    $this->billet = new Billet();
  }

  // Affiche la liste de tous les billets du blog
  public function liste() {
    $billets = $this->billet->getBillets();
    $vue = new Vue("Liste");
    $vue->generer(array('billets' => $billets));
  }
}