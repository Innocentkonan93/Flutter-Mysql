<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "qms";

$conn = new mysqli($host, $username, $password, $db );
if ($conn->connect_error) {
    die("connexion echoué: " . $conn->connect_error);
}

 $email = $_POST['email'];
 $mdp = $_POST['mdp'];


//  $email = 'josco@gmail.com';
//  $mdp = 123456;

$sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mdp = '$mdp'";
$result = $conn->query($sql);

$res=array();

while ($row=$result->fetch_assoc()) {
    $res[]=$row;
}

echo json_encode($res);


// if ($result->num_rows == 1) {
//     $response['status'] = 1 ;
//     $response['status_text'] = 'Connexion Réussie' ;
//     $response['user_arr'] = $result->fetch_assoc() ;

// }else{
//     $response['status'] = 0 ;
//     $response['status_text'] = 'Connexion Echouée' ;
// }

// $conn->close();
// header('Context-Type: applocation/json');
// echo json_encode($response);


?>