<?php

$database = array(
    'databaseHost' => 'localhost',
    'databaseUser' => 'root',
    'databasePass' => '',
    'databaseName' => 'pnda',
    'databasecharset' => 'utf8'
);

?>

<?php

try {
    $bd = new PDO('mysql:host=' . $database['databaseHost'] . ';dbname=' .
     $database['databaseName'] . ';charset=' . $database['databasecharset'], 
     $database['databaseUser'], $database['databasePass'],);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

} catch (PDOException $e) {
    $alert = array('alert-error', 'Echec de la connexion à la base de données');
    
}

?>