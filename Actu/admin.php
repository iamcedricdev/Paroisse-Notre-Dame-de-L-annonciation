<?php
include_once '../include/header.php';

?>


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#" style="color: white">ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?action=admin" style="color: white">ADMIN<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?action=add_actu" style="color: white">Nouvelle Actualité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?action=modifier_actu" style="color: white">Modifier ou Supprimer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color: white">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div class="center"
    style="width: 60%; margin-left: auto; margin-right: auto; background-color: white ; min-height: 700px ; padding:30px 30px">
    <?php 
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'admin') {
            ?>
            <h1>Admin</h1>
            <?php
           
            require_once('../Actu/datab.php');
            $req = $bd->prepare("SELECT * FROM tout_actu");
            $req->execute();
            while ($rep = $req->fetch(PDO::FETCH_OBJ)) { ?>
                <div class="col-md-3">
                    <div class="card card-box" style="width: 18rem; margin: 5px ; display: flex; flex-wrap: wrap; align-content: space-around;">
                        <img src="../Actu/images/<?php echo $rep->image_name; ?>"
                            class="card-img-top" alt="...">
                        <div class="card-body-a">
                            <h5 class="card-title">
                                <?php echo $rep->titre; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $rep->contenu ; ?>
                            </p>
                            <p>
                                <?php echo $rep->date; ?>
                            </p>
                           
                        </div>
                    </div>

                </div>
            <?php }
        }
    }
    
    ?>
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add_actu') {

            ?><h1>Nouvelle Actualité</h1>
            <?php
            require_once('../Actu/datab.php');

            if (isset($_POST['submit'])) {

                extract($_POST);

                //print_r($_FILES['fichier']);
    
                $content_dir = '../Actu/images/';

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
                $save_actu = $bd->prepare("INSERT INTO tout_actu(titre,contenu,image_name) VALUES(?,?,?)");
                $save_actu->execute(array($titre, $contenu, $name_file));
                echo 'Votre actualité a été enregistrée avec succès';
                header('location:Actu/actu.php');
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">

                <input type="text" name="titre" placeholder="Entrez le titre" required="" class="form form-control"><br>
                <textarea name="contenu" placeholder="Entrez le contenue" class="form form-control"></textarea><br>
                <input type="file" name="fichier" class="form form-control"><br><br>
                <input type="submit" name="submit" class="btn btn-primary"><br><br><br>
            </form>
        <?php
        } else if ($_GET['action'] == 'modifier_actu') {
            ?>
            <h1>Modifier ou Supprimer</h1> <br> <br><?php
            require_once('../Actu/datab.php');
            
            $req_tout_actu = $bd->prepare('SELECT * FROM tout_actu');
            $req_tout_actu->execute(array());
            ?>
                <table style="width: 100%">
                    <?php
                    while ($rep = $req_tout_actu->fetch(PDO::FETCH_OBJ)) {
                        ?>

                        <tr>
                            <td>
                            <?php echo $rep->titre; ?>
                            </td>
                            <td><a href="?action=modifier&id=<?php echo $rep->id; ?>">Modifier</a></td>
                            <td><a href="?action=supprimer_actu&id=<?php echo $rep->id; ?>">Supprimer</a></td>
                        </tr>

                        <?php

                    }
                    ?>
                </table>
                <?php
        } else if ($_GET['action'] == 'supprimer_actu') {
            require_once('../Actu/datab.php');
            $req_tout_actu = $bd->prepare('DELETE FROM tout_actu WHERE id=?');
            $req_tout_actu->execute(array($_GET['id']));
            echo 'Votre actualité a été supprimer avec succès';
            
        } else if ($_GET['action'] == 'modifier') {
            require_once('../Actu/datab.php');
            if (isset($_POST['submit'])){
                extract($_POST);

                $actu_upd=$bd->prepare('UPDATE tout_actu SET titre=?,Contenu=? WHERE id=?');
                $actu_upd->execute(array($titre,$contenu,$_GET['id']));
                
            }


            $req_modif=$bd->prepare('SELECT * FROM tout_actu WHERE id=?');
            $req_modif->execute(array($_GET['id']));
            $modif=$req_modif->fetch(PDO::FETCH_OBJ);


            ?>
                        <form action="" method="post">
                            <input type="text" name="titre" required="" value="<?php echo $modif->titre; ?>" class="form form-control"><br>
                            <textarea name="contenu" required="" class="form form-control"values="<?php echo $modif->contenu; ?>"></textarea><br>
                            
                            <input type="submit" name="submit" class="btn btn-primary"><br><br><br>
                        </form>

             <?php
        }
    }
    ?>





</div>



<?php

include_once '../include/footer.php';

?>