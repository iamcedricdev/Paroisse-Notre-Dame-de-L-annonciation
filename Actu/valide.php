<?php
          define('HOST', '127.0.0.1');
          define('DB_NAME', 'pnda');
          define('USER', 'root');
          define('PASS', '');
          // Informations de connexion à la base de données distante
$serveur = '127.0.0.1';
$port = '3306'; 
$utilisateur = 'root';
$motDePasse = '';
$baseDeDonnees = 'pnda';


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'add_actu') {
        include_once 'datab.php';
        if (isset($_POST['Ajouter'])) {

            extract($_POST);

            print_r($_FILES['fichier']);

            $content_dir = '../Actu/images/';
            $tmp_file = $_FILES['fichier']['tmp_name'];
            if (!is_uploaded_file($tmp_file)) {
                exit("le fichier est introuvable");
            }
            $type_file = $_FILES['fichier']['type'];
            if (!strstr($type_file, 'jpeg') && !strstr($type_file, 'png')) {
                exit("ce fichier n'est pas une image");
            }

            $name_file = time() . 'jpg';
            if (!move_uploaded_file($tmp_file, $content_dir . $name_file)) {
                exit("le fichier n'a pas pu être copié");
            }
        }
    }
        }


// Connexion à la base de données distante
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees, $port);

          //dsn de connexion
          $dsn = 'mysql:host=' . HOST . ';dbname=' . DB_NAME;

          //connexion à la base de données
          try {
            $db = new PDO($dsn, USER, PASS);
          } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
          }

          //envoie des donnée en utf8

          $db->exec('SET NAMES utf8');


          //ajout d'une nouvelle données

          try {
            $sql = "INSERT INTO tout_actu(Titre,Contenu,image_name)
               VALUES('$_POST[titre]','$_POST[contenue]','$_POST[fichier]')";
            $resultat = $db->exec($sql);
            //$resultat->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp']));

            echo ' cliquez <a href="index.php">ici</a>  pour retourner sur la page d\'accueil';
          } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
          }





          $bdd =  new PDO("mysql:host" . HOST . "dbname=" . DB_NAME, USER, PASS);


          ?>
