<?php

session_start();
$conn = new mysqli("localhost", "root", "", "my_db");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../newclerk.css <?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/6aa1d03493.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <title>View Request</title>
</head>

<body>
    <header>

    </header>
    <br>

    <div class="sidebar">
        <div class="logo-details">
            <i style="font-size: 40px; color:whitesmoke;" class="fas fa-cash-register"></i>
            <span class="logo_name">View Request</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../distributor.php" class="active">
                    <i style="font-size: 24px;" class="fas fa-home"></i>
                    <span class="links_name">Home</span>

                </a>
            </li>
            <li>
                <a href="view-request.php">
                    <i style='font-size:24px' class="material-icons">&#xe0c9;</i>
                    <span class="links_name">AcceptRequest</span>
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

            <a href="" class="dropdown-toggle" id="notify">
                <span class="count" style="color:#fff;height:30px; width:30px;background:red; margin-right:5px;"></span>Notification
            </a>
            <ul class="dropdown-menu"></ul>



        </div>
    </main>
    <style>
        main {
            height: 100%;
            display: flex;

        }

        .sidebar {
            width: 25%;
            height: 100%;
        }

        .main-bar {
            width: 75%;
            height: 100%;
        }

        .profile {
            height: 40px;
            margin-bottom: 20px;
            border: 1px solid black;
        }

        .notification {
            display: flex;
            justify-content: right;

        }


        .notify-li {
            margin-right: 30px;
        }

        #notify:hover>ul {
            display: hidden;
        }

        #notify:active>ul {
            display: block;
        }

        #notify:focus>ul {
            display: hidden;
        }

        .divider {
            height: 0;
        }


        .main-bar {
            width: 70%;
            margin-top: 120px;
            margin-left: 320px;

        }

        .h {
            text-align: center;
            color: #fff;
        }

        .bar {
            box-shadow: 0 0 40px 0 black;
            height: 500px;
            width: 800px;
            background-color: #0e1725;
            margin-left: 80px;

        }


        .profile {
            width: 70%;
            align-items: center;
            margin-top: 9px;
            margin-left: 70px;
            font-weight: bold;
            color: white;
        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 270px;
            background: #0e1725;
            transition: all 0.5s ease;
            margin-top: -21px;

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;

        }


        .sidebar.active {
            width: 60px;
        }

        .sidebar .logo-details {
            height: 70px;
            display: flex;
            align-items: center;
        }

        .sidebar .logo-details .logo_name {
            color: rgb(198, 227, 238);
            font-size: 30px;
            font-weight: bolder;
            margin-left: 10px;
            margin-top: 10px;
        }

        .sidebar .nav-links {
            margin-top: 10px;
            margin-left: -40px;
        }

        .sidebar .nav-links li {
            position: relative;
            list-style: none;
            height: 40px;
        }

        .sidebar .nav-links li a {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li a:hover {
            background: #4585ff;
        }

        .sidebar .nav-links li i {
            min-width: 60px;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }

        .sidebar .nav-links li a .links_name {
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            white-space: nowrap;
        }

        .sidebar .nav-links .log_out {
            position: absolute;
            bottom: 0;
            width: 115%;
        }


        i {
            margin-left: 35px;
        }



        #notify {
            text-decoration: none;
            font-weight: 800;
            color: black;
        }
    </style>
</body>

<script>
    $(document).ready(function() {

        function load_unseen_notification(view = '') {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    view: view
                },
                dataType: "json",
                success: function(data) {
                    $('.dropdown-menu').html(data.notification);
                    if (data.unseen_notification > 0) {
                        $('.count').html(data.unseen_notification);
                    }
                }
            });
        }

        load_unseen_notification();

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#subject').val() != '' && $('#comment').val() != '') {
                var form_data = $(this).serialize();
                $.ajax({
                    url: "",
                    method: "POST",
                    data: form_data,
                    success: function(data) {
                        $('#comment_form')[0].reset();
                        load_unseen_notification();
                    }
                });
            } else {
                alert("Both Fields are Required");
            }
        });

        $(document).on('click', '.dropdown-toggle', function() {
            $('.count').html('');
            load_unseen_notification('yes');
        });

        setInterval(function() {
            load_unseen_notification();
        }, 5000);

    });
</script>

</html>