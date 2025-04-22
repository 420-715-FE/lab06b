<?php

$dbConfig = [
    'hote' => 'localhost',
    'nomBD' => 'taches',
    'nomUtilisateur' => 'root',
    'motDePasse' => ''
];

$db = new PDO("mysql:host={$dbConfig['hote']};dbname={$dbConfig['nomBD']};charset=utf8", $dbConfig['nomUtilisateur'], $dbConfig['motDePasse']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
