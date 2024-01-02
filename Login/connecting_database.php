<?php 
    // connexion à la base de données
   //$bdd = new PDO("mysql:host=127.0.0.1;dbname=pnda", 'root', '');


   define('HOST', '127.0.0.1');
          define('DB_NAME', 'pnda');
          define('USER', 'root');
          define('PASS', '');
          // Informations de connexion à la base de données distante
$serveur = '127.0.0.1';
$port = '3306'; // Par défaut, le port MySQL est 3306
$utilisateur = 'root';
$motDePasse = '';
$baseDeDonnees = 'pnda';

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
?>