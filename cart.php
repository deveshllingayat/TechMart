<!-- connect file-->
<?php
include('./includes/connect.php');
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
            border-radius: 10px;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: black;
            background-color: whitesmoke;
            transition: 0.4s;
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

        #logo:hover {
            box-shadow: 1px 1px 5px white;
            cursor: pointer;
        }

        .btn {
            border-radius: 10px;

        }

        #qty_input {
            width: 60px;
        }

        #btn_updateP:hover {
            background-color: dimgrey;
        }

        #btn_removeP:hover {
            background-color: #b22222;
        }
        .navbar-toggler-icon{
      background:transparent;
      filter: invert(100%);
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
                            <a class="nav-link" href="users_area/userLogin.php">Login</a>
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
        <div class="conatainer">
            <div class="row">
                <form action="" method="post">
                    <table class="table  text-center text-dark m-auto w-75 mt-3" style="vertical-align:middle;background-color:beige;border-radius:20px;font-family:lato;">

                        <tbody>
                            <?php
                            $get_ip = getIPAddress();
                            $cart_query = "Select * from `cart_details` where ip_address = '$get_ip'";
                            $result = mysqli_query($con, $cart_query);
                            $result_count = mysqli_num_rows($result);
                            if ($result_count > 0) {
                                echo "<thead>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Product Price</th>
                            <th>Select</th>
                            <th>Operation</th>
                            </thead>";
                                while ($row = mysqli_fetch_array($result)) {
                                    $product_id = $row['product_id'];
                                    if ($row['quantity'] == 0) {
                                        $qty = $row['quantity'] + 1;
                                    } else $qty = $row['quantity'];
                                    $select_products = "Select * from `products` where product_id = $product_id";
                                    $result_products = mysqli_query($con, $select_products);
                                    while ($row_product_price = mysqli_fetch_array($result_products)) {
                                        $product_price = array($row_product_price['product_price']);
                                        $price_table = $row_product_price['product_price'];
                                        $product_title = $row_product_price['product_title'];
                                        $product_image1 = $row_product_price['product_image1'];
                                        $product_values = array_sum($product_price);

                            ?>
                                        <tr>
                                            <td><?php echo $product_title ?></td>
                                            <td>
                                                <img src="./images/product_images/<?php echo $product_image1 ?>" width="80px" height="80px" alt="iphone 14" style="border-radius:15px;object-fit:contain;">
                                            </td>
                                            <?php
                                            if (isset($_POST['update_cart']) && isset($_POST['quantity'][$product_id])) {
                                                $qty = $_POST['quantity'][$product_id];
                                                $update_cart = "update `cart_details` set quantity=$qty where product_id=$product_id";
                                                $result_products_quantity = mysqli_query($con, $update_cart);
                                            }
                                            ?>

                                            <td><input type="number" min="1" max="100" value="<?php echo $qty ?>" name="quantity[<?php echo $product_id ?>]" id="qty_input"></td>
                                            <td><?php echo $price_table ?></td>
                                            <td><input type="checkbox" name="remove_item[]" value="<?php echo $product_id ?>"></td>
                                            <td>
                                                <input type="submit" class="btn btn-secondary text-light  p-2" id="btn_updateP" name="update_cart" value="Update Qty">
                                                <input type="submit" class="btn btn-danger text-light  p-2 " id="btn_removeP" name="remove_cart" value="Remove Product">
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            } else {
                                echo "<h3 class='text-center text-light'>Cart is empty!</h3>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- Subtotal -->
                    <?php
                    $get_ip = getIPAddress();
                    $cart_query = "Select * from `cart_details` where ip_address = '$get_ip'";
                    $result = mysqli_query($con, $cart_query);
                    $result_count = mysqli_num_rows($result);
                    $total = total_cart_price();
                    if ($result_count > 0) {
                        echo "<div class='d-flex justify-content-center align-items-center'>
                                <h5 class='h5 px-3 text-light '>Subtotal:$total/- </h5>
                                <input type='submit'value='Continue Shopping' class='btn btn-primary text-light m-2 p-2 'name='continue_shopping'>
                                <input type='submit' class='btn btn-primary text-light m-2 p-2 'value='Checkout'name='Checkout_btn'>
                            </div>";
                    } else {
                        echo "<div class='d-flex justify-content-center align-items-center'>
                                <input type='submit'value='Continue Shopping' class='btn btn-primary text-light m-2 p-2 'name='continue_shopping'>
                            </div>";
                    }
                    if (isset($_POST['continue_shopping'])) {
                        echo "<script>window.open('index.php','_self')</script>";
                    }
                    if (isset($_POST['Checkout_btn'])) {
                        echo "<script>window.open('users_area/checkout.php','_self')</script>";
                    }
                    ?>

            </div>
        </div>
        </form>
        <!-- function to remove cart items -->
        <?php
        function remove_cart_item()
        {
            global $con;
            if (isset($_POST['remove_cart'])) {
                foreach ($_POST['remove_item'] as $remove_id) {
                    $delete_query = "Delete from `cart_details` where product_id = '$remove_id'";
                    $run_delete = mysqli_query($con, $delete_query);
                    if ($run_delete) {
                        echo "<script>window.open('cart.php','_self');</script>";
                    }
                }
            }   
        }
        echo $remove_item = remove_cart_item();
        ?>

        <!-- foooter -->
        <?php
        include("./includes/footer.php");
        ?>

        <!-- Bootstrap Js link-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>