<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Clerk's Manager</title>
    <style>
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

        #man {
            margin-left: 15px;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .pa {
            float: right;
            margin-right: 600px;
            font-weight: bolder;
            font-size: 50px;
            color: #0e1725;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i id="man" style="font-size: 45px;color:white" class="fas fa-user-cog"></i>
            <span class="logo_name">Clerk's Manager</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="clerk's_manager.php" class="active">
                    <i style="font-size: 24px;" class="fas fa-home"></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="clerks_manager/manager-profile.php">
                    <i style="font-size: 24px;" class="far fa-address-card"></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="clerks_manager/register.php">
                    <i style="font-size: 24px;" class="fas fa-user-plus"></i>
                    <span class="links_name">Register</span>
                </a>
            </li>
            <li>
                <a href="clerks_manager/viewcomment.php">
                    <i style="font-size: 24px;" class="far fa-comment-dots"></i>
                    <span class="links_name">ViewComment</span>
                </a>
            </li>
            <li>
                <a href="clerks_manager/report.php">
                    <i style="font-size: 24px;" class="fas fa-file-alt"></i>
                    <span class="links_name">Report</span>
                </a>
            </li>
            <li>
                <a href="clerks_manager/request.php">
                    <i style="font-size: 24px;" class="far fa-envelope"></i>
                    <span class="links_name">Request</span>
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
    <p class="pa">welcome Manager !</p>

</body>

</html>