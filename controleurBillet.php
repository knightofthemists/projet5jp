<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurBillet {

// Ce contrôleur utilise les services des classes des parties Modèle et Vue

  private $billet;

  public function __construct() {
    $this->billet = new Billet();
  }

  // Affiche les détails sur un billet
  public function billet($idBillet) {
    $billet = $this->billet->getBillet($idBillet);
    $vue = new Vue("Billet");
    $vue->generer(array('billet' => $billet));
  }
}