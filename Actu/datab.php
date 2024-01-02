<?php

try {
    $bd = new PDO('mysql:host=localhost;dbname=pnda;charset=utf8', 'root', '');
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    return $bd;
   
} catch (Exception $e) {
    echo'Erreur de la connexion a la base de donnees' . $e->getMessage();
}

?>