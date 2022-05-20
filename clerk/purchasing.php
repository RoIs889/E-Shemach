<?php



if (isset($_POST['sell'])) {

    // $_SESSION['post-data'] = $_POST;
    session_start();

    $_SESSION['cust'] = $_POST['cust_name'];


    $conn = new mysqli("localhost", "root", "", "my_db");

    $goods = filter_input(INPUT_POST, 'goods', FILTER_SANITIZE_STRING);
    $goods = $_POST["goods"];


    $price  = $_POST['price'];
    $quantity  = $_POST['quantity'];
    $cust_name = $_POST['cust_name'];

    $query = "INSERT INTO `purchase`( `Good`, `Price`, `Quantity`, `Customer`) VALUES ('$goods','$price','$quantity','$cust_name')";

    $result = mysqli_query($conn, $query);
    if ($result) {
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Purchase and Transaction </title>
    <style>
        .sidebar {
            position: fixed;
            height: 100%;
            width: 280px;
            background: #0e1725;
            transition: all 0.5s ease;
            margin-top: -150px;
        }

        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: -10px;
        }

        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 30px;
            font-weight: bolder;
            margin-left: 25px;
            margin-top: 10px;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 103.5%;

        }

        i {
            margin-left: 15px;
        }

        .btn {
            font-family: "Courier New", monospace;
            display: block;
            margin-top: auto;
            background-color: #3f50ff;
            border: none;
            border-radius: 6px;
            width: 100px;
            padding: 5px;
            color: #ffffff;
            font-weight: bold;
            font-size: 17px;
            line-height: 25px;
            margin-left: 50%;
            margin-top: -35px;


        }

        .btn:hover {
            background-color: #00b300;
            color: white;
        }

        .btn0:hover {
            background-color: #cc0000;
        }

        .main-bar {
            width: 80%;
            background-color: white;
        }

        .good {
            width: 500px;
            box-shadow: 0 0 40px 0 black;
            padding: 20px;
            margin-left: 570px;
            margin-top: 150px;
            background-color: #0e1725;
            border-radius: 20px;

        }

        form label {
            display: block;
            margin-bottom: 10px;

        }

        .h {
            text-align: center;
            padding: 10px;
            color: white;
        }

        form input,
        form select {
            display: block;
            width: 100%;
            line-height: 10px;
            margin-bottom: 10px;
            margin-left: 0;

        }

        option {
            font-weight: bold;
        }

        select {
            font-weight: bold;
            font-size: medium;
            border-radius: 5px;
            border-width: 2px;
            border-color: white;
        }

        label {
            font-weight: bold;
            text-align: left;
            margin-left: 0;
            color: white;
        }

        .btn0 {
            font-family: "Courier New", monospace;
            display: block;
            margin-top: auto;
            background-color: #3f50ff;
            border: none;
            border-radius: 6px;
            width: 100px;
            padding: 5px;
            color: #ffffff;
            font-weight: bold;
            font-size: 17px;
            line-height: 25px;
            margin-left: 25%;
            margin-top: 15px;

        }

        input {
            font-weight: bold;
            font-size: large;
            border-radius: 5px;
            border-style: solid;
            border-color: white;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i style="font-size: 40px; color:whitesmoke;" class="fas fa-cash-register"></i>
            <span class="logo_name">Purchase & Transaction</span>
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
                <a href="index.php">
                    <i style="font-size: 24px;" class="fas fa-sign-out-alt"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-bar">
        <div class="good">
            <h1 class="h">Purchase</h1>
            <form action="purchasing.php" method="post">
                <label for="">Goods</label>
                <select name="goods" id="opt">
                    <option value="Sugar">Sugar</option>
                    <option value="Oil">Oil</option>
                    <option value="flour">flour</option>
                    <option value="Soap">Soap</option>
                    <option value="Ajax">Ajax</option>
                    <option value="Biscuit">Biscuit</option>

                </select>
                <label for="price">Price in Birr</label>
                <input type="number" name="price" autofocus>

                <label for="quantity">Quantity</label>
                <input type="number" name="quantity">

                <label for="cust_name"> Customer name</label>
                <input type="text" name="cust_name" autofocus>
                <button class="btn0" type="reset">Clear</button>
                <button class="btn" type="submit" name="sell" value="Sell">Sell</button>
                <!-- <button type="submit" name="sell" value="Sell"> -->
            </form>
        </div>
    </div>

</body>

</html>