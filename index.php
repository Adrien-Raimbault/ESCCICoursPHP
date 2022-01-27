<?php

require_once 'fonctions.php';
require_once 'constantes.php';


bonjour();
echo '<br />';

$bjrPerso = bonjourPerso("Michel");

// $valeur = -2;
// $resultat = "";

// if (is_numeric($valeur)) {
//     switch($valeur) {
//         case ($valeur > O):
//             $resultat = "positif";
//             break;
//         case ($valeur < O):
//             $resultat = "négatif";
//             break;
//         default: $resultat = "nul";
//     }
// }
// else $resultat = "$valeur n'est pas un nombre";

// echo $resultat;

$valeur = 34;
$resultat= " ";

if (is_numeric($valeur)) {
    switch($valeur) {
        case ($valeur > 0):
            $resultat = "positive";
            break;
        case ($valeur < 0) :
            $resultat = "negative";
            break;
            default:
            $resultat = "nulle";
    }
}
else { 
    $resultat = "non numerique";
}

echo "La valeur est $resultat.";
echo '<br />';

// Appel de la fonction volumeCube appelée depuis 'fonctions.php'
echo volumeCube(2,3,1);
echo '<br />';

// Appel de la constante
var_dump(TVA);
echo '<br />';

// Appel de constante magique
echo "<p>Afficher n° ligne: " . __LINE__ . "</p>";
// __FILE__ : chemin fichier + nom complet
// __DIR__: nom du dossier dans lequel se trouve le fichier
// __FUNCTION__ : contient le nom de la fonction

?>


<p><a href="boucles.php">Boucles</a></p>
<p><a href="inclusion.php">Inclusion</a></p>
