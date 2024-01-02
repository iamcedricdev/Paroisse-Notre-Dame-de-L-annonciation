<?php
//connexion a la base de donnée 
include 'connecting_database.php';

$email=$_GET['email'];

//récupération des données de l'utilisateur

$get_email= $db->prepare('SELECT * FROM utilisateurs WHERE email=?');
$get_email->execute(array($email));

$info_users= $get_email->fetch();
$email_get= $info_users['id'];

header('Location: ../Actu/admin.php?email='.$email_get);

?>