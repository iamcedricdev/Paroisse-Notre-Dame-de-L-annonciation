<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!---style css--->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../toastr.min.css">
    <!---google font--->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Login-Paroisse Notre Dame de l'Annonciation </title>
    <!---boostrap css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!---fontawesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>



    <header class="text-center text-lg-start bg-primary text-white">

        <!-- avant nav container debut -->
        <div class="container pt-1">
            <!-- Section: Social media -->
            <section class="mb-1">
                <!-- Facebook -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fa fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fa fa-twitter"></i></a>
                <!-- Google -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fa fa-google"></i></a>
                <!-- Instagram -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fa fa-instagram"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- avant nav container fin -->

    </header>

    <!---navbar debut--->
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../images/Oribat.png" alt="image" height="42" width="42">Paroisse Notre Dame de l'Annonciation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-end">
                    <li class="nav-item mx-2 ">
                        <a class="nav-link active" aria-current="page" href="../index.html" id="acceuil">Acceuil</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/index.html #actu">Actualité</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="../index.html #horaire">horaire</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            La paroisse
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Seminaire</a></li>
                            <li><a class="dropdown-item" href="#">Formation</a></li>
                            <li><a class="dropdown-item" href="#">Humanitaire</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Equipe Pastorale/equipe.html">Equipe Pastorale</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="../Contact/Contact.html">Contactez-nous</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="../index.html #offrande">offrande</a>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link active" aria-current="page" href="#" style="color:var(--bs-blue)">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!---navbar fin--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!---carousel debut--->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="h-100 w-100" src="https://cdn.pixabay.com/photo/2017/04/10/08/08/church-windows-2217785__340.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-block">
                    <div class="anim">
                        <h2>Bienvenue a la paroisse Notre Dame De <br>l'Annonciation </h2>
                        <!---<p>Eglise Catholique </p>-->
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!---carouel fin--->
    <!---section formulaire debut--->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">ESPACE UTILISATEUR</span>
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><b>Se Connecter</b></div>
                    <div class="card-body">
                        
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label">Adresse e-mail</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez votre adresse e-mail">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="Passworrd" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="Passworrd" placeholder="Entrez votre mot de passe ">
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="connexion">Connexion</button>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Inscription</b></div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nom</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre nom">
                                    <small id="error-name" class="form-text text-danger"></small>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="surname" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Entrez votre prénom">
                                    <small id="error-surname" class="form-text text-danger"> </small>
                                </div>
                            </div>

                            <?php
                            setlocale(LC_TIME, 'fr_FR');
                            $date = date('Y-m-d');
                            ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birthdays" class="form-label">Date de Naissance</label>
                                    <input type="date" class="form-control" name="birthdays" id="birthdays" placeholder="Entrez votre date de naissance" value="<?php echo $date; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="genre" class="form-label">Civilité</label>
                                    <select class="form-select form-select-md col-md-6" aria-label=".form-select-lg example" name="genre" id="genre">
                                        <option selected value="Monsieur">Monsieur</option>
                                        <option value="Madame">Madame</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="adresse" class="form-label">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" aria-describedby="adresse" placeholder="exemple : bingerville">
                                    <small id="error-adresse" class="form-text text-danger"> </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="text" class="form-control" id="telephone" placeholder="0102030405">
                                    <small id="error-telephone" class="form-text text-danger"> </small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">e-mail</label>
                                    <input type="email" class="form-control" name="email" id="email-inscription" aria-describedby="emailHelp" placeholder="Entrez votre adresse e-mail">
                                    <small id="error-mail" class="form-text text-danger"> </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Password1" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" name="Password" id="Password-inscription" placeholder="Entrez votre mot de passe ">
                                    <small id="error-Password" class="form-text text-danger"> </small>
                                </div>
                            </div>

                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" id="Inscription">S'inscrire</button>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!---section formulaire fin--->



    <!---section footer debut--->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-primary text-white pt-4 footee">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Paroisse Notre Dame de l'Annonciation
                        </h6>
                        <p>

                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- sommaire column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Sommaire
                        </h6>
                        <p>
                            <a href="#acceuil" class="text-reset">Accueil</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Actualité</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Horaire</a>
                        </p>
                        <p>
                            <a href="Contact/Contact.html" class="text-reset">Contactez-nous</a>
                        </p>
                    </div>
                    <!-- sommaire fin column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fa fa-home me-3 text-secondary"></i>Cité Oribat</p>
                        <p>
                            <i class="fa fa-envelope me-3 text-secondary"></i>
                            info@secretaria.com
                        </p>
                        <p><i class="fa fa-phone me-3 text-secondary"></i> +225 01 01 01 01 01</p>
                        <p><i class="fa fa-print me-3 text-secondary"></i> +225 01 01 01 01 01</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4"> Developpé par <a href="https://first-agency-ci.netlify.app/" style="color: #ffff5f!important"> FIRST AGENCY</a>
            © 2023 Copyright Tout droit Reservé

        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!---section footer fin --->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/toastr/toastr.min.js"></script>

    <script type="text/javascript"> 
        
        jQuery(document).ready(function($)
         {
           //connexion de l'utilisateur
           $('#connexion').click(function(){

            var email = $('#email').val();
            var Passworrd = $('#Passworrd').val();

            if(email !=''){
                if(Passworrd != ''){
                    
                    $.ajax({
                        type: 'POST',
                        url: 'verif_email.php',
                        data: 'email='+ email,
                        success: function(data)
                        {
                            if(data == 1){
                                //verfication du mot de passe
                              $.ajax({
                                type: 'POST',
                                url:'verify_Pass.php',
                                data: 'Passworrd='+ Passworrd + '&email='+ email,
                                success: function(data){
                                    if(data == 1){
                                        window.location.href = 'conext.php?email='+ email;
                                    }
                                    else{
                                        $('#Passworrd').addClass('is-invalid');
                                        error('mot de passe incorrect');
                                    }
                                }

                              })
                                
                            }
                            else{
                                $('#email').addClass('is-invalid');
                                error('l\'adresse e-mail est incorrect');
                            }
                           
                        }
                    })
                }
                else{
                    $('#Passworrd').addClass('is-invalid');
                    error('le mot de passe est obligatoire');
                }
            }
            else
            {
                $('#email').addClass('is-invalid');
                error('l\'adresse e-mail est obligatoire');
            }
               
           }) 
        

        //verfication du nom
        $('#name').keyup(function() {
            var name = $('#name').val();
            if (/^[a-zA-Z ]+$/.test(name) || name === "") {
                $('#name').removeClass('is-invalid');
                $('#error-name').text('');
            } else {
                $('#name').addClass('is-invalid');
                $('#error-name').text('le nom ne doit pas contenir des chiffres');
            }
        });

        //verfication du prenom
        $('#surname').keyup(function() {
            var surname = $('#surname').val();
            if (/^[a-zA-Z ]+$/.test(surname) || surname === "") {
                $('#surname').removeClass('is-invalid');
                $('#error-surname').text('');
            } else {
                $('#surname').addClass('is-invalid');
                $('#error-surname').text('le prenom ne doit pas contenir des chiffres');
            }
        });

        //verfication du Adresse
        $('#adresse').keyup(function() {
            var adresse = $('#adresse').val();
            if (/^[a-zA-Z ]+$/.test(adresse) || adresse === "") {
                $('#adresse').removeClass('is-invalid');
                $('#error-adresse').text('');

            } else {
                $('#adresse').addClass('is-invalid');
                $('#error-adresse').text('Veuillez entrer une adresse valide');

            }
        })



        //verfication du telephone
        $('#telephone').keyup(function() {
            var telephone = $('#telephone').val();
            if (/^[0-9]+$/.test(telephone) || telephone === "") {
                $('#telephone').removeClass('is-invalid');
                $('#error-telephone').text('');

            } else {
                $('#telephone').addClass('is-invalid');
                $('#error-telephone').text('Veuillez entrer un numéro valide');
            }
        });

        //verfication du mail
        $('#email-inscription').keyup(function() {
            var mail = $('#email-inscription').val();

            if (/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(mail) || mail === "") {
                $('#email-inscription').removeClass('is-invalid');
                $('#error-mail').text('');

            } else {
                $('#email-inscription').addClass('is-invalid');
                $('#error-mail').text('Veuillez entrer un mail valide');
            }
        })

        //verfication du mot de passe
        $('#Password-inscription').keyup(function() {
            var password = $('#Password-inscription').val();
            var taille = password.length;
            if (taille > 8 || password == "") {
                $('#Password-inscription').removeClass('is-invalid');
                $('#error-Password').text('');
            } else {
                $('#Password-inscription').addClass('is-invalid');
                $('#error-Password').text('Votre mot de passe doit contenir au moins 8 caractères');
            }
        })

        //lorsque l'user cliquera sur le bouton inscription
        $('#Inscription').click(function()

            {

                var name = $('#name').val();
                var surname = $('#surname').val();
                var birthdays = $('#birthdays').val();
                var Adresse = $('#adresse').val();
                var telephone = $('#telephone').val();
                var email = $('#email-inscription').val();
                var password = $('#Password-inscription').val();
                var genre = $('#genre').val();
                var taille = password.length;
                var date = <?php echo $date; ?>


                if (name != "")

                {
                    if (surname != "") {
                        if (Adresse != "") {
                            if (telephone != "") {
                                if (email != "") {
                                    if (password != "") {


                                        if (/^[a-zA-Z ]+$/.test(name)) {

                                            if (/^[a-zA-Z ]+$/.test(surname)) {


                                                if (/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(email) || email === "") {

                                                    if (taille > 8) {

                                                        $.ajax({ 
                                                            type: 'POST',
                                                            url: 'inscription.php',
                                                            data: 'name=' + name + '&surname=' + surname + 
                                                            '&birthdays=' + birthdays + '&Adresse=' + Adresse +
                                                             '&telephone=' + telephone + '&email=' + email + 
                                                             '&password=' + password + '&genre=' + genre,
                                                             
                                                             
                                                            success: function(data)
                                                            
                                                            {

                                                                if (data == 1) {

                                                                    $('#email-inscription').addClass('is-invalid');
                                                                    $('#error-mail').text('Ce mail existe déjà');
                                                                    
                                                                }
                                                                else {
                                                                    
                                                                
                                                                $('#name').val('');
                                                                $('#surname').val('');
                                                                $('#birthdays').val(date);
                                                                $('#adresse').val('');
                                                                $('#telephone').val('');
                                                                $('#email-inscription').val('');
                                                                $('#Password-inscription').val('');

                                                                $('#name').removeClass('is-invalid');
                                                                $('#surname').removeClass('is-invalid');
                                                                $('#birthdays').val(date);
                                                                $('#adresse').removeClass('is-invalid');
                                                                $('#telephone').removeClass('is-invalid');
                                                                $('#email-inscription').removeClass('is-invalid');
                                                                $('#Password-inscription').removeClass('is-invalid');

                                                                sucess('Votre inscription a bien été effectuée');
                                                            }
                                                            }
                                                        })

                                                    } else {
                                                        $('#Password-inscription').addClass('is-invalid');
                                                        error('Votre mot de passe doit contenir au moins 8 caractères');
                                                    }
                                                } else {
                                                    $('#email-inscription').addClass('is-invalid');
                                                    error('Veuillez entrer un mail valide');
                                                }

                                            } else {
                                                $('#surname').addClass('is-invalid');
                                                error('le prenom ne doit pas contenir des chiffres');
                                            }


                                        } else {
                                            $('#name').addClass('is-invalid');
                                            error('le nom ne doit pas contenir des chiffres');
                                        }
                                    } else {
                                        error('Veuillez entrer un mot de passe');
                                        $('#Password-inscription').addClass('is-invalid');
                                    }
                                } else {
                                    error('Veuillez entrer un mail valide');
                                    $('#email-inscription').addClass('is-invalid');
                                }

                            } else {
                                error('Veuillez entrer un numéro valide');
                                $('#telephone').addClass('is-invalid');
                            }

                        } else {
                            error('Veuillez entrer une adresse valide');
                            $('#adresse').addClass('is-invalid');

                        }

                    } else {
                        error('Veuillez entrer un prenom valide');
                        $('#surname').addClass('is-invalid');
                    }


                } else {
                    error('Veuillez entrer un nom valide');
                    $('#name').addClass('is-invalid');

                }

            });
        //toastr message d'erreur
        function error(element) {

            toastr.error(element, 'Erreur', {
                "positionClass": "toast-bottom-center",
                timeOut: 5000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

            })

            
            }
            //toastr message valide
            function sucess(element) {
                
                toastr.success(element, 'Validé', {
                    "positionClass": "toast-bottom-center",
                    timeOut: 5000,
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false

                })
           

        }

    })
    </script>


</body>

</html>