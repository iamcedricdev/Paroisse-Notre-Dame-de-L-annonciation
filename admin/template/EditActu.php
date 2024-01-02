<?php getHeader() ?>

<?php include('./config/datab.php'); ?>
<div class="row page-titles">
  <div class="col-md-5 align-self-center">
    <h4 class="text-themecolor">Modifier une Actualité</h4>
  </div>
  <div class="col-md-7 align-self-center text-right">
    <div class="d-flex justify-content-end align-items-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
        <li class="breadcrumb-item active"> Modifier une Actualité </li>
      </ol>

    </div>
  </div>
</div>
<div class="messages">
  <?php if (isset($alert)) {
    echo alertMessage($alert);
  } ?>
</div>
<form action="" method="post" enctype="multipart/form-data">

  <?php

  $req_tout_actu = $bd->prepare('SELECT * FROM tout_actu');
  $req_tout_actu->execute(array()); ?>

  <div class="row">

    <div class="col-lg-5 grid-margin stretch-card">
      <div class="card">

        <div class="card-body">
          <h4 class="card-title">Modifier </h4>
          <?php if ($_GET['page'] == 'EditActu') {
            include('./config/datab.php');
            if (isset($_GET['action'])) {
              if ($_GET['action'] == 'modifier') {
                if (!isset($_POST['Modify'])) {
                  extract($_POST);

                  $actu_upd = $bd->prepare('UPDATE tout_actu SET Titre=?, Contenu=? WHERE id=?');
                  $actu_upd->execute(array($titre, $contenu, $_GET['id']));
                  header('Location: admin.php?page=AddActu');
                }

              }

            }
            $req_modif = $bd->prepare('SELECT * FROM tout_actu WHERE id=?');
            $req_modif->execute(array($_GET['id']));
            $modif = $req_modif->fetch(PDO::FETCH_OBJ);


          }
          ?>



            <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
            <input type="text" name="titre" required="" value="<?php echo $modif->titre; ?>"
              class="form form-control"><br>
            <textarea name="contenu"  class="form form-control"
              values="<?php echo $modif->contenu; ?>"></textarea><br>

            <input type="submit" name="submit" value="Modifier" class="btn btn-primary"><br><br><br>
          </form>

        </div>
      </div>
    </div>
  </div>




  <?php getFooter() ?>