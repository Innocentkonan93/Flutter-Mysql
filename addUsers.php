<?php

include 'conn.php';


$nom = $_POST['nom'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mdp = $_POST['mdp'];

$newUser =[
'nom' => $nom,
'email' => $email,
'numero' => $numero,
'mdp' => $mdp,
];


$stmt = $conn->prepare("INSERT INTO utilisateurs (nom, email, numero, mdp) VALUES (:nom, :email, :numero, :mdp)");

$stmt->execute($newUser);





?>