<!-- connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechMart</title>
  <!-- Bootstrap CSS link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- font awsome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS FILE-->
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
</head>

<body>
  <div class="container-fluid bg-secondary p-0">
    <!--first child-->
    <nav class="navbar bg-dark navbar-expand-lg">
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
            <?php if (!isset($_SESSION['username'])) {
              echo " <li class='nav-item'>
              <a class='nav-link' href='users_area/user_registration.php'>Register</a>
            </li>";
            } else {
              echo " <li class='nav-item'>
              <a class='nav-link' href='users_area/profile.php'>My Account</a>
            </li>";
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup style="font-size: 14px;"><?php cart_item_no() ?></sup> Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart Value : &#x20B9; <?php echo total_cart_price() ?>/-</a>
            </li>
          </ul>
          <form class="d-flex ms-auto" role="search">
            <input class="form-control ms-2" type="search" placeholder="Search Products" name="search_data" aria-label="Search" style="width:350px;border-radius:8px;">
            <button class="btn btn-outline-none text-line" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass text-light"></i></button>
          </form>
          <ul class="navbar-nav ms-auto ">
            <?php

            if (!isset($_SESSION['username'])) {
              echo "<li class='nav-item'>
<a class='nav-link' href='#'>Welcome Guest</a>
</li>";
            } else {
              echo "<li class='nav-item'>
<a class='nav-link' href='#'>Welcome " . $_SESSION['username'] . " </a>
</li>";
            }

            if (!isset($_SESSION['username'])) {
              echo "<li class='nav-item'>
  <a class='nav-link' href='users_area/userLogin.php'>Login</a>
</li>";
            } else {
              echo "<li class='nav-item'>
  <a class='nav-link' href='users_area/logout.php'>Logout</a>
</li>";
            }

            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- calling cart -->
    <?php
    cart();
    ?>

    <!-- fourth child-->
    <div class="row px-1">
      <div class="col-md-10 mt-2 ">
        <!--Products-->
        <div class="row  ">
          <!-- fetching products-->
          <?php
          searchProduct(); //it will fetch products from DB and display on homepage
          getUniqueCategories();
          getUniqueBrands();
          ?>

          <!--row end-->
        </div>
        <!--column end-->
      </div>

      <!--side nav-->
      <div class="side-nav col-md-2  p-0 mt-3 mb-4">
        <ul class="navbar-nav bg-dark me-auto text-center">
          <li class="nav-item " style="pointer-events:none">
            <!-- Brands to be displayed -->
            <a href="#" class="nav-link text-light">
              <h4>Top Brands</h4>
            </a>
          </li>
          <?php
          getBrands();
          ?>
        </ul>
        <!--Categories to be displayed-->
        <ul class="navbar-nav bg-dark me-auto text-center">
          <li class="nav-item " style="pointer-events:none">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>
          <?php
          getCategories();
          ?>
        </ul>
      </div>
    </div>
    <!-- large row end-->
  </div>

  <?php
  include("./includes/footer.php");
  ?>
  <!-- Bootstrap Js link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>