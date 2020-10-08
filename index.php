<?php

//Importation de nos class Ecole/ Classe/ et Eleve

#require_once 'models/Ecole.php';
#require_once 'models/Classe.php';
#require_once 'models/Eleve.php';

/**spl_autoload_register permet de faire de l'autoloading de classes
 * Plus besoin de faire de require à la main.
 * ---------------------
 * Elle est appelée AUTOMATIQUEMENT par PHP dés qu'on instancie une classe
 */

spl_autoload_register(function ( $class){
   # echo 'Chargement de :' . $class . '<br>';
    require_once 'models/'. $class . '.php';
});


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
 Remarque, notre class classe à été importée la-haut grace à l'autoload
 */
$classe = new Classe('WF3','30','Hugo LIEGEARD'
);

echo '<pre>';
print_r($classe);
echo '</pre>';

/** Afficher le nom du professeur dans une balise h1*/

echo'<h1>' .$classe->getprofesseurP() . '</h1>';

/**___________________________________________________________________
 * Création d'une instance de la class Eleve.
Remarque, notre class Eleve à été importée la-haut
 */

$eleve1 = new Eleve('Zaklin','POCANDI', 49, 'femme');
$eleve2 = new Eleve('Koumba','KONARE', 28, 'femme');
$eleve3 = new Eleve('Valérie','DIAS', 48, 'femme');
$eleve4 = new Eleve('Sandra','JACQUES', 48, 'femme');

/**___________________________________________________________________
 * Création d'une autre instance  de la class Classe.
Remarque, notre class Classe à été importée la-haut
 */

$front = new Classe('Front','30','Fadhi NASRI');
$back = new Classe('Back','30','Mathieu QUITTARD');
$full = new Classe('Full','30','Hugo LIEGEARD');


# Problématique
# Comment affecter chaque élève dans une classe?
 # ->  il faut créer une variable eleves dans notre  fichier class Classe

$front->addEleve($eleve2);
$front->addEleve($eleve4);
$back->addEleve($eleve1);
$full->addEleve($eleve3);

echo '<pre>';
print_r($front);
print_r($back);
print_r($full);
echo '</pre>';

# Comment affecter chaque classe dans une école?
# ->  il faut créer une variable classe dans notre  fichier class Ecole
$ecole->addClasse($full);
$ecole->addClasse($back);
$ecole->addClasse($front);

echo '<pre>';
print_r($ecole);
print_r($ecole2);
echo '</pre>';

# Consignes:
# En partant de l'Objet $ecole; affichez la liste ol, ul, li, des classes et pour chaques  classes, les étudiants

#1. récuperer et afficher la liste des classes (=  tableau +boucle (while, for ou foreach)

$classes =$ecole->getClasses();

//print_r($classes);

#on va parcourir nos classes
echo '<ol>';

    foreach ($classes as $classe){
        #Afficher le nom de la classe
        echo '<li>';
            echo $classe->getNom(). '<br>';
        echo '</li>';

        #2. récuperer et afficher la liste des élèves

        $eleves = $classe->getEleves();
        echo '<ul>';

        foreach ($eleves as $eleve) {

            echo '<li>';
            echo $eleve->getPrenom() . ' ' . $eleve->getNom();
            echo '</li>';
        } //endforeach eleves
        echo '</ul>';
    } //endforeach classes

echo '</ol>';

