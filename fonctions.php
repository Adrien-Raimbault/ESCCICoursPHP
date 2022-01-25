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