<?php



if (isset($_POST['submit']) && isset($_FILES['photo'])) {

    $conn = new mysqli("localhost", "root", "", "my_db");

    $target = "uploads/" . basename($_FILES["photo"]["name"]);
    $target2 = "uploads/" . basename($_FILES["ID"]["name"]);

    $name  = $_POST['name'];
    $Fname  = $_POST['f_name'];
    $Gname  = $_POST['g_name'];
    $age  = $_POST['age'];
    $house_no  = $_POST['h_no'];
    $phone  = $_POST['phone'];
    $photo  = $_FILES['photo']["name"];
    $Kebelle_ID  = $_FILES['ID']["name"];

    $type = $_POST['role'];

    $info = "$name$Fname$age$house_no$phone!#$%^&*()_+?<>";
    $password = substr(str_shuffle($info), 0, 8);

    $query = "INSERT INTO `customer`(`Name`, `Fname`, `Gname`, `Age`, `House_No`, `Phone`, `image_url`, `Kebelle_Id`,`password`,`usertype`) VALUES ('$name','$Fname','$Gname','$age','$house_no','$phone
    ','$photo','$Kebelle_ID','$password','$type')";

    move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
    move_uploaded_file($_FILES["ID"]["tmp_name"], $target2);

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert ('registered')</script>";
        header("Location: register.php");
        echo $name;
    }
}
