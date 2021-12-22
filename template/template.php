<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link rel="icon" href="<?php site_url(); ?>/template/img/init_logo.png">
    <link href="<?php site_url(); ?>/template/css/style.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <link href="<?php site_url(); ?>/template/css/profil.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <link href="<?php site_url(); ?>/template/css/theme.css?<?= time() ?>" rel="stylesheet" type="text/css" />
    <!-- animated wow css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" > -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- knbcfksqbcds -->


</head>

<body>
    <!-- <div class="wrap"> -->
    <main class="main" id="top">
        <span class="hidden">
            <h1><?php site_name(); ?></h1>
        </span>
        <!-- <nav class="menu" > -->

        <!-- <nav class="navbar navbar-expand-md navbar-light" > -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll" id="navigationscroll">
            <div class="container">
                <!-- <?php nav_menu(); ?> -->
                <a class="navbar-brand d-inline-flex" href="<?php site_url(); ?>">
                    <img src="<?php site_url(); ?>/template/img/logo_coquine.png" alt="..." width="256" class="d-inline-block">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
                        <li class="nav-item px-2">
                            <?php nav_menu(); ?></li>
                    </ul>
                </div>
            </div>
        </nav>






        <article>
            <h2 class="hidden"><?php page_title(); ?></h2>
            <?php page_content(); ?>
        </article>



        <footer>
            <section class="py-11  border-bottom ">
                <div class="bg-holder overlay overlay-light" style="background-color: #303030;">
                </div>
                <!--/.bg-holder-->
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <!-- <h5 class="lh-lg fw-bold text-1000 text-white">Company Info</h5> -->
                            <img src="<?php site_url(); ?>/template/img/logo_coquine.png" alt="..." width="300">
                        </div>

                        <div class="border-bottom border-1"></div>

                        <div class="row">
                            <div class="col">
                                <p class="my-2 text-center text-md-start text-white-50"><?php echo date('Y'); ?> | &copy <?php site_name(); ?> <?php site_version(); ?></p>
                                <!-- <p class="my-2 text-center text-md-start" style="color: white;"> &copy Site web name - <script type="text/javascript">document.write(new Date().getFullYear());</script></p> -->
                            </div>
                            <div class="col my-2 ">
                                <a class="text-decoration-none text-white-50" href="#!">Condition d'utilisation</a>
                            </div>
                            <div class="col my-2 ">
                                <a class="text-decoration-none text-white-50" href="#!">Mentions légales</a>
                            </div>
                            <div class="col my-2">
                                <a class="text-decoration-none text-white-50" s href="#!">Politique de confidentialité</a>
                            </div>
                            <div class="col">
                                <div class="my-2 text-center text-md-end">
                                    <a href="#!"><span class="me-4 text-white-50" data-feather="facebook"></span></a>
                                    <a href="#!"><span class="me-4 text-white-50" data-feather="instagram"></span></a>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </footer>

<!-- SCROLL TO BACK TO TOP BUTTON -->
<a class="up shadow" id="btn-back-to-top">
  <i class="size-feather" data-feather="chevrons-up"></i>
</a>

<!-- fin -->




        <!-- custom js file link -->

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/is_js/0.8.0/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script type="text/javascript" src="https://unpkg.com/feather-icons@4.27.0/dist/feather.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php site_url(); ?>/template/js/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/anchorme/2.0.0/node/utils.js"></script> -->

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/3.2.0/feather.min.js"></script> -->


    <script>
        AOS.init();
        feather.replace();
        new WOW().init();
    </script>
    <script src="<?php site_url(); ?>/template/js/theme.js"></script>
    <script src="<?php site_url(); ?>/template/js/script.js"></script>
</body>

</html>