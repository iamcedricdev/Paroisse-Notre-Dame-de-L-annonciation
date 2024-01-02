<?php getHeader();?>
  <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="?page=acceuil">Acceuil</a></li>
                                <li class="breadcrumb-item active"> Mon Profile</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                            <?php if(isset($alert)){echo alertMessage($alert);} ?>
                                <form class="form-horizontal form-material" method="POST" action="">
                                    <div class="form-group">
                                        <label class="col-md-12">Nom d'utilisateur</label>
                                        <div class="col-md-12">
                                            <input type="text" name="username" value="<?php echo getAdmin();?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> Ancien mot de passe</label>
                                        <div class="col-md-12">
                                            <input type="password" name="oldpassword" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> Nouveau mot de passe</label>
                                        <div class="col-md-12">
                                            <input type="password" name="newpassword" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> Confirme mot de passe</label>
                                        <div class="col-md-12">
                                            <input type="password" name="confirmpassword" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="submit">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
    
            

<?php getFooter();?>