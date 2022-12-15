<!-- connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechMart-Cart Details</title>
    <!-- Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS FILE-->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <style>
        nav {
            background-color: rgb(50, 50, 50);
        }

        .navbar .navbar-nav .nav-link {
            color: white;
        }

        .navbar .navbar-nav .nav-link:hover {
            border-radius: 10px;
            box-shadow: 1px 1px 5px white;
            transition: 0s;
        }

        .navbar form button i:hover {
            font-size: 14px;
        }

        .nav-item {
            font-family: 'Lato';
            font-size: 16px;
        }

        .side-nav .navbar-nav .nav-link img {
            object-fit: contain;
        }

        .side-nav .navbar-nav .nav-item:hover {
            box-shadow: 1px 1px 10px grey;
            transition: 0.2s;
        }

        .card-text {
            text-align: justify;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        #logo {
            color: yellow;
            box-shadow: 1px 1px 10px black;
            border-radius: 10px;
            font-family: forte;
            padding: 3px;
        }
        .btn{
            border-radius:10px;

        }
        .btn:hover{
            border:1px solid black;
        }
        #qty_input{
            width: 60px;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <h4 id="logo">tm</h4>
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="displayAll.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup style="font-size: 14px;"><?php cart_item_no() ?></sup> Cart</a>
                        </li>

                    </ul>

                    <form class="d-flex ms-auto" method="get">
                        <input class="form-control ms-2" type="search" name="search_data" placeholder="Search Products" aria-label="Search" style="width:350px;border-radius:8px;">
                        <button class="btn btn-outline-none text-light" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Welcome Guest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- calling cart -->
        <?php
        cart();
        ?>
        <!-- third child -->
        <div class="conatainerr">
            <div class="row">
                <table class="table  text-center text-dark m-auto w-75 mt-3" style="vertical-align:middle;background-color:beige;border-radius:20px;font-family:lato;">
                    <thead>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Product Price</th>
                        <th>Total Price</th>
                        <th>Select</th>
                        <th>Operation</th>
                    </thead>
                    <tbody >
                        <tr>
                            <td>Apple</td>
                            <td>
                                <img src="./images/product_images/iphone14.jpg" width="80px" height="80px" alt="iphone 14"style="border-radius:15px;">
                            </td>
                            <td><input type="text" name="quantity"id="qty_input"></td>
                            <td>89000</td>
                            <td>270000</td>
                            <td><input type="checkbox" name="Select" id="select_check"></td>
                            <td >
                                <button class="btn btn-dark text-light  p-2  ">Update Qty</button>
                                <button class="btn btn-danger text-light  p-2 ">Remove Product</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <!-- Subtotal -->
                <div class="d-flex justify-content-center align-items-center">
                    <h5 class="h5 px-3 text-light ">Subtotal:4900000/- </h5>
                    <a href="index.php"><button class="btn btn-primary text-light m-2 p-2 ">Continue Shopping</button></a>
                    <a href="#"><button class="btn btn-primary text-light m-2 p-2 ">Checkout</button></a>
                </div>
            </div>
        </div>

        <?php
        include("./includes/footer.php");
        ?>

        <!-- Bootstrap Js link-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>