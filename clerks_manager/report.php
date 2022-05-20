<?php


$conn = new mysqli("localhost", "root", "", "my_db");
$query = "SELECT * FROM `purchase` ";
$result = mysqli_query($conn, $query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../newclerk.css <?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="" href="../newclerk.css">
    <title>Analysis</title>
</head>

<body>
    <header>

    </header>
    <br>
    <main>

        <div class="main-bar">
            <div class="table">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Good</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                        <tbody>


                            <tr class="active-row">
                                <td><?php echo $rows['ID'] ?></td>
                                <td> <?php echo $rows['Good'] ?></td>
                                <td> <?php echo $rows['Price'] ?></td>
                                <td style="white-space:pre-line; word-wrap:break-word; "> <?php echo $rows['Quantity'] ?></td>

                            </tr>
                            <!-- and so on... -->
                        </tbody>
                    <?php } ?>
                </table>
            </div>

            <div class="report">

                <?php
                $query = "SELECT `Quantity` FROM `purchase` WHERE `Good` = 'Sugar' ";
                $result = mysqli_query($conn, $query);
                $total = 0;
                while ($column =  mysqli_fetch_assoc($result)) {
                    $total = $total + $column['Quantity'];
                } ?>
                <h1 style="color :  #009879;"> Total Sold Sugar: <?php echo $total; ?> kg</h1>
                <?php
                $query = "SELECT `Quantity` FROM `purchase` WHERE `Good` = 'Oil' ";
                $result = mysqli_query($conn, $query);
                $total = 0;
                while ($column =  mysqli_fetch_assoc($result)) {
                    $total = $total + $column['Quantity'];
                } ?>
                <h1 style="color :  #009879;"> Total Sold Oil: <?php echo $total; ?> litres</h1>
            </div>


        </div>
    </main>

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
                <a href="report.php">
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
                <a href="../index.php">
                    <i style="font-size: 24px;" class="fas fa-sign-out-alt"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

</body>
<style>
    .main-bar {
        display: flex;
    }

    .table {
        width: 60%;
    }

    .report {
        width: 40%;
        text-align: center;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 25px 300px;
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

    .sidebar .nav-links .log_out {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .sidebar {
        position: fixed;
        height: 100%;
        width: 250px;
        background: #0e1725;
        transition: all 0.5s ease;
        margin-top: -1062px;
    }
</style>

</html>