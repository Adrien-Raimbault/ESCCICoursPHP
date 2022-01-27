<?php

include 'fonctions.php';

$eleves = array('Michel', 'Patrick', 'Bob');
$ages = [56, 42, 20];

dump ($eleves);
echo $eleves[1];

// ecrire une fct avec une boucle pour afficher un tableau sous forme de liste

echo count($eleves);

echo affTab($ages);
