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

<body >
  <div class="container-fluid p-0 bg-secondary">
    <!--first child-->
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <h4 id="logo">tm</h4>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
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
            <li class="nav-item" style="pointer-events:none">
              <a class="nav-link" href="#">Cart Value : &#x20B9; <?php echo total_cart_price() ?>/-</a>
            </li>
          </ul>

          <form class="d-flex ms-auto" method="get" action="search_product.php">
            <input class="form-control ms-2" type="search" name="search_data" placeholder="Search Products" aria-label="Search" style="width:350px;border-radius:8px;">
            <button class="btn btn-outline-none text-light" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <ul class="navbar-nav ms-auto ">
            <?php

            if (!isset($_SESSION['username'])) {
              echo "<li class='nav-item pe-none'>
            <a class='nav-link ' href='#'>Welcome Guest</a>
          </li>";
            } else {
              echo "<li class='nav-item pe-none'>
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
    <!-- third child-->
    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
      <div class="carousel-indicators" style="filter:invert(60%);">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/Slide1.jpg" class="d-block w-100 " alt="Mobiles & Tablets" style="height:250px;">
        </div>
        <div class="carousel-item">
          <img src="./images/Slide2.jpg" class="d-block w-100 " alt="Laptops" style="height:250px;">
        </div>
        <div class="carousel-item">
          <img src="./images/Slide3.jpg" class="d-block w-100 " alt="Audio & Accessories" style="height:250px;">
        </div>
        <div class="carousel-item">
          <img src="./images/Slide4.jpg" class="d-block w-100 " alt="Televisions" style="height:250px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" style="filter:invert(100%);" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" style="filter:invert(100%);" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- fourth child-->
    <div class="row px-1">
      <div class="col-md-10 mt-2 ">
        <!--Products-->
        <div class="row  ">
          <!-- fetching products-->
          <?php

          getProducts();
          viewMore();
          //it will fetch products based on category or brand from DB and display on homepage
          getUniqueCategories();
          getUniqueBrands();
          // $ip = getIPAddress();  
          // echo 'User Real IP Address - '.$ip;  
          ?>

          <!--row end-->
        </div>
        <!--column end-->
      </div>

      <!--side nav-->
      <div class="side-nav col-md-2  p-0 mt-3 mb-4">
        <ul class="navbar-nav bg-dark me-auto text-center">
          <li class="nav-item " style="pointer-events:none;">
            <a href="#" class="nav-link text-light">
              <h4>Top Brands</h4>
            </a>
          </li>
          <!-- Brands to be displayed -->
          <?php
          getBrands();
          ?>
        </ul>
        <!--Categories to be displayed-->
        <ul class="navbar-nav bg-dark me-auto text-center">
          <li class="nav-item " style="pointer-events:none;">
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