<?php
include_once("Actu/datab.php");
//recuperer le nombre d'enregistrement
$count = $bd->query("SELECT COUNT(*) as cpt FROM tout_actu");
$count->Setfetchmode(PDO::FETCH_ASSOC);
$count->execute();
$tcount = $count->fetchAll();

//pagination
@$page = $_GET['page'];
$nbre_element_par_page = 5;
$nbr_de_page = ceil($tcount[0]['cpt'] / $nbre_element_par_page);
$debut = ($page - 1) * $nbre_element_par_page

    //affichage de la page

    ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="btn.js"></script>

    <!---style css--->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="smooth.css">
    <!---google font--->

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Acceuil-Paroisse Notre Dame de l'Annonciation </title>
    <!---boostrap css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!---fontawesome--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="btn1">
        <a href="#"><img src="arrow-up-solid.svg" class="icone"></a>
    </div>

    <header class="text-center text-lg-start bg-primary text-white">

        <!-- avant nav container debut -->
        <div class="container pt-1">
            <!-- Section: Social media -->
            <section class="mb-1">
                <!-- Facebook -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fa fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fa fa-twitter"></i></a>
                <!-- Google -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fa fa-google"></i></a>
                <!-- Instagram -->
                <a class="btns btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fa fa-instagram"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- avant nav container fin -->

    </header>

    <!---navbar debut--->
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/Oribat.png" alt="image" height="42" width="42">Paroisse
                Notre
                Dame de l'Annonciation </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-end">
                    <li class="nav-item mx-2 ">
                        <a class="nav-link active" aria-current="page" href="#" style="color:var(--bs-blue)"
                            id="acceuil">Acceuil</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="Actu/actu.php">Actualité</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#horaire">horaire</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            La paroisse
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="Formation/Formation.php">Formation</a></li>
                            <li><a class="dropdown-item" href="#">Humanitaire</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Equipe Pastorale/equipe.php">Equipe Pastorale</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="Contact/Contact.php">Contactez-nous</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#offrande">offrande</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!---navbar fin--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!---carousel debut--->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="h-100 w-100" src="https://cdn.pixabay.com/photo/2014/10/22/18/16/church-498525_1280.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption  d-block">

                    <h2>Bienvenue a la paroisse Notre Dame De <br>l'Annonciation </h2>
                    <!---<p>Eglise Catholique </p>-->

                </div>
            </div>

        </div>

    </div>

    <!---carouel fin--->

    <!---section actu debut-->

    <section class="actu" id="actu" data-aos="fade-up">
        <div class="container">
            <h2 class="title" id="actu"> Actualité</h2>
            <div class="row">
                <?php
                include_once("Actu/datab.php");
                $req = $bd->prepare("SELECT * FROM tout_actu limit 2");
                $req->execute();
                while ($rep = $req->fetch(PDO::FETCH_OBJ)) { ?>
                    <div class="col-md-3" style="margin-left: 200px ">
                        <div class="card card-box" style="width: 30rem; margin: 5px ">
                            <img src="../Paroisse Notre Dame de L'annonciation/admin/app/images/<?php echo $rep->image_name; ?>"
                                class="card-img-top" alt="...">
                            <div class="card-body-a">
                                <h5 class="card-title">
                                    <?php echo $rep->titre; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo substr($rep->contenu, 0, 30); ?>...
                                </p>
                                <p>
                                    <?php echo $rep->date; ?>
                                </p>
                                <a href="Actu/actu.php" class="fa fa-arrow-right"></a>
                            </div>
                        </div>

                    </div>
                <?php } ?>


            </div>


        </div>
        </div>
    </section>
    <!---section actu fin--->
    <!---presentation  début--->
    <main id="presentation" class="presentation" data-aos="fade-up">
        <div class="presentaton mt-5 mb-5">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-md-3 m-5 align-items-stretch ">
                        <img class="img-fluid " src="images/oribat.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="h2-responsive section-presentation fw-bold text-start my-2">
                            Presentation
                        </h2>
                        <p class="lh-1">
                            Les frères du Couvent Saint Dominique son heureux de vous accueillir. Ils animent depuis
                            1959 la paroisse St Paul avec une exception pendant la période de 2005 à 2015 où ils ont dû
                            se retirer.
                            En 2015, ils y reviennent et depuis septembre 2019, St Paul est désormais une paroisse
                            dominicaine à part entière, hors unité pastorale.
                        <p></p>
                        <p class="lh-1"> Kamagra Oral Jelly contient le même principe actif que Kamagra, à savoir le
                            sildénafil, présenté sous la forme de comprimés à avaler.
                            Semblable au Kamagra, Kamagra Oral Jelly est interdit en France. Les risques pour la santé
                            et l’efficacité du produit ne sont pas encore connus.
                            C’est bien dans l’esprit de leur fondateur Saint Dominique, il y a plus de 800 ans, que les
                            Frères en ont fait leur projet communautaire au service de l’Eglise à Genève.
                            Leur charisme dominicain souhaite faire de St-Paul un lieu de prière, un lieu de
                            l’intelligence de la foi et de l’accueil ouvert à quiconque est désireux d’avancer sur son
                            chemin de foi et d’humanité.
                            Là est leur défi au quotidien mais aussi leur enthousiasme… </p>
                        <p></p>
                        <p class="lh-1">« Allons avec assurance !, car c’est saint Dominique lui-même à la suite du
                            Christ, qui nous montre le chemin » (Alexandre Frezzato, OP, p.11 Saint Dominique)
                            Nous vous invitons maintenant à découvrir les activités proposées à Notre Dame de
                            l'annonciation </p>
                        <p></p>
                        <a href="">
                            <p class="lh-1"> Lire Plus</p>
                        </a>
                        <h2 class="h2-responsive fw-bold text-center my-2">Alors venez et voyez...</h2>
                        </p>

                        <p>&nbsp;</p>


                    </div>

                </div>
            </div>
        </div>
    </main>

    <!---presentation  fin--->

    <!---section horaire debut --->
    <section id="horaire" >
    <section class="mb-4 section-horaire" data-aos="fade-up" >
        <div class="container mt-3">
            <h2>Horaire des Messes</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Lundi</td>
                        <td>7H30</td>
                        <td></td>
                        <td></td>
                        <td>19H00</td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>7H30</td>
                        <td></td>
                        <td></td>
                        <td>19H00</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>7H30</td>
                        <td></td>
                        <td></td>
                        <td>19H00</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>7H30</td>
                        <td></td>
                        <td></td>
                        <td>19H00</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>7H30</td>
                        <td></td>
                        <td></td>
                        <td>19H00</td>
                    </tr>
                    <tr>
                        <td>Dimanche</td>
                        <td>7H00</td>
                        <td>9H00</td>
                        <td>11H00</td>
                        <td>19H00</td>
                    </tr>
                </tbody>

            </table>

        </div>

    </section>
    </section>
    <!---section horaire fin --->


    <!---section Sacrement debut --->
    <section class="sacrement" class="sacrement" data-aos="fade-up">
        <div class="container">
            <h2 class="title">Les Sacrements</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="images/baptême.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Le Baptême</h5>
                            <p class="card-text">C’est le premier sacrement qui nous ouvre au chemin de la foi pour nous
                                faire découvrir combien Dieu nous aime. Nous entrons dans la communauté d’hommes et de
                                femmes qui croient en cet amour de Dieu révélé par le Christ. Ainsi nous constituons
                                l’Eglise, bâtie de « pierres vivantes », qui nous accompagne tout au long de notre vie.
                                C’est un chemin de liberté offert par le Christ à chacune et chacun, quel que soit son
                                âge et son histoire…</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/communion.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">La communion</h5>
                            <p class="card-text">C’est le sacrement de l’Eucharistie proposé pour la première fois sur
                                notre chemin de foi. Après un temps de préparation nous entrons par ce sacrement dans
                                une relation personnelle et unique avec le Christ. Cette relation se découvre
                                progressivement tout au long de notre vie. Elle se nourrit de ce sacrement dans un
                                dialogue avec la Parole de Dieu mais aussi proclamé dans le cadre de célébrations
                                communautaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/confirmation.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">La Confirmation</h5>
                            <p class="card-text">Par ce sacrement, c’est affermir le lien des baptisés avec l’Eglise par
                                l’Esprit Saint qui les comble de ses dons multiples. C’est une manière lucide et
                                responsable de nous affirmer dans notre foi. Par ce sacrement de la confirmation, il
                                fait du chrétien un témoin de Jésus-Christ en paroles et en actes.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/pardon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">La Réconciliation, le pardon</h5>
                            <p class="card-text">le sacrement de réconciliation ou du pardon, est donné au cours d’un
                                dialogue avec le prêtre lorsque les liens de l’amour ont été brisés ou affaiblis. Ce
                                sacrement nous réconcilie avec nous-même, avec nos frères, nos soeurs et avec Dieu. Il a
                                été institué par le Christ en vue de la guérison de l’âme. C’est un sacrement de la
                                libération et du retour à la vie.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/mariage.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Le Mariage</h5>
                            <p class="card-text">Là, où est l’amour, Dieu est présent. Le Christ par toute son existence
                                et par le don de sa vie dévoile le sens profond de tout engagement d’amour, de toute
                                alliance, du « OUI » que nous prononçons. Le sacrement du mariage s’exprime dans
                                l’échange du consentement que l’on se donne en présence de Dieu. Il s’engage dans cet
                                engagement définitif de l’un avec l’autre. C’est ici la base du sacrement du mariage,
                                que les fiancés se donnent mutuellement.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/malade.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">L’onction des malades</h5>
                            <p class="card-text">Comme le sacrement de la réconciliation, c’est un sacrement de
                                guérison, qui intervient pour apaiser, soigner et redonner force au chrétien atteint
                                dans sa santé, blessé en son corps et en son esprit ou qui affronte l’épreuve du grand
                                âge. Il aide à traverser une difficulté particulière avec la présence et la tendresse
                                même de Dieu qui ne l’abandonne jamais..</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/ordination.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">L’Ordination presbytérale</h5>
                            <p class="card-text">le sacrement de l’Ordre est le don spirituel que certains baptisés
                                appelés, reçoivent à l’occasion de l’ordination presbytérale qui les prépare à une
                                mission de salut d’ampleur universelle. Ils recoivent le don de l’Esprit Saint pour
                                enseigner, sanctifier et guider celles et ceux qui leur sont confiés..</p>
                        </div>
                    </div>
                </div>
                <p class="ls">Ces sacrements s’inscrivent dans votre parcours de vie et dans votre Foi. Nous sommes à
                    vos
                    côtés pour vous aider à vous orienter.
            </div>
        </div>
    </section>
    <!---section Sacrement fin --->


    <!---section offrande debut --->
    <section id="offrande">
    <section class="offrande" data-aos="fade-up">
        <h2 class="fait">Faire une offrande</h2>
        <div class="middle">
        <button class="but btn_1"> <img src="images/orange.png" alt=""style="width: 50px; height: 50px;"> +225 07 07 07 07 07</button>           
            <button class="but btn_2"> <img src="images/moov.png" alt="" style="width: 50px; height: 50px;"> +225 01 01 01 01 01</button>
            <button class="but btn_3"> <img src="images/mtn.png" alt="" style="width: 40px; height: 40px;"> +225 05 05 05 05 05 </button>
            <button class="but btn_4"> <img src="images/wave.png" alt="" style="width: 50px; height: 50px;"> +255 01 02 03 04 05</button>
        </div>
    </section>
    </section>
    <!---section offrande fin --->


    <!---section map debut --->

    <section class="map">
        <div class="container">
            <h2 class="title"> Localisation de notre Paroisse</h2>
            <div class="local">

            </div>
            <div class="row" style="margin-bottom: 30px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31778.123069389843!2d-3.9391194302596477!3d5.376446300413201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc19301aa3bf5dd%3A0xd9cd173a0d1677f3!2sParoisse%20Notre%20Dame%20de%20l&#39;annonciation%20Cit%C3%A9%20Oribat%20Feh%20Kesse!5e0!3m2!1sen!2sci!4v1683885419921!5m2!1sen!2sci"
                    width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>

    <!---section map fin --->

    <!---section footer debut--->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-primary text-white pt-4" data-aos="fade-up">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Paroisse Notre Dame de l'Annonciation
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
                            <a href="#actu" class="text-reset">Actualité</a>
                        </p>
                        <p>
                            <a href="#horaire" class="text-reset">Horaire</a>
                        </p>
                        <p>
                            <a href="Contact/Contact.html" class="text-reset">Contactez-nous</a>
                        </p>
                        <p>
                            <a class=" text-reset" aria-current="page" href="admin/index.php">Login</a>
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
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2023 Copyright Tout droit Reservé <br>Developpé par <a href="https://first-agency-ci.netlify.app/"
                target="_blank" style="color: yellow">FIRST AGENCY</a></span>

        </div>

        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!---section footer fin --->
    <script class="text/javascript">

        window.addEventListener("scroll", reveal);
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }
        {

        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>