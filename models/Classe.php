<?php


class Classe
{
    private $nom;
    private $capacite;
    private $professeurP;
    # Comment affecter chaque élève dans une classe?
    # -> rajout de l'éleve dans la classe
    private $eleves;

    /**Pour permettre maintenant l'attributrion de valeurs à mes propriétés, je vais créer un constructeur.
    ----------------------------------------
    L'Objectif du constructeur c'est d'hydrater notre objet. Il doit être accessible PUBLIQUEMENT!
    ------------------------------------------
    Il est exécuté automatiquement par PHP au moment de l'instanciation de la classe.
     */
    public function __construct($nom, $capacite, $professeurP, $eleves=[]) {
        $this->nom= $nom;
        $this->capacite= $capacite;
        $this->professeurP= $professeurP;
        # -> rajout de l'éleve dans la classe
        $this-> eleves = $eleves;
    }
    /* ---Getters-----*/
    public function getNom(){
        return $this->nom;
    }

    public function getCapacite(){
        return $this->capacite;
    }

    public function getProfesseurP(){
        return $this->professeurP;
    }

    # -> rajout de l'éleve dans la classe
    public function getEleves(){
        return $this->eleves;
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

    # -> rajout de l'éleve dans la classe
    public function setEleves($eleves){
        $this->eleves= $eleves;
    }
    public function addEleve(Eleve $eleve){
        $this->eleves[]= $eleve;
    }


} //Fin de la classe Classe
