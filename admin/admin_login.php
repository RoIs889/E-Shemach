<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$msg = "";
session_start();


if (isset($_POST['login'])) {

    // $_SESSION['post-data'] = $_POST;

    $name = $_POST["username"];
    $pass = $_POST["password"];


    $query = "SELECT * FROM `employee` WHERE `Name` = '$name' AND `Password` = '$pass' AND `usertype` = 'admin' ";
    $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 0) {
            $msg = "<script>window.location='admin_login.php'</script>";
            // $msg = "<script>window.alert('sometext');</script>";
            
            // header=("admin_login.php?msg=invalid");
                
            
        } 
        else if (mysqli_num_rows($result) != 0) {
            header("Location: ../admin.php");
        }
        else
            $msg = "<script>window.alert('sometext');</script>";
    
}
// if (isset($_GET["msg"]) && $_GET["msg"] == 'invalid') {
//     $msg = "Incorrect username or password!";
// }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../style.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="../test.css">
    <script src="https://kit.fontawesome.com/efb72ed663.js" crossorigin="anonymous"></script>
    <!-- <script src="../js/dark-mode.js"></script> -->
    <script src="error.js"></script>
    <script src="/js/active.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="icon" type="image/x-icon" href="logo_ccms.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
<header Id="header">
        <a href="#about"><button class="buttons"><i class="fa-solid fa-circle-info"></i> Our Products</button></a>
        <a href="../employee_login.php"><button class="buttons"><i class="fa-solid fa-user-tie"></i> Employees's Site</button></a>
        <a href="#about"><button class="buttons"><i class="fa-solid fa-user-gear"></i> Admin site</button></a>
        <a href="../index1.php"><button class="buttons"><i class="fa-solid fa-arrow-right-to-bracket"></i> Customer Login</button></a>
        <!-- <a><button class="dark" onclick="bodyImg()"><i class="fa-solid fa-moon"></i></button> -->
    </header>
    <a class="logo" href="index.html"><img src="../images/E-Shemach-logo (6).png"  width = "100%" height="90px"></a>
    <div class="form">
        <form action="admin_login.php" method="post">
            <h1>Admin Login</h1>
            <i id="large" class="fa-solid fa-user-gear"></i>

            <!-- <?php if ($msg != '') : ?>
                <div class="alert"><?php echo $msg;  
                
                ?></div>
            <?php endif; ?> -->

            <label for="username">Username</label>
            <span id="error"></span>
            <input type="text" name="username" id="" value="" autofocus placeholder="input name" required/>

            <label for="password">Password</label>
            <input type="password" name="password" id="" value="" autofocus placeholder="input password" required/>

            <!-- <label for="usertype">User Type</label>
            <select name="usertype" id="">
                <option value="Customer">Customer</option>
                <option value="Clerk">Clerk</option>
                <option value="Clerks Manager">Clerk's Manager</option>
                <option value="Distributor">Distributor</option>
                <option value="Admin">Admin</option>
            </select> -->

            <button class="button" id="login1" type="submit" name="login"> <i class="fas fa-sign-in-alt"></i>Login</button>
            <!-- <button class="button" name="sign up"> <i id="log" class="fas fa-sign-up-alt"></i>Sign Up</button> -->


        </form>
    </div>

</body>

</html>