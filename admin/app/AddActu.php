
<?php 

if($_GET['page']=='AddActu') {
    include('./config/datab.php');
    if (isset($_POST['submit'])) {
        if(!empty($_POST['titre']) and !empty($_POST['contenu'])) {
            extract($_POST);

            //print_r($_FILES['fichier']);

            $content_dir = './app/images/';

            $tmp_files = $_FILES['fichier']['tmp_name'];

            if (!is_uploaded_file($tmp_files)) {

                exit('le fichier est introuvable');
            }

            $type_file = $_FILES['fichier']['type'];

            if (!strstr($type_file, 'jpeg') && !strstr($type_file, 'png')) {


                exit('le fichier n\'est pas une image');

            }
            $name_file = time() . '.jpg';

            if (!move_uploaded_file($tmp_files, $content_dir . $name_file)) {
                exit('impossible de copier le fichier');
            }
            include('./config/datab.php');
            $save_actu = $bd->prepare("INSERT INTO tout_actu(titre,contenu,image_name) VALUES(?,?,?)");
            $save_actu->execute(array($titre, $contenu, $name_file));
            $alert =array('alert-success', 'votre actualite a ete ajouter avec succès');
            


        } else {
            $alert =array('alert-error', 'Veuillez remplir tous les champs');
        }
    } 
if(isset($_GET['action'])) {
    if($_GET['action']== 'delete') {
        $deleteActu = $bd->prepare("DELETE FROM tout_actu WHERE id=?");
        $deleteActu->execute(array($_GET['id']));

        header('Location: admin.php?page=AddActu');
    } elseif($_GET['action']=='modifer') {
        

    }
}
}else {
    header('Location: ../admin/template/404/error404.php');
}
?>

