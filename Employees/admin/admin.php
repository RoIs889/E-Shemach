<?php
$conn = new mysqli("localhost", "root", "", "my_db");
session_start();

if (!isset($_SESSION['name'])) {
    // echo "alert ('Please Login First!!!')";
    echo '<script>alert("Login First!!!")</script>';
    echo '<script>window.location.replace("../login.php");</script>';
    // sleep(2);
    // header("Location: index.php");
}
?>
<?php include '../../assets/PHP/admin.php'; ?>
<?php require 'header.php'; ?>
<!-- <div class="input-field col s12">
    <button class="btn cyan waves-effect waves-light right" onclick="revealC()" name="action">All Customers
        <i class="mdi-content-send right"></i>
    </button>
</div> -->
<ul class="collapsible popout" id="Cust">
    <li>
        <div class="collapsible-header">
            <h5 class="card-title center-align">All Customers</h5>
        </div>
        <div class="collapsible-body">
            <div class="col s12">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <!-- <h5 class="card-title center-align">All Customers</h5> -->
                    <!-- <hr width="30%"> -->
                    <div class="card-content">

                        <div id="editableTable" class="section">
                            <form class="formValidate" id="formValidate1" method="post" action="" novalidate="novalidate">
                                <div class="row">
                                    <div class="col s12 m4 l3">
                                        <h5 class="header center">List of users</h5>
                                        <hr width="50%">
                                    </div>
                                    <div>
                                        <table id="Table" class="highlight centered responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="name">ID</th>
                                                    <!-- <th data-field="name">Type</th> -->
                                                    <th data-field="name">Username</th>
                                                    <th data-field="name">Password</th>
                                                    <th data-field="name">Legal Name</th>
                                                    <th data-field="name">Phone</th>
                                                    <th data-field="name">Email</th>
                                                    <th data-field="price">Age</th>
                                                    <th data-field="price">Date of Birth</th>
                                                    <th data-field="price">Gender</th>
                                                    <th data-field="price">Verification Status</th>
                                                    <th data-field="price">Date of Registration</th>
                                                    <!-- <th data-field="price">Enable</th> -->
                                                    <!-- <th data-field="price">Enable</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = new mysqli("localhost", "root", "", "my_db");
                                                $result = mysqli_query($conn, "SELECT * FROM Customer");
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<tr><td>' . $row["ID"] . '</td>';
                                                    // echo '<td>' . $row["usertype"] . '</td>';
                                                    echo '<td>' . $row["Uname"] . '</td>';
                                                    echo '<td>' . $row["password"] . '</td>';
                                                    echo '<td>' . $row["Name"] . '</td>';
                                                    echo '<td>' . $row["Phone"] . '</td>';
                                                    echo '<td>' . $row["Email"] . '</td>';
                                                    echo '<td>' . $row["Age"] . '</td>';
                                                    echo '<td>' . $row["Birthdate"] . '</td>';
                                                    echo '<td>' . $row["Gender"] . '</td>';
                                                    if ($row["Verified"] == "0") {
                                                        echo '<td>' . "Unverified" . '</td>';
                                                    } else {
                                                        echo '<td>' . "Verified" . '</td>';
                                                    }
                                                    // echo '<td>' . $row["Verified"] . '</td>';
                                                    // echo '<td>' . $row["Verified"] . '</td>';
                                                    echo '<td>' . $row["Time"] . '</td></tr>';

                                                    //                         echo '<td><select name="' . $row['id'] . '_role">
                                                    //   <option value="Administrator"' . ($row['role'] == 'Administrator' ? 'selected' : '') . '>Administrator</option>
                                                    //   <option value="Customer"' . ($row['role'] == 'Customer' ? 'selected' : '') . '>Customer</option>
                                                    // </select></td>';
                                                    //                         echo '<td><select name="' . $row['id'] . '_verified">
                                                    //   <option value="1"' . ($row['verified'] ? 'selected' : '') . '>Verified</option>
                                                    //   <option value="0"' . (!$row['verified'] ? 'selected' : '') . '>Not Verified</option>
                                                    // </select></td>';
                                                    //                         echo '<td><select name="' . $row['id'] . '_deleted">
                                                    //   <option value="1"' . ($row['deleted'] ? 'selected' : '') . '>Disable</option>
                                                    //   <option value="0"' . (!$row['deleted'] ? 'selected' : '') . '>Enable</option>
                                                    // </select></td>';
                                                    //                         $key = $row['id'];
                                                    //                         $sql = mysqli_query($con, "SELECT * from wallet WHERE customer_id = $key;");
                                                    //                         if ($row1 = mysqli_fetch_array($sql)) {
                                                    //                             $wallet_id = $row1['id'];
                                                    //                             $sql1 = mysqli_query($con, "SELECT * from wallet_details WHERE wallet_id = $wallet_id;");
                                                    //                             if ($row2 = mysqli_fetch_array($sql1)) {
                                                    //                                 $balance = $row2['balance'];
                                                    //                             }
                                                    //                         }
                                                    //                         echo '<td><label for="balance">Balance</label><input id="balance" name="' . $row['id'] . '_balance" value="' . $balance . '" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- <div class="divider"></div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>

