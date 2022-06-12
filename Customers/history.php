<?php

session_start();
$conn = new mysqli("localhost", "root", "", "my_db");


$n = $_SESSION['name'];

$query = "SELECT * FROM `purchase` WHERE `Customer` = '$n' ";
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
                                <h5 class="header center">List of purchases</h5>
                                <hr width="50%">
                            </div>
                            <div>
                                <table id="Table" class="highlight centered responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="name">Good</th>
                                            <th data-field="price">Price</th>
                                            <th data-field="price">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = new mysqli("localhost", "root", "", "my_db");
                                        $result = mysqli_query($conn, "SELECT * FROM purchase where Customer='$n'");
                                        while ($row = mysqli_fetch_array($result)) {
                                            if (!empty($row)) {
                                                echo '<tr><td>' . $row["Good"] . '</td>';
                                                echo '<td>' . $row["Price"] . '</td>';
                                                echo '<td>' . $row["Quantity"] . '</td>';
                                            } else {
                                                echo '<tr><td>' . 'You have not Purchased Anything' . '</td>';
                                                echo '<td>' . 'Values will update when you purchase'. '</td>';
                                                echo '<td>' . '' . '</td>';
                                            }
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


</html>