<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash-Board</title>
     <!-- botstrap CSS link  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "style.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/e54152159e.js" crossorigin="anonymous"></script>
     <link rel = "stylesheet" href = "style.css">

    <style>
       .admin_image
{
    width: 100px;
    object-fit: contain;
}
    </style>


</head>
<body>
                <!-- nav bar -->
    <div class="container-fluid p-0">
        <!--  First Child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="lo" class="logo">
                <nav class="navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">WellCome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--  Second-Child-->
        <div class="bg-light">
            <h3 class="text center p2">Manage Details</h3>
        </div>

        <!-- Third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p1 d-flex align-items-center">
                <div class="px-6">
                    <a href="#"><img src="../images/admin.png" alt="admin" class = "admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <!--button*10>a>nav-link.text-light.bg-info.my-1-->
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_categories" class="nav-link text-light 
                    bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light 
                    bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">LogOut</a></button>
                    

                </div>
            </div>
        </div>
        <!--fourth child-->
        <div class="container my-5 bg-praymary">
            <?php
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            
            ?>
        </div>
        <!--last-child -->
<!-- <div class="bg-info p-3 text-center">
  <p>All rights reserved @-Designed by Olyad-2014ec</p>
</div> -->
</div>    


    </div>           





<!-- bootstrap JS link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>