<ul class="collapsible popout" id="Emp">
    <li>
        <div class="collapsible-header center">
            <h5 class="card-title center-align">All Employees</h5>
        </div>
        <div class="collapsible-body">
            <div class="col s12">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <!-- <h5 class="card-title center-align">All Customers</h5> -->
                    <!-- <hr width="30%"> -->
                    <div class="card-content">

                        <div id="editableTable" class="section">
                            <form class="formValidate" id="formValidate1" method="post" action="" novalidate="novalidate">
                                <div class="row">
                                    <div class="col s12 m4 l3">
                                        <h5 class="header center">List of users</h5>
                                        <hr width="50%">
                                    </div>
                                    <div>
                                        <table id="Table" class="highlight centered responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="name">ID</th>
                                                    <th data-field="name">Type</th>
                                                    <th data-field="name">Username</th>
                                                    <th data-field="name">Password</th>
                                                    <th data-field="name">Legal Name</th>
                                                    <th data-field="name">Phone</th>
                                                    <th data-field="name">Email</th>
                                                    <th data-field="price">Age</th>
                                                    <th data-field="price">Date of Birth</th>
                                                    <th data-field="price">Gender</th>
                                                    <!-- <th data-field="price">Verification Status</th> -->
                                                    <th data-field="price">Date of Registration</th>
                                                    <!-- <th data-field="price">Enable</th> -->
                                                    <!-- <th data-field="price">Enable</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = new mysqli("localhost", "root", "", "my_db");
                                                $result = mysqli_query($conn, "SELECT * FROM Employee");
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<tr><td>' . $row["ID"] . '</td>';

                                                    // echo '<td><select name="' . $row['usertype'] . '_role">
                                                    //   <option value="Distributor"' . ($row['usertype'] == 'Distributor' ? 'selected' : '') . '>Distributor</option>
                                                    //   <option value="Clerk"' . ($row['usertype'] == 'Clerk' ? 'selected' : '') . '>Clerk</option>
                                                    //   <option value="admin"' . ($row['usertype'] == 'admin' ? 'selected' : '') . '>admin</option>
                                                    //   <option value="Clerks Manager"' . ($row['usertype'] == 'Clerks Manager' ? 'selected' : '') . '>Clerks Manager</option>
                                                    // </select></td>';

                                                    echo '<td>' . $row["usertype"] . '</td>';

                                                    echo '<td>' . $row["Uname"] . '</td>';
                                                    echo '<td>' . $row["Password"] . '</td>';
                                                    echo '<td>' . $row["Name"] . '</td>';
                                                    echo '<td>' . $row["Phone"] . '</td>';
                                                    echo '<td>' . $row["Email"] . '</td>';
                                                    echo '<td>' . $row["Age"] . '</td>';
                                                    echo '<td>' . $row["Birthdate"] . '</td>';
                                                    echo '<td>' . $row["Gender"] . '</td>';
                                                    // echo '<td>' . $row["Verified"] . '</td>';
                                                    // echo '<td>' . $row["Verified"] . '</td>';
                                                    echo '<td>' . $row["Time"] . '</td></tr>';

                                                    //                         echo '<td><select name="' . $row['id'] . '_verified">
                                                    //   <option value="1"' . ($row['verified'] ? 'selected' : '') . '>Verified</option>
                                                    //   <option value="0"' . (!$row['verified'] ? 'selected' : '') . '>Not Verified</option>
                                                    // </select></td>';
                                                    //                         echo '<td><select name="' . $row['id'] . '_deleted">
                                                    //   <option value="1"' . ($row['deleted'] ? 'selected' : '') . '>Disable</option>
                                                    //   <option value="0"' . (!$row['deleted'] ? 'selected' : '') . '>Enable</option>
                                                    // </select></td>';
                                                    //                         $key = $row['id'];
                                                    //                         $sql = mysqli_query($con, "SELECT * from wallet WHERE customer_id = $key;");
                                                    //                         if ($row1 = mysqli_fetch_array($sql)) {
                                                    //                             $wallet_id = $row1['id'];
                                                    //                             $sql1 = mysqli_query($con, "SELECT * from wallet_details WHERE wallet_id = $wallet_id;");
                                                    //                             if ($row2 = mysqli_fetch_array($sql1)) {
                                                    //                                 $balance = $row2['balance'];
                                                    //                             }
                                                    //                         }
                                                    //                         echo '<td><label for="balance">Balance</label><input id="balance" name="' . $row['id'] . '_balance" value="' . $balance . '" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>


                        </div>
                        <!-- <div class="divider"></div> -->

                    </div>

                </div>
            </div>
            <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" onclick="revealE()" name="revealE">Add new Employee
                    <i class="mdi-content-send right"></i>
                </button>
            </div>

            <div class="col s12" id="addnew">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <div class="card-content">
                        <h5 class="card-title center-align">Add new Employee</h5>
                        <form action="admin.php" method="post" class="signup-form" id="form" autocomplete="off" enctype="multipart/form-data">
                            <div class="red-text center-align"><?php echo $errors['invalid']; ?></div>
                            <!-- <h6 class="center-align blue-text">Make sure to fill all necessary fields!</h6> -->
                            <div class="row">
                                <div class="input-field col s12 m4">
                                    <!-- <i class="material-icons prefix">email</i> -->
                                    <span class="material-symbols-outlined prefix">account_circle</span>
                                    <input name="username" type="text" id="username" value="<?php echo htmlspecialchars($title) ?>" />
                                    <label for="username">User name *</label>
                                    <div class="red-text right-align"><?php echo $errors['uname']; ?></div>
                                </div>
                                <!-- </div>
                                <div class="row"> -->
                                <div class="input-field col s12 m4">
                                    <span class="material-symbols-outlined prefix">password</span>
                                    <input name="password" type="password" id="password" value="<?php echo htmlspecialchars($p1) ?>" />
                                    <label for="password">Password *</label>
                                    <div class="red-text right-align"><?php echo $errors['pass']; ?></div>

                                </div>
                                <div class="input-field col s12 m4">
                                    <span class="material-symbols-outlined prefix">password</span>
                                    <input name="cpassword" type="password" id="cpassword" value="<?php echo htmlspecialchars($p2) ?>" />
                                    <label for="cpassword">Confirm Password *</label>
                                    <div class="red-text right-align"><?php echo $errors['pass2']; ?></div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col s12 m4">
                                    <!-- <i class="material-icons prefix">email</i> -->
                                    <span class="material-symbols-outlined prefix">person</span>
                                    <input name="name" type="text" id="name" value="<?php echo htmlspecialchars($title2) ?>" />
                                    <label for="name">Legal name *</label>
                                    <div class="red-text right-align"><?php echo $errors['name']; ?></div>
                                </div>
                                <!-- </div>
                                <div class="row"> -->
                                <div class="input-field col s12 m4">
                                    <span class="material-symbols-outlined prefix">call</span>
                                    <input name="phone" type="text" id="phone" value="<?php echo htmlspecialchars($ph) ?>" />
                                    <label for="phone">Phone *</label>
                                    <div class="red-text right-align"><?php echo $errors['phone']; ?></div>

                                </div>


                                <div class="input-field col s12 m4">
                                    <span class="material-symbols-outlined prefix">alternate_email</span>
                                    <input name="email" type="text" id="email" value="<?php echo htmlspecialchars($email1) ?>" />
                                    <label for="email">Email</label>
                                    <div class="red-text right-align"><?php echo $errors['email']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m4">
                                    <!-- <i class="material-icons prefix">email</i> -->
                                    <span class="material-symbols-outlined prefix">edit_calendar</span>
                                    <input name="date" type="text" class="datepicker" id="date" value="<?php echo htmlspecialchars($date1) ?>">
                                    <label for="date">Birthdate *</label>

                                    <div class="red-text right-align"><?php echo $errors['date']; ?></div>
                                </div>

                                <div class="input-field col s12 m4">
                                    <i class="material-symbols-outlined prefix">wc</i>

                                    <!-- <i class="material-symbols-outlined">badge</i> -->
                                    <select class="" name="gen" id="gen">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <!-- <option value="Distributor">Distributor</option> -->
                                        <!-- <option value="Admin">Admin</option> -->
                                    </select>
                                    <label for="gen">Gender</label>
                                    <div class="red-text right-align"><?php echo $errors['gen']; ?></div>
                                </div>
                                <div class="input-field col s12 m4">
                                    <i class="material-symbols-outlined prefix">badge</i>

                                    <!-- <i class="material-symbols-outlined">badge</i> -->
                                    <select class="" name="role" id="role">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="Clerk">Clerk</option>
                                        <option value="Clerks Manager">Clerks Manager</option>
                                        <option value="admin">admin</option>
                                        <!-- <option value="Distributor">Distributor</option> -->
                                        <!-- <option value="Admin">Admin</option> -->
                                    </select>
                                    <label for="role">Role</label>
                                    <div class="red-text right-align"><?php echo $errors['role']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field col s12 m6">
                                    <div class="btn">
                                        <span>Profile Picture</span>
                                        <input type="file" name="photo" id="photo" value=">">
                                        <!-- <label for="username">Profile Picture</label> -->
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" placeholder="Upload your photo here" type="text" value="">
                                    </div>
                                    <div class="red-text right-align"><?php echo $errors['photo']; ?></div>
                                </div>
                                <div class="file-field input-field col s12 m6">
                                    <div class="btn">
                                        <span>Kebelle ID *</span>
                                        <input type="file" id="ID" name="ID" value=">">

                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload your ID here" value="">
                                    </div>
                                    <div class="red-text right-align"><?php echo $errors['avatar']; ?></div>

                                </div>
                            </div>
                            <div class="row center-align">
                                <!-- <button class="btn blue darken-2 waves-effect waves" onclick="prev_1()" id="prev_2">Previous
                                        <i class="material-symbols-outlined"></i>
                                    </button> -->
                                <button class="btn blue darken-2 waves-effect waves" type="submit" name="addE">Add
                                    <i class="material-symbols-outlined"></i>
                                </button>
                            </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        </div>

    </li>
    <li>

    </li>
