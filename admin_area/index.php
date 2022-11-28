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
    <!-- css file-->
    <link rel="stylesheet" href="../style.css">
    <style>
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
        .navbar .navbar-nav .nav-link{
            color:white;
        }
        .navbar .navbar .navbar-nav .nav-link:hover{
           font-size:18px;
        }
        .button .btn{
            font-size:24px;
            font-family:'Trebuchet MS';
            color: black;
            background-color:#F0F0F0;
        }
        .button .btn :hover{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0 m-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light "style="background-color:darkblue;">
            <div class="container-fluid">
                <img src="../images/Logo.gif" alt="Logo" class="logo">
                <h3 class="text-center text-light p-2s"style="font-family:'Trebuchet MS';">TechMart Admin Panel</h3>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav " >
                        <li class="navbar-item ">
                        <a href="" class="nav-link">Welcome Guest</a>
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
                    <img src="../images/iphone14.jpg" alt="Admin Image" class="admin_img">
                    <p class="text-light text-center p-1"style="font-size:16px;font-family:'Candara';">Admin Name</p>
                </div>
                <div class="button text-center " >
                    <buttton class="btn mx-1"s>
                        <a href="insert_products.php" class="nav-link mx-1">
                            Insert Products
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>  
                        <a href="" class="nav-link mx-1">
                            View Products
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="index.php?insert_category" class="nav-link mx-1">
                            Insert Categories
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="" class="nav-link mx-1">
                            View Categories
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="index.php?insert_brand" class="nav-link mx-1">
                            Insert Brands
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="" class="nav-link mx-1">
                            View Brands
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="" class="nav-link mx-1">
                            All Orders
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="" class="nav-link mx-1">
                            All Payments
                        </a>
                    </buttton>
                    <buttton class="btn m-2"s>
                        <a href="" class="nav-link mx-1">
                            List Users
                        </a>
                    </buttton>
                    <buttton class="btn m-2">
                        <a href="" class="nav-link mx-1">
                            Logout
                        </a>
                    </buttton>                    

                </div>
            </div>
        </div>
    </div>

    <!--fourth child-->
    <div class="container my-5">
        <?php 
        if(isset($_GET['insert_category']))
            include('insert_categories.php');
        
        if(isset($_GET['insert_brand']))
            include('insert_brands.php')
        
        ?>
    </div>


    <div class="p-2 text-center footer" style="background-color:darkblue;font-family:'Candara';color:white;font-size:20px"><i class="fa-regular fa-copyright"></i> All Rights Reserved by TechMart</div>

<!-- Bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
