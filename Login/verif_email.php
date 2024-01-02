<?php
//connexion a la base de données
include 'connecting_database.php';
//récupération des données de l'utilisateur
$email = htmlspecialchars($_POST['email']);
//verification de l'email
$get_email= $db->prepare('SELECT * FROM utilisateurs WHERE email=?');
$get_email->execute(array($email));

$info_users= $get_email->fetch();
$email_get= $info_users['email']; 

$exist = 0;
if($email_get==$email){
    $exist = 1;
}
else{
    $exist = 0;
}
echo $exist;

?>