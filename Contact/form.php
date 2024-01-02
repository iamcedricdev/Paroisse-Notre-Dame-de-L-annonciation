<?php 

    include('../admin/config/datab.php');
    try {
        $sql = "INSERT INTO contact (nom,prenom,email,telephone,souhait,message)
           VALUES('$_POST[nom]','$_POST[prenom]','$_POST[mail]','$_POST[tel]','$_POST[souhait]','$_POST[message]')";
        $resultat = $bd->exec($sql);
        //$resultat->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp']));

        header('Location: contact.php');
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }

?>
