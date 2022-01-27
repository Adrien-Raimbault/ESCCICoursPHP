<?php

include 'fonctions.php';

$test = array (true, 12, 'toto');
$eleves = array('Michel', 'Patrick', 'Bob', $test);
$ages = [56, 42, 20, $eleves];

dump ($eleves);
echo $eleves[1];

// ecrire une fct avec une boucle pour afficher un tableau sous forme de liste
echo count($eleves);
echo affTab($ages);

// appel fct factorielle

echo factorielle(10);
