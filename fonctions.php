<?php

function bonjour()
{
    echo "Bonjour";
}

function bonjourPerso(string $nom) : string 
{
    return "Bonjour $nom !";
}

function calculSurface (float $long, float $larg) :float
{
    return abs($long) * abs($larg);
}

function volumeCube (float $long, float $larg, float $haut) : float
{
    return calculSurface($long, $larg) * abs($haut);
}

function dump($param)
{   
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}


// Fonction parcours tableau
function affTab (array $tab) : string
{
    $resultat = "<ul>";

    for ($i = 0; $i < count($tab); $i++)
    {
        $resultat .= "<li>";

        if (is_array($tab[$i])){
            $resultat .= "C'est un tableau";
        }
        else {
            $resultat .= $tab[$i];
        }
        $resultat .="</li>";
        
    }
    $resultat .= "</ul>";

    return $resultat;

}