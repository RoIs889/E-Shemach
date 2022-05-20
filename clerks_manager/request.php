<?php
//insert.php
if (isset($_POST["post"])) {
    $conn = new mysqli("localhost", "root", "", "my_db");
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    $query = "INSERT INTO request (request_subject,request_text) VALUES ('$subject','$comment')";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../newclerk.css?v= <?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
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

        form {
            margin-left: 310px;
            margin-top: 150px;
            width: 50%;

        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 250px;
            background: #0e1725;
            transition: all 0.5s ease;
            margin-top: -150px;
        }

        .h {
            text-align: center;
            font-weight: bolder;
            font-size: 40px;
        }

        textarea,
        input {
            font-weight: bold;
        }
    </style>
    <title>Request</title>
</head>

<body>

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


    <main>
        <div class="main-bar">
            <form method="post" id="comment_form">
                <p class="h">Request</p>
                <div class="form-group">
                    <label>Enter Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label>Enter Comment</label>
                    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
                </div>

            </form>
        </div>
    </main>
</body>

</html>