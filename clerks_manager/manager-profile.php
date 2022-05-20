<?php



session_start();
$conn = new mysqli("localhost", "root", "", "my_db");
$v = $_SESSION['name'];


$query = "SELECT * FROM `employee` WHERE `Name` = '$v' ";
$result = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../newclerk.css <?php echo time(); ?>">
    <title>Clerk profile</title>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i style="font-size: 40px;color:white;" class="fas fa-user-cog"></i>
            <span class="logo_name">Clerk's Manager Profile</span>
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
                <a href="report.php">
                    <i style="font-size: 24px;" class="fas fa-poll-h"></i>
                    <span class="links_name">Report</span>
                </a>
            </li>
            <li>
                <a href="request.php">
                    <i style="font-size: 24px;" class="far fa-file"></i>
                    <span class="links_name">Request</span>
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
    <main>
        <div class="main-bar">
            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                <?php
                $kebelle_id = $rows['Kebelle_ID'];
                $image = $rows['Photo'];

                ?>
                <div class="bar">
                    <h1 class="h">Profile</h1>
                    <div class="profile2">Photo
                        <?php echo "<img width = 150px height = 160px object-fit = cover src='../admin/uploads/" . $image . "'>"; ?>
                    </div>
                    <div class="profile3">Kebelle_Id
                        <?php echo "<img width = 280px height = 160px object-fit = cover src='../admin/uploads/" . $kebelle_id . "'>"; ?>
                    </div>

                    <div class="profile">Name:&nbsp; &nbsp; &nbsp; <?php echo $rows['Name'] ?></div>
                    <div class="profile">Fname:&nbsp; &nbsp; <?php echo $rows['Fname'] ?></div>
                    <div class="profile">Gname:&nbsp; &nbsp; <?php echo $rows['Gname'] ?></div>
                    <div class="profile">Phone:&nbsp; &nbsp;&nbsp; <?php echo $rows['Phone'] ?></div>
                </div>

            <?php } ?>

        </div>
    </main>
    <style>
        .main-bar {
            width: 70%;
            margin-top: 120px;
            margin-left: 320px;
            background-color: white;
        }

        .h {
            text-align: center;
            color: #fff;
        }

        .bar {
            box-shadow: 0 0 40px 0 black;
            height: 450px;
            width: 800px;
            background-color: #0e1725;
            margin-left: 80px;

        }


        .profile {
            width: 70%;
            align-items: center;
            margin-top: 9px;
            margin-left: 70px;
            font-weight: bold;
            color: white;
        }

        .profile2 {
            height: 200px;
            margin-top: 60px;
            margin-bottom: 35px;
            margin-left: 70px;
            font-weight: bold;
            color: white;
        }

        .profile3 {
            height: 150px;
            margin-left: 350px;
            margin-top: -240px;
            margin-bottom: 35px;
            font-weight: bold;
            color: white;
        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 270px;
            background: #0e1725;
            transition: all 0.5s ease;
            margin-top: -120px;

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;

        }


        .sidebar.active {
            width: 60px;
        }

        .sidebar .logo-details {
            height: 70px;
            display: flex;
            align-items: center;
        }

        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 20px;
            font-weight: bold;
            margin-left: 10px;
            margin-top: 10px;
        }

        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: -40px;
        }

        .sidebar .nav-links li {
            position: relative;
            list-style: none;
            height: 40px;
        }

        .sidebar .nav-links li a {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li a:hover {
            background: #4585ff;
        }

        .sidebar .nav-links li i {
            min-width: 60px;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }

        .sidebar .nav-links li a .links_name {
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            white-space: nowrap;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 115%;
        }


        i {
            margin-left: 35px;
        }
    </style>
</body>

</html>