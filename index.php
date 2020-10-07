<?php

//Importation de nos class Ecole/ Classe/ et Eleve

require_once 'models/Ecole.php';
require_once 'models/Classe.php';
require_once 'models/Eleve.php';

/**
 * Création d'une instance de la class Ecole.
 * Notre variable $ecole est un objet de cette class.
 * Cet objet a accès aux propriétés et méthodes de la class.
 */
$ecole = new Ecole('WF3','9, rue Geoffroy L\'asnier', '18','formation', 'Hugo LIEGEARD');

/**
 * Affecter des valeurs à notre objet
 */

/*$ecole->nom = "Webforce 3";
$ecole->adresse = "9 rue Geoffry L'Asnier";
$ecole->capacite = "20";
$ecole->type = "Formation";
$ecole->directeur ="Sylvianne PEREZ";
*/

/**
 * Création d'une autre instance/ Objet  et hydratons le.
 * Chaque objet à ses propres données
 */

$ecole2 = new Ecole('Ecole42','Bd de Clichy, 75017 Paris', 300,'formation', 'Xavier Niel'
);

/*$ecole2 = new Ecole();

$ecole2->nom = "Ecole42";
$ecole2->adresse = "Bd de Clichy, 75017 Paris";
$ecole2->capacite = 300;
$ecole2->type = "Formation";
$ecole2->directeur ="Xavier Niel";
*/

echo '<pre>';
print_r($ecole);
print_r($ecole2);
echo '</pre>';

/** Afficher le nom de l'école dans une balise h1*/

/*echo '<h1>' .  $ecole->nom . '</h1>';
echo '<h1>' .  $ecole2->nom . '</h1>';
*/

echo'<h1>' .$ecole->getNom() . '</h1>';

/** Grâce au setter, je fournis à mon objet un moyen de modifier la valeur d'une propriété.*/

$ecole->setNom('WF3 Paris');
echo'<h1>' .$ecole->getNom() . '</h1>';



/**___________________________________________________________________
 * Création d'une instance de la class Classe.
 Remarque, notre class classe à été importée la-haut
 */
$classe = new Classe('WF3','30','Hugo LIEGEARD'
);

echo '<pre>';
print_r($classe);
echo '</pre>';

/** Afficher le nom du professeur dans une balise h1*/

echo'<h1>' .$classe->getprofesseurP() . '</h1>';

