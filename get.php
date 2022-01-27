<?php

// CONDITION
// if (isset($_GET['page']))
//     $page = $_GET['page'];
// else
//     $page = 'Rien';
// echo $page;


// TERNAIRE
// $page = isset($_GET ['page']) ? $_GET['page']: 'Rien';
// echo $page;


// OPERATEUR NULL COALESCENT
$page = $_GET ['page'] ?? 'Rien';

// http://localhost:8888/php2/get.php?page=toto