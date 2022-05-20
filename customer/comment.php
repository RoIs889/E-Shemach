<?php
if (isset($_POST['insert'])) {

    $conn = new mysqli("localhost", "root", "", "my_db");

    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Body = $_POST["Body"];
    $Rating = $_POST["Rating"];


    $stmt = $conn->prepare("insert into comments(Name,Email,Body,Rating) values( ?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Name, $Email, $Body, $Rating);
    $stmt->execute();
    echo '<script> alert( "Comment sent successfully ...")</script>';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../customer.css?v= <?php echo time(); ?>">
    <style>
        .main-bar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 350px;
            margin-top: 100px;
        }


        form input,
        form textarea,
        form select {
            width: 100%;
            display: block;
            margin-bottom: 10px;

        }
    </style>

    <title>Comment</title>
</head>


<body>

    <div class="header">
        <img class="logo" src="../logo_ccms.png" alt="logo">
        <label class="name" for="">Customer</label>
        <div class="header-right">
            <a href="../cust.php">Home</a>
            <a href="history.php">Purchase History</a>
            <a href="profile.php">Profile</a>
            <a href="comment.php">Comment</a>
            <a href="../index.php">Logout</a>
        </div>
    </div>

    <main>
        <div class="main-bar">
            <form method="post" action="">

                <label for="Name">Name</label>
                <input type="text" name="Name" id="Name" placeholder="Enter Name" autofocus="autofocus" />

                <label for="Email">Email</label>
                <input type="email" name="Email" id="Email" placeholder="Email Address" />

                <label for="Body">Body</label>
                <textarea name="Body" id="Body" cols="45" rows="5" placeholder="Enter Comment"></textarea>

                <label for="Rating">Rating</label>
                <select name="Rating" id="select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <button class="b0" type="reset" name="Reset" id="Reset" value="Reset">Reset</button>

                <button class="b1" type="submit" name="insert">Send Comment</button>



            </form>

        </div>
    </main>
</body>

</html>