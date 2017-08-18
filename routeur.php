<?php

// On crée un contrôleur frontal qui répartit les actions dans plusieurs classes contrôleur

require_once 'Controleur/ControleurListe.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Vue/Vue.php';

class Routeur {

  private $ctrlListe;
  private $ctrlBillet;

  public function __construct() {
    $this->ctrlListe = new ControleurListe();
    $this->ctrlBillet = new ControleurBillet();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'billet') {
          if (isset($_GET['id'])) {
            $idBillet = intval($_GET['id']);
            if ($idBillet != 0) {
              $this->ctrlBillet->billet($idBillet);
            }
            else
              throw new Exception("Identifiant de billet non valide");
          }
          else
            throw new Exception("Identifiant de billet non défini");
        }
        else
          throw new Exception("Action non valide");
      }
      else {  // aucune action définie : affichage de la page liste
        $this->ctrlListe->liste();
      }
    }
    catch (Exception $e) {
      $this->erreur($e->getMessage());
    }
  }

  // Affiche une erreur
  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
}