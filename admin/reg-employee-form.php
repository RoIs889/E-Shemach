<?php


if (isset($_POST['submit']) && isset($_FILES['photo'])) {

    $conn = new mysqli("localhost", "root", "", "my_db");
    $target = "uploads/" . basename($_FILES["photo"]["name"]);
    $target1 = "uploads/" . basename($_FILES["ID"]["name"]);

    $name  = $_POST['name'];
    $Fname  = $_POST['f_name'];
    $Gname  = $_POST['g_name'];
    $phone  = $_POST['phone'];
    $photo  = $_FILES['photo']["name"];
    $Kebelle_ID  = $_FILES['ID']["name"];
    $type = $_POST['role'];

    $info = "$name$Fname$phone!#$%^&*()_+?<>";
    $password = substr(str_shuffle($info), 0, 8);

    $query = "INSERT INTO `employee`( `Name`, `Fname`, `Gname`, `Phone`, `Photo`, `Kebelle_ID`, `Password`, `usertype`) VALUES ('$name','$Fname','$Gname','$phone
    ','$photo','$Kebelle_ID','$password','$type')";

    move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
    move_uploaded_file($_FILES["ID"]["tmp_name"], $target1);

    $result = mysqli_query($conn, $query);



    if ($result) {
        
        echo "<script>alert ('registered')</script>";

        header("Location: register-employee.php");
    }
}
