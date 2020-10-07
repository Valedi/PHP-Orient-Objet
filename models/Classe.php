<?php


class Classe
{
    private $nom;
    private $capacite;
    private $professeurP;

    /**Pour permettre maintenant l'attributrion de valeurs à mes propriétés, je vais créer un constructeur.
    ----------------------------------------
    L'Objectif du constructeur c'est d'hydrater notre objet. Il doit être accessible PUBLIQUEMENT!
    ------------------------------------------
    Il est exécuté automatiquement par PHP au moment de l'instanciation de la classe.
     */
    public function __construct($nom, $capacite, $professeurP) {
        $this->nom= $nom;
        $this->capacite= $capacite;
        $this->professeurP= $professeurP;

    }
    /* ---Getters-----*/
    public function getNom(){
        return $this->nom;
    }

    public function getCapacite(){
        return $this->capacite;
    }

    public function getprofesseurP(){
        return $this->professeurP;
    }

    /* ---Setters-----*/
    public function setNom($nom){
        $this->nom= $nom;
    }

    public function setCapacity($capacite){
        $this->nom= $capacite;
    }
    public function setprofesseurP($professeurP){
    $this->nom= $professeurP;
    }
}
