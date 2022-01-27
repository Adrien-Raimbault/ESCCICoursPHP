<?php

include 'fonctions.php';

$test = array (true, 12, 'toto');
$eleves = array('Michel', 'Patrick', 'Bob', $test);
$ages = [56, 42, 20, $eleves];

// // pousser un élément dans le tableau
// array_push($ages, 34);

// trier un tableau
sort($ages);

// dump ($eleves);
// echo $eleves[1];

// // ecrire une fct avec une boucle pour afficher un tableau sous forme de liste
// echo count($eleves);
// echo affTab($ages);

// // appel fct factorielle

// echo factorielle(10);

// Tableau associatif
$stagiaires = [
    'Mathilde' => 27, 
    'Pierre' => 30,
    'Raymonde' => 72
];

dump($stagiaires);
echo $stagiaires['Mathilde'];
// ajout d'une valeur au tableau
$stagiaires['Jean-Louis'] = 67;

dump($stagiaires);

// 
foreach ($stagiaires as $key => $value) {
    echo $key . " a " . $value . " ans </br>";
}
