<?php 
include('config/datab.php');

if(isset($_POST['submit'])) {
//MODIFICATION DE L'ACTUALITE
    if(!empty($_POST['titre']) and !empty($_POST['contenu'])) {
        $updateActu = $bd->prepare("UPDATE tout_actu SET Titre=?, Contenu=? WHERE id=?");
        $updateActu->execute(array($_POST['titre'], $_POST['contenu'], $_GET['id']));
        header('Location: admin.php?page=AddActu'); 

    } else {
        $alert =array('alert-error', 'Veuillez remplir tous les champs');
    }
}
?>