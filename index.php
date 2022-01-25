<?php

$valeur = -10;
$resultat = "";

if (is_numeric($valeur)) {
    if ($valeur > 0) {
        $resultat= "Positif";
    }
    elseif ($valeur < 0) {
        $resultat= "Negatif";
    }
    else $resultat= "Nul";
}
else $resultat = "$valeur n'est pas un nombre";

echo $resultat;