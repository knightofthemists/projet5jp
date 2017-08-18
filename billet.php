<?php

require_once 'Modele/Modele.php';

class Billet extends Modele {

  // Renvoie la liste des billets du blog
  public function getBillets() {
    $sql = 'select BIL_ID as id_post, BIL_DATE as date_creation,'
      . ' BIL_TITRE as titre, BIL_CONTENU as contenu from posts'
      . ' order by BIL_ID desc';
    $billets = $this->executerRequete($sql);
    return $billets;
  }

  // Renvoie les informations sur un billet
  public function getBillet($idBillet) {
    $sql = 'select BIL_ID as id_post, BIL_DATE as date_creation,'
      . ' BIL_TITRE as titre, BIL_CONTENU as contenu from posts'
      . ' where BIL_ID=?';
    $billet = $this->executerRequete($sql, array($idBillet));
    if ($billet->rowCount() == 1)
      return $billet->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }
}