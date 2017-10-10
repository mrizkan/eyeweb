<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Eye with Us</title>

    <meta name="description" content="Eye with Us" />
    <meta name="keywords" content="Eye with Us" />
    <meta name="author" content="Rizkan" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800italic,800,900italic,900,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200,100italic,100' rel='stylesheet' type='text/css'>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>animations.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>font-awesome.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>flaticon.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>loader.css" type="text/css"/>

    <!-- Menu Css -->
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>bootstrap-menu.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>slicknav.css">
    <!-- // Menu Css -->

    <!-- Light Box Css -->
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>ekko-lightbox.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>ekko-lightbox-dark-skin.css">
    <!-- // Light Box Css -->

    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>settings.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>layers.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>navigation.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>slider-one-thumb.css" />
    <!-- // Revolution Slider -->

    <!-- Owl Slider Css -->
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>owl.theme.css">
    <!-- // Owl Slider Css -->

    <!-- BX Slider -->
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url('media/css/') ?>jquery.bxslider.css" />-->
    <!-- // BX Slider -->

    <!-- Before After And Gallery Css -->
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>portfolio.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>twentytwenty.css">
    <!-- // Before After And Gallery Css -->

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>header.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>style.css">
    <link rel="stylesheet" href="<?= base_url('media/css/') ?>color.css">

    <!-- Custom Css -->



    <link rel="shortcut icon" href="<?= base_url('media/images/') ?>logo.png" />
    <link rel="apple-touch-icon" href="<?= base_url('media/images/') ?>logo.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('media/images/') ?>logo.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('media/images/') ?>logo.png" />

    <script type="text/javascript" src="<?= base_url('media/js/') ?>jquery-1.12.4.js"></script>

</head>

<body>

<!--PRELOADER-->
<section id="jSplash">
    <div class="sk-spinner sk-spinner-three-bounce">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
    </div>
</section>

<!-- Wrapper
=============================-->
<div class="wrapper">

    <!-- Header Section
    =============================-->

    <header id="header" class="grow-mode">
        <!--  Top bar -->
        <div class="top-bar top-bar-white">
            <div class="container">
                <div class="row">
                    <!-- Left Section -->
                    <div class="top-bar-left">
                        <ul class="social-icons clearfix">
                            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Left Section -->
                    <!-- Right Section -->
                    <div class="top-bar-right">
                        <ul class="right-top pull-left">
                            <li><a href="javascrip: void(0)"><i class="fa fa-clock-o"></i>Mon - Fri : 09:00 - 21:00</a></li>
                            <li><a href="javascrip: void(0)"><i class="fa fa-clock-o"></i>Everyday Break Time 13:30 - 16:30 (Sunday Closed)</a></li>
                            <li><a href="javascrip: void(0)"><i class="fa fa-phone"></i> +94 778 280 494</a></li>
                        </ul>

                    </div>
                    <!-- Right Section -->
                </div>
            </div>
            <span class="close fa fa-chevron-down"></span>    </div>
        <!--  // Top bar -->

        <!-- Menu Sections -->
        <nav class="navbar navbar-default dropdown-white">
            <div class="container">
                <div class="menu clearfix">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="Home"><img src="<?= base_url('media/images/') ?>logo.png" alt=" " class="img-responsive center-block"></a>                </div>
                    <div class="collapse navbar-collapse js-navbar-collapse text-center">
                        <ul id="sub-nav" class="nav navbar-nav navbar-menu">
                            <li>
                                <a href="<?= base_url('Home/') ?>" class="dropdown-toggle">Home </a>

                            </li>
                            <li>
                                <a href="<?= base_url('Home/about_us') ?>" class="dropdown-toggle">About us </a>

                            </li>
                            <li class="dropdown">
                                <a href="javascrip: void (0)" class="dropdown-toggle">Products </a>
                                <ul>

                                        <ul class="dropdown-menu" role="menu">
                                            <?php foreach($categories_menu as $catMenu):  ?>
                                            <li><a href="<?= base_url('Product/product_category').'/' . $catMenu->CategoryId ?>"><?= $catMenu->CategoryTitle ?></a></li>
                                            <?php endforeach; ?>

                                        </ul>

                                </ul>

                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Service </a>

                            </li>



                            <li>
                                <a href="<?= base_url('Home/contact') ?>" class="dropdown-toggle">Contact Us </a>

                            </li>
                        </ul>
                        <div class="navbar-right nav-right-center">
                            <a href="<?= base_url('Home/appoinment') ?>" class="btn btn-type1 btn-sm"> Make an Appointment</a>                  </div>

                    </div><!-- /.nav-collapse -->
                </div>
            </div>
            <!-- //Search Option -->
        </nav>
        <!-- Menu Sections -->
    </header>

    <!-- // Header Section
    =============================-->