<?php




$conn = new mysqli("localhost", "root", "", "my_db");
$query = "SELECT * FROM `comments` ";
$result = mysqli_query($conn, $query);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../newclerk.css?v= <?php echo time(); ?>">

    <title>Clerk's Manager page</title>
</head>

<body>
    <header>

    </header>
    <br>


    <div class="sidebar">
        <div class="logo-details">
            <i id="man" style="font-size: 35px;color:white" class="fas fa-user-cog"></i>
            <span class="logo_name">Manager</span>
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

    <main>


        <div class="main-bar">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                    <tbody>


                        <tr class="active-row">
                            <td><?php echo $rows['ID'] ?></td>
                            <td> <?php echo $rows['Name'] ?></td>
                            <td> <?php echo $rows['Email'] ?></td>
                            <td style="white-space:pre-line; word-wrap:break-word; "> <?php echo $rows['Body'] ?></td>

                        </tr>
                        <!-- and so on... -->
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </main>

</body>
<style>
    main {
        display: flex;
        justify-content: space-evenly;
    }

    .main-bar {
        display: flex;
        justify-content: space-between;
    }

    .sidebar {
        margin-top: -21px;
        height: 100%;
        width: 250px;
        background: #0e1725;
        transition: all 0.5s ease;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
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
</style>

</html>