<?php getHeader(); ?>
<?php include('config/datab.php') ?>

<!-- Quick Action Toolbar Starts-->

<!-- Quick Action Toolbar Ends-->

<?php $contact = $bd->prepare('SELECT * FROM contact');
$contact->execute(array()); ?>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex align-items-center mb-4">
          <h4 class="card-title mb-sm-0">Liste des contacts</h4>
          <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> </a>
        </div>
        <div class="table-responsive border rounded p-1">
          <table class="table">
            <thead>
              <tr>
                <th class="font-weight-bold">Nom et Prenom</th>
                <th class="font-weight-bold">Telephone</th>
                <th class="font-weight-bold">Email</th>
                <th class="font-weight-bold">Souhait</th>
                <th class="font-weight-bold">Message</th>
                <th class="font-weight-bold">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($rep = $contact->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                 <td>
                  <?php echo $rep->nom . ' ' . $rep->prenom; ?>
                  </td>
                  <td>
                    <?php echo $rep->telephone; ?>
                  </td>
                  <td>
                    <?php echo $rep->email; ?>
                  </td>
                  <td>
                    <?php echo $rep->souhait; ?>
                  </td>
                  <td>
                  <a href="#">  <?php echo $rep->message; ?></a>
                  </td>
                  <td><a class="text-danger" href="" onclick="event.preventDefault();confirm('voulez-vous vraiment supprimer?')&&window.location.replace('admin.php?page=acceuil&action=delete&id=<?php echo $rep->id; ?>');"><i class="icon-trash"></i> supprimer</a></td>
                </tr>
                </tr>


              <?php } ?>
            </tbody>
          </table>
        </div>
       </div>
    </div>
  </div>
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->


<?php getFooter(); ?>