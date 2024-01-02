<?php
//connexion a la base de données
include 'connecting_database.php';
//récupération des données de l'utilisateur
$Passworrd = htmlspecialchars($_POST['Passworrd']);
$email= htmlspecialchars($_POST['email']);

$Passworrd = sha1($Passworrd);
//verification de Passworrd
$get_pass = $db->prepare ('SELECT * FROM utilisateurs WHERE email=? AND Passworrd=?');
$get_pass->execute(array($email,$Passworrd));

$info_user = $get_pass->rowCount();


$exist=0;

if($get_pass->rowCount() > 0){

    $exist=1;

}else{

    $exist=0;
}

echo $exist;


?>