<?php


class Eleve
{
    /**
     * Déclaration des propriétés de notre class Ecole.
     */
    private $prenom,
            $nom,
            $age,
            $sexe;

    /**
     * Eleve constructor.
     * @param $prenom
     * @param $nom
     * @param $age
     * @param $sexe
     */
    public function __construct($prenom, $nom, $age, $sexe)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }







    /**Pour permettre maintenant l'attributrion de valeurs à mes propriétés, je vais créer un constructeur.
    ----------------------------------------
    L'Objectif du constructeur c'est d'hydrater notre objet. Il doit être accessible PUBLIQUEMENT!
    ------------------------------------------
    Il est exécuté automatiquement par PHP au moment de l'instanciation de la classe.

    public function __construct($prenom, $nom, $age, $sexe){
        $this->prenom= $prenom;
        $this->nom= $nom;
        $this->age= $age;
        $this->sexe= $sexe;
    }

    /* ---Getters-----*/
/**
    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSexe(){
        return $this->sexe;
    }


    /* ---Setters-----*/
/**
    public function setPrenom($prenom){
        $this->prenom= $prenom;
    }
    public function setNom($nom){
        $this->nom= $nom;
    }
    public function setAge($age){
        $this->age= $age;
    }
    public function setSexe($sexe){
        $this->nom= $sexe;
    }
-*/
}//Fin de la classe Eleve