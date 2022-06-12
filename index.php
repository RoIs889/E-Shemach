<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="../assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/Fonts/css/all.css">
    <link rel="stylesheet" href="assets/css/comm.css">
</head>

<body class="grey darken-2">

    <header>
        <nav class="indigo">
            <div class="nav-wrapper">
                <!-- <a href="#" class="brand-logo"><img src="../assets/images/E-Shemach-logo (6).png"></img></a> -->
                <a href="index.php" class="brand-logo"><img class="responsive-img" style="width: 200px;" src="assets/images/E-Shemach-logo-white (2).png" /></a>
                <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down left">
                    <li><a href="Employees/login.php"><span class="fa-solid fa-user-tie"></span> Go to E-shemach for Employees</a></li>
                    <!-- <li><a href="#"><span class="fa-solid fa-location-dot"></span> Locations</a></li> -->
                    <li><a href="Customers/index.php"><span class="fa-solid fa-users"></span> Go to main site</a></li>
                    <!-- <li><a href="#contact"><span class="fa-solid fa-envelope"></span> Contact us</a></li>
                    <li><a href="login.php"><span class="fa-solid fa-arrow-right-to-bracket"></span> Login/Sign up</a></li> -->

                </ul>
            </div>
        </nav>

        <ul class="sidenav grey lighten-2 white-text" id="mobile-nav">
            <!-- <li><a href="#">Home</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
            <li><a href="Employees/index.php"><span class="fa-solid fa-user-tie"></span> Go to E-shemach for Employees</a></li>
            <!-- <li><a href="#"><span class="fa-solid fa-location-dot"></span> Locations</a></li> -->
            <li><a href="Customers/index.php"><span class="fa-solid fa-users"></span> Go to main site</a></li>
            <!-- <li><a href="#about"><span class="fa-solid fa-envelope"></span> About</a></li>
            <li><a href="#contact"><span class="fa-solid fa-envelope"></span> Contact us</a></li>
            <li><a href="login.php"><span class="fa-solid fa-arrow-right-to-bracket"></span> Login/Sign up</a></li> -->

        </ul>
    </header>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <!-- <script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script> -->


    <script>
        $(document).ready(function() {

            $('.sidenav').sidenav();
            $('.parallax').parallax();
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
            autoplay();

            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            $('.tabs').tabs();
            $('.materialboxed').materialbox();
            $('.datepicker').datepicker({
                disableWeekends: true,
                yearRange: 1
            });
            $('.tooltipped').tooltip();
            $('.scrollspy').scrollSpy({
                throttle: 10
            });

        });
    </script>

</body>

</html>