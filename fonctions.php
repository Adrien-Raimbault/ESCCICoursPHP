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