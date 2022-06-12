<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->
    <!-- <link href="../assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/Fonts/css/all.css">
    <link rel="stylesheet" href="../assets/css/comm.css">
</head>

<body>
    <header>
        <nav class="transparentBG">
            <div class="nav-wrapper">
                <!-- <a href="#" class="brand-logo"><img src="../assets/images/E-Shemach-logo (6).png"></img></a> -->
                <a href="index.html" class="brand-logo"><img class="responsive-img" style="width: 200px;" src="../assets/images/E-Shemach-logo-white (2).png" /></a>
                <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down left">
                    <li><a href="#products"><span class="fa-solid fa-circle-info"></span> Products</a></li>
                    <!-- <li><a href="#"><span class="fa-solid fa-location-dot"></span> Locations</a></li> -->
                    <li><a href="#about"><span class="fa-solid fa-envelope"></span> About</a></li>
                    <li><a href="#contact"><span class="fa-solid fa-envelope"></span> Contact us</a></li>
                    <li><a href="login.php"><span class="fa-solid fa-arrow-right-to-bracket"></span> Login/Sign up</a></li>

                </ul>
            </div>
        </nav>

        <ul class="sidenav grey lighten-2 white-text" id="mobile-nav">
            <!-- <li><a href="#">Home</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
            <li><a href="#products"><span class="fa-solid fa-circle-info"></span> Products</a></li>
            <!-- <li><a href="#"><span class="fa-solid fa-location-dot"></span> Locations</a></li> -->
            <li><a href="#about"><span class="fa-solid fa-envelope"></span> About</a></li>
            <li><a href="#contact"><span class="fa-solid fa-envelope"></span> Contact us</a></li>
            <li><a href="login.php"><span class="fa-solid fa-arrow-right-to-bracket"></span> Login/Sign up</a></li>

        </ul>
    </header>
    <div class="">
        <div class="carousel carousel-slider">
            <a class="carousel-item"><img src="../assets/images/E-Shemach (1).png"></a>
            <a class="carousel-item"><img src="../assets/images/E-Shemach (1).png"></a>
            <a class="carousel-item"><img src="../assets/images/E-Shemach (1).png"></a>
            <a class="carousel-item"><img src="../assets/images/E-Shemach (1).png"></a>
            <a class="carousel-item"><img src="../assets/images/E-Shemach (1).png"></a>
        </div>
    </div>
    <div></div>
    <div class="parallax-container">
    <div class="section">
      <div class="container">
        <br><br>
        <h1 class="header center grey-text text-lighten-2">Welcome to E-shemach</h1><hr>
        <div class="row center">
          <h5 class="header col s12 white-text light">A shop to find all your favoured brands in one place.</h5>
        </div>
        <div class="row center">
          <a href="signup.php" id="sbutton" class="btn-large waves-effect waves-light teal lighten-1">Sign Up</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="../assets/images/parallax2.jpg" alt="Unsplashed background img 1"></div>
  </div>
    <section class="section scrollspy" id="products">
        <div class="row">
            <div class="col s12">
                <ul class="tabs grey lighten-2 tabs-fixed-width">
                    <li class="tab col s3"><a class="" href="#test1">Oil</a></li>
                    <li class="tab col s3"><a class="indigo-text" href="#test2">Sugar</a></li>
                    <li class="tab col s3"><a class="indigo-text" href="#test3">Sanitary</a></li>
                    <li class="tab col s3"><a class="indigo-text" href="#test4">Others</a></li>
                </ul>
            </div>
            <div class="row" id="test1">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/C4.png" alt="1L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title blue-text">1L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a class="cyan-text" href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/C3.png" alt="3L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title">3L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/C2.png" alt="5L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title">5L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/C1.png" alt="Ommar 5L">
                            </div>
                            <div class="card-content">
                                <span class="card-title">5L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/C6.png" alt="Avena 3L">
                            </div>
                            <div class="card-content">
                                <span class="card-title">5L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/C5.png" alt="Avena 5L">
                            </div>
                            <div class="card-content">
                                <span class="card-title">5L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row red" id="test2">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="3L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title blue-text">Brown Sugar</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a class="cyan-text" href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="5L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title">White Sugar 5kg</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="Sugar">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Sugar 10Kg</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row grey" id="test3">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="3L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title blue-text">3L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a class="cyan-text" href="#"> details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="5L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title">5L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="Sugar">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Sugar</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="test4">
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="3L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title blue-text">3L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a class="cyan-text" href="#"> details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="5L oil">
                            </div>
                            <div class="card-content">
                                <span class="card-title">5L Oil</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card hoverable grey lighten-2">
                            <div class="card-image">
                                <img src="../assets/images/E-Shemach-logo-black (1).png" alt="Sugar">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Sugar</span>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                            <div class="card-action">
                                <a href="#">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="parallax1">
            <div class="parallax-container"><img src="../assets/images/shopping-cart-supermarket-blurred-photo-store-bokeh-background_36051-129.webp"></div>
        </div> -->
    </section>
    <div class="parallax-container">
    <div class="section">
      <div class="container">
        <br><br>
        <h1 class="header center grey-text text-lighten-2">Welcome to E-shemach</h1><hr>
        <div class="row center">
          <h5 class="header col s12 white-text light">A shop to find all your favoured brands in one place.</h5>
        </div>
        <div class="row center">
          <a href="signup.php" id="sbutton" class="btn-large waves-effect waves-light teal lighten-1">Sign Up</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="../assets/images/parallax.jpg" alt="Unsplashed background img 1"></div>
  </div>
    <section class="section container scrollspy" id="about">
        <div class="">
            <div class="row">
                <div class="col l5 s12">
                    <h3>About Us</h3>
                    <hr>
                    <h4>E-Shemach</h4>
                    <hr>
                    <h6>Simplify Shopping</h6>
                    <p>E-Shemach is an Ethiopian e-commerce site designed to let you access and shop for your favoured brands in one place.</p>
                </div>
                <div class="col l4 offset-l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Linked In</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section container scrollspy" id="contact">
        <div class="row">
            <div class="col s12 l5">
                <h3 class="indigo-text text-darken-4">Get in Touch</h3>
                <hr>
                <h6>You can contact us by the means below</h6>
                <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
                <h6>Visit our shop locations</h6>
                <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
            </div>
            <div class="col s12 l5 offset-l2">
                <form>
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" id="name">
                        <label for="email">Your Name</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">message</i>
                        <textarea id="message" class="materialize-textarea" cols="20" rows="20"></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    <div class="input-field center">
                        <button class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="page-footer grey darken-3">
        <div class="footer-copyright grey darken-4">
            <div class="container left">&copy; 2022 E-Shemach Team.</div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.js"></script>
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
                setTimeout(autoplay, 5000);
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