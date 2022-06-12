<?php


session_start();
$conn = new mysqli("localhost", "root", "", "my_db");




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
    <link rel="stylesheet" href="../newclerk.css?v= <?php echo time(); ?>">
    <title>Customer page</title>
</head>

<body>


    <div class="sidebar">
        <div class="logo-details">
            <i style="font-size: 40px; color:whitesmoke;" class="fas fa-cash-register"></i>
            <span class="logo_name">Search</span>
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
    </div>



    <div class="area">


        <div class="search">
            <form action="" method="post">
                <input type="number" placeholder="Enter The Customer ID" name="ID" autofocus>
                <button type="submit" name="submit">Search</button>
            </form>
        </div>

        <div class="pr">
            <?php
            if (isset($_POST['submit'])) {

                $id = $_POST["ID"];

                $query = "SELECT * FROM `Customer` WHERE `ID` = '$id' ";
                $result = mysqli_query($conn, $query);


                while ($rows = mysqli_fetch_assoc($result)) { ?>

                    <div class="profile">Name:&nbsp;&nbsp;&nbsp; <?php echo $rows['Name'] ?></div>
                    <div class="profile">Fname:&nbsp;&nbsp;&nbsp;<?php echo $rows['Fname'] ?></div>
                    <div class="profile">Gname:&nbsp;&nbsp;&nbsp; <?php echo $rows['Gname'] ?></div>
                    <div class="profile">Age:&nbsp;&nbsp;&nbsp;<?php echo $rows['Age'] ?></div>
                    <div class="profile">House_No:&nbsp;&nbsp;&nbsp;<?php echo $rows['House_No'] ?></div>
                    <div class="profile">Phone:&nbsp;&nbsp;&nbsp; <?php echo $rows['Phone'] ?></div>
                    <?php
                    $kebelle_id = $rows['Kebelle_Id'];
                    $image = $rows['image_url'];

                    ?>
                    <div class="profile2">Photo:
                        <?php echo "<img width = 100px height = 100px object-fit = cover src='../clerks_manager/uploads/" . $image . "'>"; ?>
                    </div>
                    <div class="profile3">Kebelle_Id:
                        <?php echo "<img width = 100px height = 100px object-fit = cover src='../clerks_manager/uploads/" . $kebelle_id . "'>"; ?>
                    </div>

            <?php }
            } ?>
        </div>
    </div>


    <style>
        .profile {
            width: 70%;
            align-items: center;
            margin-top: 9px;
            margin-left: 70px;
            font-weight: bold;

        }

        .profile2 {
            height: 200px;
            margin-top: 60px;
            margin-bottom: 35px;
            margin-left: 70px;
            font-weight: bold;

        }

        .profile3 {
            height: 150px;
            margin-left: 350px;
            margin-top: -240px;
            margin-bottom: 35px;
            font-weight: bold;

        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            background: #0e1725;
            transition: all 0.5s ease;
            margin-top: -60px;
        }

        .area {
            width: 700px;
            margin-left: 70px;
            margin-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: end;
            justify-content: center;

        }

        .search {
            margin-bottom: 20px;

        }

        .search input {
            width: 300px;
            height: 30px;
        }

        .good {
            width: 300px;
            box-shadow: 0 0 4px 0 black;
            padding: 20px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input,
        form select {
            display: block;
            width: 100%;
            line-height: 20px;
            margin-bottom: 10px;

        }
    </style>
</body>

</html>