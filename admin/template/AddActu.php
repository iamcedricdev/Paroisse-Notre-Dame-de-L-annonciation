<?php getHeader() ?>

<?php include('./config/datab.php'); ?>
<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Nouvelle Actualité</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
                                <li class="breadcrumb-item active"> Nouvelle Actualité </li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <div class="messages"><?php if(isset($alert)){echo alertMessage($alert);} ?></div>
<form action="" method="post" enctype="multipart/form-data">

<?php

$req_tout_actu = $bd->prepare('SELECT * FROM tout_actu');
$req_tout_actu->execute(array()); ?>

<div class="row">
              <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier ou Supprimer</h4>
                      <table class="table">
                      <thead>
                        <tr>
                          <th>Titre</th>
                          <th>Contenue</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php
          while ($rep = $req_tout_actu->fetch(PDO::FETCH_OBJ)) {
            ?>
                        <tr>
                        <td>
                <?php echo $rep->titre; ?>
              </td>
              <td>
                <?php echo substr($rep->contenu, 0, 15); ?> ...
              </td>
              <td class="txt-oflo"><a href="admin.php?page=EditActu&?action=modifier&id=<?php echo $rep->id; ?>"><i
                        class="icon-note"></i> modifier</a></td>
                          <td ><a class="text-danger" href="" onclick="event.preventDefault();confirm('voulez vous vraiment supprimer?')&&window.location.replace('admin.php?page=AddActu&action=delete&id=<?php echo $rep->id; ?>')"><i class="icon-trash"></i> supprimer</a></td>
                        </tr>
                        
                      </tbody>
                      <?php
          }
          ?>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                 
                   
                
                <h4 class="card-title">Ajouter une Actualité</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Titre</label>
                        <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleTextarea1">Contenue</label>
                        <textarea class="form-control" id="contenu" name="contenu" rows="4"></textarea>
                      </div>
                      
                
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="fichier" class="file-upload-default">
                        <div class="input-group col-xs-12">
                        <input type="file" class="btn btn-primary" name="fichier" class="form form-control"><br><br> 
                          
                        </div>
                      </div>
                      
                      <input type="submit" name="submit" class="btn btn-success" value="Ajouter"><br><br><br>
                    
                    </form>
                  </div>
              
                </div>
              </div>
            </div>

<?php ?>



<?php getFooter() ?>