<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DART</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/cc.jpg')}}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <link href="assets/css/variables-green.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">

                <img src="{{asset('img/cc.jpg')}}" alt="">
                <h1>Digital Dart<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html#about">A propos</a></li>
                    <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            <a class="btn-getstarted scrollto" href="{{ route('user.login') }}">Commencer une Dart</a>



        </div>
    </header><!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{asset('img/cc.jpg')}}" class="img-fluid animated" style="width: 300px">
            <h2>Bienvenue dans <span>Digital Dart</span></h2>
            <p>Une plateforme qui offre des fonctionnalités modernes de la pratique marocaine Dart</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Commencer</a>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>à propos de nous</h2>
                    <p>Plus d'informations</p>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h3 class="pt-0 pt-lg-5">Objectifs/Processus</h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">nos objectifs</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">definition</a></li>

                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">

                                <p class="fst-italic">Voici quelques objectifs :</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Élargir la portée internationale de la pratique du darte :</h4>
                                </div>
                                <p>En utilisant une plateforme numérique gérée par une association, notre objectif est
                                    d'étendre la pratique traditionnelle marocaine du darte à un public mondial.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Moderniser la gestion des fonds collectés :</h4>
                                </div>
                                <p>Nous visons à rendre le processus de collecte de fonds plus transparent et sécurisé
                                    en utilisant des technologies numériques avancées.</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Faciliter la création et la gestion des dartes :</h4>
                                </div>
                                <p>À travers une plateforme numérique conviviale et sécurisée, nous souhaitons
                                    simplifier la création et la gestion des dartes pour les utilisateurs.</p>

                            </div>
                            <!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">

                                <p class="fst-italic">plus d'informations </p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4> Dart, une pratique marocaine transmise de génération en génération</h4>
                                </div>
                                <p></p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Le processus de Dart au Maroc implique la formation d'un groupe de personnes qui
                                        contribuent régulièrement à une cagnotte commune. Chaque membre s'engage à
                                        verser une somme d'argent à intervalles réguliers, généralement mensuellement. À
                                        chaque mois, un membre du groupe reçoit la somme totale de la cagnotte, et ce
                                        processus se répète jusqu'à ce que tous les participants aient reçu leur part.
                                    </h4>
                                </div>
                                <p></p>


                            </div><!-- End Tab 2 Content -->



                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Nos Services</h2>
                    <p></p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Inscription à une dart : </h3>
                                </a>
                                <p> Les membres ont la possibilité de s'inscrire à une dart de leur choix via notre
                                    plateforme en ligne, leur offrant ainsi l'accès à des événements, des ateliers et
                                    des ressources pertinents.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Création de votre propre dart : </h3>
                                </a>
                                <p>Nous mettons à la disposition de nos membres les outils et les ressources nécessaires
                                    pour créer leur propre dart, en fournissant des conseils et un accompagnement tout
                                    au long du processus.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Gestion d'une dart :</h3>
                                </a>
                                <p> Notre plateforme propose des fonctionnalités avancées pour aider les membres à gérer
                                    efficacement leur dart, y compris la gestion des membres, des événements, des
                                    finances et des communications.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Suivi de dart:</h3>
                                </a>
                                <p>Les membres ont la possibilité de suivre l'évolution de leur dart grâce à des outils
                                    de suivi et de reporting intégrés, qui leur permettent de mesurer l'impact de leurs
                                    actions et de prendre des décisions éclairées.</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->


                </div>

            </div>
        </section><!-- End Services Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contacter nous</h2>
                    <p>pour avoir plus ...</p>
                </div>

            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>entrer en contact</h3>
                            <p></p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Localisation:</h4>
                                    <p></p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>tel:</h4>
                                    <p>+212 6</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="votre nom" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="votre Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Sujet" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Chargement</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message est bien recu. Maerci!</div>
                            </div>
                            <div class="text-center"><button type="submit">envoyer un message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>MaDart</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">

                            <p>
                                <strong>Tel:</strong> +212 6<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>liens Utils</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">a propos</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">



                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
