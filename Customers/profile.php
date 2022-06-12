<?php

session_start();
$conn = new mysqli("localhost", "root", "", "my_db");

$v = $_SESSION['name'];

$query = "SELECT * FROM `customer` WHERE `Uname` = '$v' ";
$result = mysqli_query($conn, $query);

?>
<?php require 'header.php'; ?>
<div class="row">
    <div class="col s12 m8 offset-m2">
        <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
            <div class="card-content">

                <div id="editableTable" class="section">
                    <form class="formValidate" id="formValidate1" method="post" action="" novalidate="novalidate">
                        <div class="row">
                            <div class="col s12 m4 l3">
                                <h5 class="header center">Your Profile</h5>
                                <hr width="50%">
                            </div>
                            <div>
                                <table id="Table" class="highlight centered responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="name">Uname</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="price">Phone</th>
                                            <th data-field="price">Email</th>
                                            <th data-field="price">Age</th>
                                            <th data-field="price">Birthdate</th>
                                            <th data-field="price">Gender</th>
                                            <!-- <th data-field="price">photo</th>
                                                    <th data-field="price">Kebelle_Id</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = new mysqli("localhost", "root", "", "my_db");
                                        $result = mysqli_query($conn, "SELECT * FROM customer where Uname='$v'");
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<tr><td>' . $row["Uname"] . '</td>';
                                            echo '<td>' . $row["Name"] . '</td>';
                                            echo '<td>' . $row["Phone"] . '</td>';
                                            echo '<td>' . $row["Email"] . '</td>';
                                            echo '<td>' . $row["Age"] . '</td>';
                                            echo '<td>' . $row["Birthdate"] . '</td>';
                                            echo '<td>' . $row["Gender"] . '</td></tr>';
                                            // echo '<td>' . $row["photo"] . '</td>';
                                            // echo '<td>' . $row["Kebelle_Id"] . '</td></tr>';

                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

</body>

</html>