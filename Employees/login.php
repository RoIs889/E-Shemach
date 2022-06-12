<?php include '../assets/PHP/elogin.php';?>
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
    <link rel="stylesheet" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
        integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/Fonts/css/all.css">
</head>

<body class="grey lighten-2">
    <!-- <div class="section"></div> -->

    <main>
        <center>
            <a href="index.html"><img class="responsive-img" style="width: 300px;"
                    src="../assets/images/E-Shemach-logo-black (1).png" /></a>
        </center>
        
        <!-- <div class="background-image"></div> -->
        <div class="title">
            <!-- <h3 class="center-align grey-text">Welcome!</h3> -->
        </div>
        <div class="row">
            <div class="container col s10 m6 l4 offset-s1 offset-m3 offset-l4 ">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <div class="card-content">
                        <h5 class="card-title center-align">Employee Login</h5>
                        <form action="login.php" method="post" class="login-form" id="form" autocomplete="off">
                            <div class="red-text center-align"><?php echo $errors['invalid']; ?></div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <!-- <i class="material-icons prefix">email</i> -->
                                    <i class="mdi-social-person-outline prefix"></i>
                                    <input name="username" type="text" id="username"
                                        value="<?php echo htmlspecialchars($title) ?>" />
                                    <label for="username">User name</label>
                                    <div class="red-text right-align"><?php echo $errors['name']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input name="password" type="password" id="password" />
                                    <label for="password">Password</label>
                                    <div class="red-text  right-align"><?php echo $errors['pass']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-symbols-outlined prefix">badge</i>
                                    <select class="" name="usertype" id="">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Clerk">Clerk</option>
                                        <option value="Manager">Manager</option>
                                        <!-- <option value="Distributor">Distributor</option> -->
                                        <!-- <option value="Admin">Admin</option> -->
                                    </select>
                                    <label for="usertype">Role</label>
                                    <div class="red-text right-align"><?php echo $errors['role']; ?></div>
                                </div>
                            </div>
                            <div class="row center-align">
                                <button class="btn blue darken-2 waves-effect waves" type="submit" name="login">Login
                                    <i class="material-symbols-outlined"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <p class="margin center medium-small sign-up">Not a customer yet? <a href="signup.php">Sign up</a>
                    </p> -->
            </div>
        </div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
        integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('select').formSelect();
        $('.carousel').carousel();
    })
    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
    </script>
</body>

</html>