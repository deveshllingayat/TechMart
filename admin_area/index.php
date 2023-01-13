<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashBoard</title>
    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font file-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <style>
        body{
            background-color: #667292;
            overflow-x: hidden;
        }
        .admin_img{
            width:100px;
            object-fit: contain;
            border-radius:10px;
        }
        .footer{
            position: absolute ;
            bottom:0;
            width:100%;
        }
 
        .button .btn{
            font-size:24px;
            box-shadow: 1px 1px 5px black;
        }   
        #logo{
        color:black;
        background-color: white;
        border-radius:10px;
        font-family:forte;
        padding:3px;
        }
        .product_img{
            width:80px;
            height:80px;
            object-fit: contain;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0 m-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
            <h4 id="logo">tm</h4>
                <h3 class="text-center text-light p-2s"style="font-family:'Lato';font-size:40px;">TechMart Admin Panel</h3>
                <nav class="navbar navbar-expand-lg bg-transparent">
                    <ul class="navbar-nav " >
                        <li class="navbar-item ">
                        <a href="" class="nav-link text-light">Welcome Guest</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        
        <!--third child-->
        <div class="row">
            <div class="col-md-12  p-1 d-flex align-items-center">
                <div class="p-3">
                    <img src="../images/GoogleLogo.png" alt="Admin Image" class="admin_img">
                    <p class="text-light text-center p-1"style="font-size:16px;font-family:'Candara';">Admin Name</p>
                </div>
                <div class="button text-center " >
                    <button class="btn btn-light mx-1"s>
                        <a href="insert_products.php" class="nav-link mx-1">
                            Insert Products
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>  
                        <a href="index.php?view_products" class="nav-link mx-1">
                            View Products
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="index.php?insert_category" class="nav-link mx-1">
                            Insert Categories
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="" class="nav-link mx-1">
                            View Categories
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="index.php?insert_brand" class="nav-link mx-1">
                            Insert Brands
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="" class="nav-link mx-1">
                            View Brands
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="" class="nav-link mx-1">
                            All Orders
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="" class="nav-link mx-1">
                            All Payments
                        </a>
                    </button>
                    <button class="btn btn-light m-2"s>
                        <a href="" class="nav-link mx-1">
                            List Users
                        </a>
                    </button>
                    <button class="btn btn-light m-2">
                        <a href="" class="nav-link mx-1">
                            Logout
                        </a>
                    </button>                    

                </div>
            </div>
        </div>
    </div>

    <!--fourth child-->
    <div class="container">
        <?php 
        if(isset($_GET['insert_category']))
            include('insert_categories.php');
        
        if(isset($_GET['insert_brand']))
            include('insert_brands.php');

        if(isset($_GET['view_products']))
            include('view_products.php');
        if(isset($_GET['edit_products']))
            include('edit_products.php');
        ?>
    
    </div>

<?php include('footer.php'); ?>


<!-- Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>