</ul>
<ul class="collapsible popout" id="Other">
    <li>
        <div class="collapsible-header">
            <h5 class="card-title center-align">Customer Comments</h5>
        </div>
        <div class="collapsible-body">
            <div class="col s12">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <!-- <h5 class="card-title center-align">All Customers</h5> -->
                    <!-- <hr width="30%"> -->
                    <div class="card-content">

                        <div id="editableTable" class="section">

                            <div class="row">
                                <div class="col s12 m4 l3">
                                    <h5 class="header center">All Comments</h5>
                                    <hr width="50%">
                                </div>
                                <div>
                                    <table id="Table" class="highlight centered responsive-table">
                                        <thead>
                                            <tr>
                                                <th data-field="name">ID</th>
                                                <th data-field="name">Username</th>
                                                <th data-field="name">Email</th>
                                                <th data-field="name" class="truncate">Body</th>
                                                <!-- <th data-field="name">Legal Name</th> -->
                                                <th data-field="price">Date of Registration</th>
                                                <!-- <th data-field="price">Enable</th> -->
                                                <!-- <th data-field="price">Enable</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $conn = new mysqli("localhost", "root", "", "my_db");
                                            $result = mysqli_query($conn, "SELECT * FROM Comments");
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<tr><td>' . $row["ID"] . '</td>';
                                                // echo '<td>' . $row["usertype"] . '</td>';
                                                echo '<td>' . $row["Name"] . '</td>';
                                                echo '<td>' . $row["Email"] . '</td>';
                                                echo '<td>' . $row["Body"] . '</td>';
                                                echo '<td>' . $row["Time"] . '</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- <div class="divider"></div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="collapsible-header">
            <h5 class="card-title center-align">Products</h5>
        </div>
        <div class="collapsible-body">
            <div class="col s12">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <!-- <h5 class="card-title center-align">All Customers</h5> -->
                    <!-- <hr width="30%"> -->
                    <div class="card-content">

                        <div id="editableTable" class="section">
                            <form class="formValidate" id="formValidate1" method="post" action="../../assets/PHP/goods.php">
                                <div class="row">
                                    <div class="col s12 m4 l3">
                                        <h5 class="header center">All Products</h5>
                                        <hr width="50%">
                                    </div>
                                    <div>
                                        <table id="Table" class="highlight centered responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="type">Type</th>
                                                    <th data-field="name">Product Name</th>
                                                    <th data-field="quan">Quantity(Kg/L)</th>
                                                    <th data-field="price">Price</th>
                                                    <th data-field="stk">Quantity In Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = new mysqli("localhost", "root", "", "my_db");
                                                $result = mysqli_query($conn, "SELECT * FROM products");
                                                while ($row = mysqli_fetch_array($result)) {
                                                    // echo '<tr><td>' . $row["Type"] . '</td>';
                                                    echo '<tr><td><input value="'.$row["Type"].'" id="'.$row["ID"].'_type" name="'.$row['ID'].'_type" type="text"></td>';
                                                    echo '<td><input value="'.$row["Product_name"].'" id="'.$row["ID"].'_name" name="'.$row['ID'].'_name" type="text"></td>';
                                                    echo '<td><input value="'.$row["Quantity"].'" id="'.$row["ID"].'_quan" name="'.$row['ID'].'_quan" type="number"></td>';
                                                    echo '<td><input value="'.$row["Price"].'" id="'.$row["ID"].'_price" name="'.$row['ID'].'_price" type="number"></td>';
                                                    echo '<td><input value="'.$row["Product_In_Stock"].'" id="'.$row["ID"].'_stk" name="'.$row['ID'].'_stk" type="number"></td></tr>';
                                                    
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- <div class="divider"></div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="collapsible-header">
            <h5 class="card-title center-align">Purchases</h5>
        </div>
        <div class="collapsible-body">
            <div class="col s12">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <!-- <h5 class="card-title center-align">All Customers</h5> -->
                    <!-- <hr width="30%"> -->
                    <div class="card-content">

                        <div id="editableTable" class="section">
                            <form class="formValidate" id="formValidate1" method="post" action="" novalidate="novalidate">
                                <div class="row">
                                    <div class="col s12 m4 l3">
                                        <h5 class="header center">All Purchases</h5>
                                        <hr width="50%">
                                    </div>
                                    <div>
                                        <table id="Table" class="highlight centered responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="price">ID</th>
                                                    <th data-field="name">Product Name</th>
                                                    <th data-field="price">Price</th>
                                                    <th data-field="price">Quantity(Kg/L)</th>
                                                    <th data-field="name">Customer</th>
                                                    <th data-field="name">Clerk</th>
                                                    <th data-field="name">Date of Purchase</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = new mysqli("localhost", "root", "", "my_db");
                                                $result = mysqli_query($conn, "SELECT * FROM purchase");
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<tr><td>' . $row["ID"] . '</td>';
                                                    // echo '<td>' . $row["usertype"] . '</td>';
                                                    echo '<td>' . $row["Good"] . '</td>';
                                                    echo '<td>' . $row["Price"] . '</td>';
                                                    echo '<td>' . $row["Quantity"] . '</td>';
                                                    echo '<td>' . $row["Customer"] . '</td>';
                                                    echo '<td>' . $row["Clerk"] . '</td>';
                                                    echo '<td>' . $row["Time"] . '</td>';
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>

                                    <!-- <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div> -->
                                </div>
                            </form>
                            <!-- <div class="divider"></div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <div class="collapsible-header">
            <h5 class="card-title center-align">Requests</h5>
        </div>
        <div class="collapsible-body">
            <div class="col s12">
                <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
                    <!-- <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;"> -->
                    <!-- <h5 class="card-title center-align">All Customers</h5> -->
                    <!-- <hr width="30%"> -->
                    <div class="card-content">

                        <div id="editableTable" class="section">

                            <div class="row">
                                <div class="col s12 m4 l3">
                                    <h5 class="header center">All Requests</h5>
                                    <hr width="50%">
                                </div>
                                <div>
                                    <table id="Table" class="highlight centered responsive-table">
                                        <thead>
                                            <tr>
                                                <th data-field="name">ID</th>
                                                <th data-field="name">Subject</th>
                                                <th data-field="name">Request</th>
                                                <th data-field="name" class="truncate">Status</th>
                                                <th data-field="date">Date of request</th>
                                                <!-- <th data-field="price">Date of Registration</th> -->
                                                <!-- <th data-field="price">Enable</th> -->
                                                <!-- <th data-field="price">Enable</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $conn = new mysqli("localhost", "root", "", "my_db");
                                            $result = mysqli_query($conn, "SELECT * FROM request");
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<tr><td>' . $row["ID"] . '</td>';
                                                // echo '<td>' . $row["usertype"] . '</td>';
                                                echo '<td>' . $row["request_subject"] . '</td>';
                                                echo '<td>' . $row["request_text"] . '</td>';
                                                $stats = $row["request_status"];
                                                if ($stats == '1') {
                                                    echo '<td>' . 'Responded' . '</td>';
                                                } else {
                                                    echo '<td>' . 'Response Pending' . '</td>';
                                                }
                                                echo '<td>' . $row["Time"] . '</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- <div class="divider"></div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
<!-- <div class="row" id="Other">
    <div class="col s12">
        <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
            <div class="z-depth-1 grey lighten-4 row" style="display: block; padding: 2px 5px 0px 5px; border: 1px solid #EEE;">
            <h5 class="card-title center-align">Site Settings</h5>
            <hr width="30%">
            <div class="card-content">

            </div>
        </div>
    </div>
</div> -->





<?php require 'footer.php'; ?>