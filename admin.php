<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/e54152159e.js" crossorigin="anonymous"></script>
     <link rel = "stylesheet" href = "style.css">
     <link rel = "stylesheet" href = "test.css">
     
    <!-- <style>
        .pa {
            float: right;
            margin-right: 650px;
            font-weight: bolder;
            font-size: 50px;
            color: #0e1725;
        }

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
    </style> -->
</head>

<body>
    <!-- <div class="sidebar">

        <div class="logo-details">
            <i style="font-size: 40px; color:antiquewhite; margin-left: 10px;" class="fas fa-user-shield"></i>
            <span class="logo_name">Admin</span>
        </div>

        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i style="font-size:24px" class="fa">&#xf015;</i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="admin/register-employee.php">
                    <i style="font-size: 24px;" class="fas fa-user-plus"></i>
                    <span class="links_name">Register employee</span>
                </a>
            </li>
            <li>
                <a href="admin/report.php">
                    <i style="font-size: 24px;" class="fas fa-poll-h"></i>
                    <span class="links_name">View Report</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php">
                    <i style="font-size: 24px;" class="fas fa-sign-out-alt"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div> -->
    <header Id="header">
        <a href="admin.php"><button class="buttons"><i class="fa-solid fa-circle-info"></i> Home</button></a>
        <a href="admin/register-employee.php"><button class="buttons"><i class="fa-solid fa-location-dot"></i> register employee</button></a>
        <a href="admin/report.php"><button class="buttons"><i class="fa-solid fa-envelope"></i> View Report</button></a>
        <a href="index.html"><button class="buttons"><i class="fa-solid fa-arrow-right-to-bracket"></i> Logout</button></a>
        <!-- <a><button class="dark" onclick="bodyImg()"><i class="fa-solid fa-moon"></i></button> -->
    </header>
    <a class="logo" href="index.html"><img src="images/E-Shemach-logo (6).png" width = "100%" height="90px"></a>
    <!-- <div>our products</div> -->

    <p class="pa">welcome Admin !</p>

</body>

</html>