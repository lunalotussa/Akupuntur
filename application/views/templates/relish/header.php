<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,300,500,600,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet" type="text/css" />

    <!-- STYLESHEETS -->
    <link href="<?= base_url('assets/relish/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/css/vertical.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/css/flaticon.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/css/ihover.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/relish/revslider/css/settings.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url('assets/relish/css/styles.css'); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <title>Akupuntur</title>
</head>

<body>
    <!-- PAGE -->

    <div class="page" id="top">
        <!-- preloader -->

        <div id="preloader">
            <div class="preloader-wave"></div>
        </div>

        <!-- / preloader -->

        <!-- sticky menu -->

        <header class="sticky-header js-stick top-fixed">
            <div class="container">
                <nav class="main-nav">
                    <div class="full-wrapper align-center">
                        <!-- logo sticky -->

                        <div class="nav-logo-wrap-sticky">
                            <a href="<?= base_url(); ?>" class="logo">
                                <img src="<?= base_url('assets/relish/images/logo.png'); ?>" data-at2x="<?= base_url('assets/relish/images/logo@2x.png'); ?>" />
                            </a>
                        </div>

                        <!-- / logo sticky -->
                        <!-- menu mobile bars -->

                        <div class="mobile-nav">
                            <i class="fa fa-bars"></i>
                        </div>

                        <!-- / menu mobile bars -->

                        <div class="inner-nav desktop-nav">
                            <ul class="clearlist">
                                <li>
                                    <a href="<?= base_url(); ?>">Home</a>
                                </li>
                                <li class="sep">
                                    <a>/</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('landing/jasa'); ?>">Layanan</a>
                                </li>
                                <li class="sep">
                                    <a>/</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('#galeri'); ?>">Galeri</a>
                                </li>

                                <!-- logo menu -->

                                <li class="nav-logo-wrap">
                                    <a href="<?= base_url(); ?>" class="logo">
                                        <img src="<?= base_url('assets/relish/images/logo.png'); ?>" data-at2x="<?= base_url('assets/relish/images/logo@2x.png'); ?>" alt />
                                    </a>
                                </li>

                                <!-- / logo menu -->

                                <li>
                                    <a href="<?= base_url('#tentang'); ?>">Tentang Kami</a>
                                </li>
                                <li class="sep">
                                    <a>/</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('#kontak'); ?>">Kontak</a>
                                </li>
                                <li class="sep">
                                    <a>/</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('login'); ?>">Masuk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- / sticky menu -->