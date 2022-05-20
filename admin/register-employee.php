<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Admin</title>
    <style>
        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: 0;
        }

        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 44px;
            font-weight: bolder;
            margin-left: 20px;
            margin-top: 10px;
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

        .rad {
            height: 15px;
            margin-left: -85px;
        }

        .rad1 {
            height: 15px;
            margin-left: -167px;
        }

        .rad2 {
            height: 15px;
            margin-left: -129px;
        }

        .h,
        .p {
            text-align: center;
            color: #0e1567;
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
            <i style="font-size: 40px; color:antiquewhite; margin-left: 10px;" class="fas fa-user-shield"></i>
            <span class="logo_name">Admin</span>
        </div>

        <ul class="nav-links">
            <li>
                <a href="../admin.php" class="active">
                    <i style="font-size:24px" class="fa">&#xf015;</i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="register-employee.php">
                    <i style="font-size: 24px;" class="fas fa-user-plus"></i>
                    <span class="links_name">Register employee</span>
                </a>
            </li>
            <li>
                <a href="report.php">
                    <i style="font-size: 24px;" class="fas fa-poll-h"></i>
                    <span class="links_name">View Report</span>
                </a>
            </li>
            <li class="log_out">
                <a href="../index.php">
                    <i style="font-size: 24px;" class="fas fa-sign-out-alt"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="container">
            <h1 class="h">Register</h1>
            <p class="p">Please fill in this form to create an account.</p>
            <hr>
            <div class="cont">
                <label for="name">Name</label>
                <input type="text" name="name">

                <label for="f_name">Father Name</label>
                <input type="text" name="f_name">

                <label for="g_name">G.Father Name</label>
                <input type="text" name="g_name">


                <label for="phone">Phone Number</label>
                <input type="number" name="phone">

                <label for="photo">Photo</label>
                <input type="file" name="photo">

                <label for="ID">Kebelle ID</label>
                <input type="file" name="ID">

                <label class="l0">Clerk</label>
                <input class="rad" type="radio" name="role" value="Clerk" />
                <label class="l1">Clerk's Manager</label>
                <input class="rad1" type="radio" name="role" value="Clerks Manager" />
                <label class="l2">Distributor</label>
                <input class="rad2" type="radio" name="role" value="Distributor" />
                <input class="registerbtn" type="submit" name="submit" value="Register">

            </div>
    </form>
    <?php


    if (isset($_POST['submit']) && isset($_FILES['photo'])) {

        $conn = new mysqli("localhost", "root", "", "my_db");
        $target = "uploads/" . basename($_FILES["photo"]["name"]);
        $target1 = "uploads/" . basename($_FILES["ID"]["name"]);

        $name  = $_POST['name'];
        $Fname  = $_POST['f_name'];
        $Gname  = $_POST['g_name'];
        $phone  = $_POST['phone'];
        $photo  = $_FILES['photo']["name"];
        $Kebelle_ID  = $_FILES['ID']["name"];
        $type = $_POST['role'];

        $info = "$name$Fname$phone!#$%^&*()_+?<>";
        $password = substr(str_shuffle($info), 0, 8);

        $query = "INSERT INTO `employee`( `Name`, `Fname`, `Gname`, `Phone`, `Photo`, `Kebelle_ID`, `Password`, `usertype`) VALUES ('$name','$Fname','$Gname','$phone
    ','$photo','$Kebelle_ID','$password','$type')";

        move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
        move_uploaded_file($_FILES["ID"]["tmp_name"], $target1);

        $result = mysqli_query($conn, $query);



        if ($result) {

            echo "<script>alert ('registered')</script>";

            header("Location: register-employee.php");
        }
    }
    ?>

</body>

</html>