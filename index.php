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
    <title>TechMart</title>
    <!-- Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS FILE-->
    <link rel="stylesheet" href="style.css">
  <style>
 .navbar .navbar-nav .nav-link{
  color: white;
 }
 .navbar .navbar-nav .nav-link:hover {
  font-size:18px;
 }
 .nav-link {
     transition: 0.2s
 }
 .navbar form button{
  color:white;
}
.navbar form button i:hover{
  font-size:20px;
}
.side-nav .navbar-nav .nav-link img{
 object-fit:contain;
}
.side-nav .navbar-nav .nav-link img:hover{
 width:110px;
 height:50px;
 object-fit:contain;
 transition:0.1s;
}

  </style>
</head>
<body>
    <div class="container-fluid p-0">
  <!--first child-->
  <nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid" style="font-family:'Trebuchet MS';font-size:16px">
      <img src="./images/Logo.gif" class="logo">
      <a class="navbar-brand" href="#" style="font-family:Trebuchet MS;" ></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i> Cart</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#">Total Price : </a>
        </li>
      </ul>
      <form class="d-flex ms-auto" role="search" >
        <input class="form-control ms-2" type="search" placeholder="Search Products" aria-label="Search"style="width:350px;border-radius:20px;">
        <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      <ul class = "navbar-nav ms-auto "  style="font-family:'Trebuchet MS';font-size:16px">
      <li class = "nav-item">
        <a class = "nav-link" href="#">Welcome Guest</a>
      </li>
      <li class = "nav-item">
        <a class = "nav-link" href="#">Login</a>
      </li>
  </ul>
    </div>
  </div>
</nav>



<!-- third child-->
<div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
  <div class="carousel-indicators"style="filter:invert(60%);">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/Slide1.jpg" class="d-block w-100 " alt="..."style="height:250px;">
    </div>
    <div class="carousel-item">
      <img src="./images/Slide2.jpg" class="d-block w-100 " alt="..."style="height:250px;">
    </div>
    <div class="carousel-item">
      <img src="./images/Slide3.jpg" class="d-block w-100 " alt="..."style="height:250px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"style="filter:invert(100%);" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"style="filter:invert(100%);" aria-hidden="true"></span>
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
        getProducts(); //it will fetch products from DB and display on homepage
        getUniqueCategories();
        getUniqueBrands();
      ?>

      <!--row end-->
      </div>
      <!--column end-->
    </div>
    
<!--side nav-->
    <div class="side-nav col-md-2  p-0 mt-3 mb-4"style="font-family:'Trebuchet MS';">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-primary">
        <!-- Brands to be displayed -->
          <a href="#" class="nav-link text-light"><h4>Top Brands</h4></a>
        </li>
        <?php 
          getBrands();
        ?>
      </ul>
      <!--Categories to be displayed-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-primary">
          <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>
        <?php 
        getCategories();
        ?>
      </ul>
    </div>
  </div>
<!-- large row end-->
</div>

    <div class="bg-primary p-3 text-center" style="font-family:'Candara';color:white;font-size:20px"><i class="fa-regular fa-copyright"></i> All Rights Reserved by TechMart</div>

    <!-- Bootstrap Js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
