<?php include '../assets/PHP/login.php'; ?>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="../assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/Fonts/css/all.css">
</head>

<body class="grey lighten-2">
    <!-- <div class="section"></div> -->
    <main>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <center>
            <a href="index.php"><img class="responsive-img" style="width: 300px;" src="../assets/images/E-Shemach-logo-black (1).png" /></a>
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
                        <h5 class="card-title center-align">Customer Login</h5>
                        <form action="login.php" method="post" class="login-form" id="form" autocomplete="off">
                            <div class="red-text center-align"><?php echo $errors['invalid']; ?></div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <!-- <i class="material-icons prefix">email</i> -->
                                    <i class="mdi-social-person-outline prefix"></i>
                                    <input name="username" type="text" id="username" value="<?php echo htmlspecialchars($title) ?>" />
                                    <label for="username">User name</label>
                                    <div class="red-text right-align"><?php echo $errors['name']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input name="password" type="password" id="password" />
                                    <label for="password">Password</label>
                                    <div class="red-text right-align"><?php echo $errors['pass']; ?></div>

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
                <p class="margin center medium-small sign-up">Not a customer yet? <a href="signup.php">Sign up</a>
                </p>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
</body>

</html>