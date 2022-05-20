<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../customer.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="register.css?v= <?php echo time(); ?>">
    <title>Register</title>
</head>

<body>
    <header>

    </header>
    <br>
    <main>
        <div class="side-bar">
            <div class="link"><a href="../clerk's_manager.php">Home</a></div>
            <div class="link"><a href="register.php">Register</a></div>
            <div class="link"><a href="">Report</a></div>
            <div class="link"><a href="">Request</a></div>
            <div class="link"><a href="">Profile</a></div>

        </div>

        <div class="main-bar">

            <form action="register-form.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <label for="name">Name</label>
                <input type="text" name="name">

                <label for="f_name">Father Name</label>
                <input type="text" name="f_name">

                <label for="g_name">G.Father Name</label>
                <input type="text" name="g_name">

                <label for="age">Age</label>
                <input type="number" name="age">

                <label for="h_no">House Number</label>
                <input type="number" name="h_no">

                <label for="phone">Phone Number</label>
                <input type="number" name="phone">

                <label for="photo">Photo</label>
                <input type="file" name="photo">

                <label for="ID">Kebelle ID</label>
                <input type="file" name="ID">

                <input type="radio" name="role" value="Customer" /> Customer

                <input type="submit" name="submit" value="Register">

            </form>
        </div>
    </main>
</body>

</html>
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Register</title>
    <style>
        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 27px;
            font-weight: bolder;
            margin-left: 15px;
            margin-top: 10px;
        }

        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: 0;
        }

        #man {
            margin-left: 15px;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .container {
            padding: 1px;
            background-color: white;
        }


        input {
            width: 50%;
            height: 30px;
            padding: 5px;
            margin: 5px 0 5px 280px;
            display: inline-block;
            border: none;
            background: #f1f1f1;

        }

        label {
            float: left;
            margin-left: 285px;
            font-weight: bold;
        }


        .h {
            text-align: left;
            color: #0e1567;
            margin-left: 370px;
        }



        input:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }


        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 4px 15px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 1;
            margin-bottom: 30px;
        }

        .registerbtn:hover {
            background-color: #4585ff;
            color: white;
        }

        .rad {
            height: 25px;
            margin-left: -185px;
        }


        .cont {
            width: 80%;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i id="man" style="font-size: 45px;color:white" class="fas fa-user-cog"></i>
            <span class="logo_name">Clerk's Manager</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../clerk's_manager.php" class="active">
                    <i style="font-size: 24px;" class="fas fa-home"></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="manager-profile.php">
                    <i style="font-size: 24px;" class="far fa-address-card"></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="register.php">
                    <i style="font-size: 24px;" class="fas fa-user-plus"></i>
                    <span class="links_name">Register</span>
                </a>
            </li>
            <li>
                <a href="viewcomment.php">
                    <i style="font-size: 24px;" class="far fa-comment-dots"></i>
                    <span class="links_name">ViewComment</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i style="font-size: 24px;" class="fas fa-file-alt"></i>
                    <span class="links_name">Report</span>
                </a>
            </li>
            <li>
                <a href="request.php">
                    <i style="font-size: 24px;" class="far fa-envelope"></i>
                    <span class="links_name">Request</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php">
                    <i style="font-size: 24px;" class="fas fa-sign-out-alt"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-bar">

        <form action="register-form.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <h1 class="h">Customer Registration</h1>
            <div class="cont">
                <label for="name">Name</label>
                <input type="text" name="name">

                <label for="f_name">Father Name</label>
                <input type="text" name="f_name">

                <label for="g_name">G.Father Name</label>
                <input type="text" name="g_name">

                <label for="age">Age</label>
                <input type="number" name="age">

                <label for="h_no">House Number</label>
                <input type="number" name="h_no">

                <label for="phone">Phone Number</label>
                <input type="number" name="phone">

                <label for="photo">Photo</label>
                <input type="file" name="photo">

                <label for="ID">Kebelle ID</label>
                <input type="file" name="ID">
                <label for="">Customer</label>
                <input class="rad" type="radio" name="role" value="Customer" />
                <input class="registerbtn" type="submit" name="submit" value="Register">

            </div>
        </form>
    </div>

</body>

</html>