<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="newclerk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" type="image/x-icon" href="logo_ccms.png">
    <title>Clerk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/e54152159e.js" crossorigin="anonymous"></script>
     <link rel = "stylesheet" href = "style0.css">
    <style>
        .sidebar {
            position: fixed;
            height: 100%;
            width: 270px;
            background: #0e1725;
            transition: all 0.5s ease;
        }

        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: -10px;
        }

        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 44px;
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
            <i style="font-size: 40px; color:whitesmoke;" class="fas fa-cash-register"></i>
            <span class="logo_name">Clerk</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="clerk.php" class="active">
                    <i style="font-size: 24px;" class="fas fa-home"></i>
                    <span class="links_name">Home</span>

                </a>
            </li>
            <li>
                <a href="clerk/purchasing.php">
                    <i style="font-size: 24px;" class="fas fa-store"></i>
                    <span class="links_name">Purchase and Transaction</span>
                </a>
            </li>
            <li>
                <a href="clerk/clerk-profile.php">
                    <i style="font-size: 24px;" class="far fa-address-card"></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="clerk/view-cust-profile.php">
                    <i style="font-size: 24px;" class="far fa-address-card"></i>
                    <span class="links_name">Search profile</span>
                </a>
            </li>
            <li>
                <a href="clerk/viewhisofcust.php">
                    <i style="font-size: 24px;" class="far fa-address-card"></i>
                    <span class="links_name">Search history</span>
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

    <p class="pa">welcome Clerk !</p>
</body>

</html>