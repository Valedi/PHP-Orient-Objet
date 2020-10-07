<?php

/**
 * Une classe PHP est une entité regroupant par thème des variables appelées "propriétés"
 * et des fonctions appelées "méthodes"
 */

class Ecole
{
    /**
     * Déclaration des propriétés de notre class Ecole.
     */
    private $nom;
    private $adresse;
    private $capacite;
    private $type;
    private $directeur;

    /**Pour permettre maintenant l'attributrion de valeurs à mes propriétés, je vais créer un constructeur.
     ----------------------------------------
      L'Objectif du constructeur c'est d'hydrater notre objet. Il doit être accessible PUBLIQUEMENT!
     ------------------------------------------
     Il est exécuté automatiquement par PHP au moment de l'instanciation de la classe.
     */
    public function __construct($nom, $adresse, $capacite, $type, $directeur) {
      $this->nom= $nom;
      $this->adresse= $adresse;
      $this->capacite= $capacite;
      $this->type= $type;
      $this->directeur= $directeur;

    }
    /* ---Getters-----*/

    public function getNom(){
        return $this->nom;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getCapacite(){
        return $this->capacite;
    }
    public function getType(){
        return $this->type;
    }
    public function getDirecteur(){
        return $this->directeur;
    }

    /* ---Setters-----*/

    public function setNom($nom){
        $this->nom= $nom;
    }
    public function setAdresse($adresse){
        $this->nom= $adresse;
    }
    public function setCapacity($capacite){
        $this->nom= $capacite;
    }
    public function setType($type){
        $this->nom= $type;
    }
    public function setDirecteur($directeur){
        $this->nom= $directeur;
    }

}