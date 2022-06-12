<?php
$conn = new mysqli("localhost", "root", "", "my_db");
$msg = "";
session_start();

if (!isset($_SESSION['name'])) {
    // echo "alert ('Please Login First!!!')";
    echo '<script>alert("Login First!!!")</script>';
    echo '<script>window.location.replace("index.php");</script>';
    // sleep(2);
    // header("Location: index.php");
}



?>
<?php require 'header.php'; ?>


<h2>Welcome <?php echo $_SESSION['name'] ?> to E-Shemach</h2>
<h3>For the community</h3>
<!-- <ul class="collapsible popout" id="Cust">
    <li>
        <div class="collapsible-header">
            <h5 class="card-title center-align">List of Products</h5>
        </div> -->
<div class="row">
    <div class="col s12 m10 offset-m1">
        <div class="card grey lighten-3" style="padding: 5px 0px 0px 5px; border: 1px solid #EEE;">
            <div class="card-content">

                <div id="editableTable" class="section">
                    <form class="formValidate" id="formValidate1" method="post" action="" novalidate="novalidate">
                        <div class="row">
                            <div class="col s12 m4 l3">
                                <h5 class="header center">List of Products</h5>
                                <hr width="50%">
                            </div>
                            <div>
                                <table id="Table" class="highlight centered responsive-table">
                                    <thead>
                                        <tr>
                                            <th data-field="name">Type</th>
                                            <th data-field="name">Product Name</th>
                                            <th data-field="price">Quantity(Kg/L)</th>
                                            <th data-field="price">Price</th>
                                            <th data-field="price">Quantity In Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = new mysqli("localhost", "root", "", "my_db");
                                        $result = mysqli_query($conn, "SELECT * FROM products");
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<tr><td>' . $row["Type"] . '</td>';
                                            // echo '<td>' . $row["usertype"] . '</td>';
                                            echo '<td>' . $row["Product_name"] . '</td>';
                                            echo '<td>' . $row["Quantity"] . '</td>';
                                            echo '<td>' . $row["Price"] . '</td>';
                                            echo '<td>' . $row["Product_In_Stock"] . '</td>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<p class="par">
    Cooperatives are user owned, user controlled and user benefited
    organizations. They could be agricultural, non-agricultural, unions,
    and rural saving and credit cooperatives. They operate different
    sectors of the economy including agricultural, handicraft, housing,
    transport, consumer services, building and construction, banking and
    insurance, fisheries, forestry, etc. Cooperatives contribute to
    economic and social development in both developed and developing
    countries. Though the value which a cooperative contributes to society
    differs depending on its individual objectives, cooperatives play a
    role in finding solutions to unemployment and promoting technical
    skills.
</p>
<!-- <a href="logout.php"><button Id="button1"> Logout</button></a> -->
</main>
</body>

</html>