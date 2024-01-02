<?php 

// connexion à la base de données
include ('connecting_database.php');

$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$birthdays = htmlspecialchars($_POST['birthdays']);
$genre = htmlspecialchars($_POST['genre']);
$Adresse = htmlspecialchars($_POST['Adresse']);
$telephone = htmlspecialchars($_POST['telephone']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


$password = sha1($password);

$get_email= $db->prepare('SELECT * FROM utilisateurs WHERE email=?');
$get_email->execute(array($email));

$info_users= $get_email->fetch();
$email_get= $info_users['email']; 

$exist = 0;
if($email_get==$email){
    $exist = 1;
}
else{
    $db-> exec('set names utf8');

    $sql = "INSERT INTO utilisateurs (nom, prenom, date_de_naissance, civilite, adresse, telephone, email,passworrd) VALUES ('$name', '$surname', '$birthdays', '$genre', '$Adresse', '$telephone', '$email', '$password')";
    $result = $db-> exec($sql);
    $exist = 0; 
}
echo $exist;




?>