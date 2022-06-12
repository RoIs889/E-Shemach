<?php
$id = "";
$conn = new mysqli("localhost", "root", "", "my_db");

if (isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "my_db");
    $id = $_POST["name"];
}
/*
$x = $_SESSION['name'];

$query1 = "SELECT * FROM `purchase` WHERE `Customer` = '$x' ";
$result1 = mysqli_query($conn, $query1);

*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../newclerk.css <?php echo time(); ?>">
    <title>Search cust history</title>
</head>

<body>


    <div class="area">


        <div class="search">
            <form action="" method="post">
                <input type="text" placeholder="Enter The Customer Name" name="name" autofocus>
                <button type="submit" name="submit">Search</button>
            </form>
        </div>


        <?php

        $query = "SELECT * FROM `Customer` WHERE `name` = '$id' ";
        $result = mysqli_query($conn, $query);
        $query2 = "SELECT * FROM `purchase` WHERE `Customer` = '$id' ";
        $result2 = mysqli_query($conn, $query2);

        ?>


        <body>
            <div class="sidebar">
                <div class="logo-details">
                    <i id="man" style="font-size: 45px;color:white" class="fas fa-user-cog"></i>
                    <span class="logo_name">Search Cust History</span>
                </div>
                <ul class="nav-links">
                    <li>
                        <a href="../clerk.php" class="active">
                            <i style="font-size: 24px;" class="fas fa-home"></i>
                            <span class="links_name">Home</span>

                        </a>
                    </li>
                    <li>
                        <a href="purchasing.php">
                            <i style="font-size: 24px;" class="fas fa-store"></i>
                            <span class="links_name">Purchase and Transaction</span>
                        </a>
                    </li>
                    <li>
                        <a href="clerk-profile.php">
                            <i style="font-size: 24px;" class="far fa-address-card"></i>
                            <span class="links_name">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="viewhisofcust.php">
                            <i style="font-size: 24px;" class="far fa-address-card"></i>
                            <span class="links_name">Search history</span>
                        </a>
                    </li>
                    <li>
                        <a href="view-cust-profile.php">
                            <i style="font-size: 24px;" class="far fa-address-card"></i>
                            <span class="links_name">Search profile</span>
                        </a>
                    </li>
                    <li class="log_out">
                        <a href="../index.php">
                            <i style="font-size: 24px;" class="fas fa-sign-out-alt"></i>
                            <span class="links_name">Log out</span>
                        </a>
                    </li>
                </ul>
                <main>

                    <div class="main-bar">
                        <div class="table">
                            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>Good</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <?php while ($rows = mysqli_fetch_assoc($result2)) { ?>
                                    <tbody>


                                        <tr class="active-row">
                                            <td> <?php echo $rows['Good'] ?></td>
                                            <td> <?php echo $rows['Price'] ?></td>
                                            <td style="white-space:pre-line; word-wrap:break-word; "> <?php echo $rows['Quantity'] ?></td>

                                        </tr>
                                        <!-- and so on... -->
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </main>
        </body>
        <style>
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
                font-size: 44px;
                font-weight: bolder;
                margin-left: 60px;
                margin-top: 10px;
            }

            .sidebar .nav-links {
                margin-top: 10px;
                margin-left: -60px;
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
                margin-left: -60px;
            }

            .sidebar .nav-links li a:hover {
                background: #4585ff;
                width: 129%;
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
                width: 84%;
            }

            .sidebar {
                position: fixed;
                height: 100%;
                width: 250px;
                background: #0e1725;
                transition: all 0.5s ease;
                margin-top: -106px;
                margin-left: -8px;
            }

            area {
                width: 670px;
                margin-left: 60px;
                margin-top: 180px;
                display: flex;
                flex-direction: column;
                align-items: end;
                justify-content: center;
            }

            .search {
                margin-bottom: 20px;
                margin-left: 330px;
                margin-top: 50px;
            }

            .search input {
                width: 300px;
                height: 30px;
            }

            .main-bar {
                display: flex;
                width: 60%;
            }

            main {
                display: flex;
            }

            .table {
                width: 60%;
            }

            .styled-table {
                border-collapse: collapse;
                margin: -125px 300px;
                font-size: 0.9em;
                font-family: sans-serif;
                min-width: 400px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .styled-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
            }

            .styled-table th,
            .styled-table td {
                padding: 12px;
            }

            td {
                white-space: pre
            }

            .styled-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .styled-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .styled-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

            .styled-table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
            }

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
        </style>

</html>