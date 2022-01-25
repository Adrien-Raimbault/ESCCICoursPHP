<?php

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
?>

<p><a href="boucles.php">Boucles</a></p>
<p><a href="inclusion.php">Inclusion</a></p>
