<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="newclerk.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo_ccms.png">
    <title>Distributor</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 40px;
            font-weight: bolder;
            margin-left: 16px;
            margin-top: 10px;
        }

        #dis {
            margin-left: 5px;
            margin-top: 15px;
        }

        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: 1px;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 100%;
            margin-left: -1px;
        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 290px;
            background: #0e1725;
            transition: all 0.5s ease;
        }


        .pa {
            float: right;
            margin-right: 500px;
            font-weight: bolder;
            font-size: 50px;
            color: #0e1725;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i id="dis" style="font-size: 30px;color:white;" class="fas fa-dolly-flatbed"></i>
            <span class="logo_name">Distributor</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="distributor.php" class="active">
                    <i style="font-size:24px" class="fa">&#xf015;</i>
                    <span class="links_name">Home</span>

                </a>
            </li>

            <li>
                <a href="distributor/view-request.php">
                    <i style='font-size:24px' class="material-icons">&#xe0c9;</i>
                    <span class="links_name">AcceptRequest</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php">
                    <i style='font-size:24px' class="material-icons">&#xe879;</i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <p class="pa">welcome Distributor !</p>
</body>

</html>