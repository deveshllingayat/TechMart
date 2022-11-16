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

</head>
<body>
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid" style="font-family:'Candara';font-size:20px">
    <img src="./images/Logo.gif" class="logo">
    <a class="navbar-brand" href="#" style="font-family:Trebuchet MS; color:white;" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"style="color:white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"style="color:white;">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"style="color:white;">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"style="color:white;">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"style="color:white;"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i> Cart</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#"style="color:white;">Total Price : </a>
        </li>
      </ul>
      <form class="d-flex" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search";  >
        <button class="btn btn-outline-primary" type="submit"style="color:white;"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>
  </div>
</nav>

  <!--Second child -->
  <nav class = "navbar navbar-expand-lg mb-4" style="background-color:darkblue;">
    <ul class = "navbar-nav me-auto"  style="font-family:'Candara';font-size:20px">
      <li class = "nav-item">
        <a class = "nav-link" href="#"style="color:white;">Welcome Guest</a>
      </li>
      <li class = "nav-item">
        <a class = "nav-link" href="#"style="color:white;">Login</a>
      </li>
  </ul>
</nav>

<!-- Third child-->
<div style="font-family:'Candara';color:white;">
  <h2 class = "text-center" >APPLE INSPIRE</h3>
  <p class="text-center">Think Different.</p>
</div>

  <!-- fourth child-->
  <div class="row">
    <div class="col-md-10 mt-2">
      <!--Products-->
      <div class="row">
      <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card">
            <img src="./images/iphone14.jpg" class="card-img-top" alt="Iphone 14">
             <div class="card-body">
                 <h5 class="card-title">Apple Iphone 14</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Add to Cart</a>
                 <a href="#" class="btn btn-secondary">View More</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card">
            <img src="./images/iphone14Pro.png" class="card-img-top" alt="...">
              <div class="card-body">
            <h5 class="card-title">Apple Iphone 14 Pro</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-secondary">View More</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card">
            <img src="./images/iphone14ProMax.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Apple Iphone 14 Pro Max</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card">
              <img src="./images/iphone14Pro.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Apple Iphone 14 Pro</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card">
              <img src="./images/iphone14Pro.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Apple Iphone 14 Pro</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card">
              <img src="./images/iphone14Pro.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Apple Iphone 14 Pro</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>


      </div>
    </div>
    
<!--side nav-->
    <div class="col-md-2 bg-light p-0"style="font-family:'Candara';">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-primary">
          <!-- Brands to be displayed -->
          <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-dark"><h5><b>Apple</h5></a>
        </li> <li class="nav-item">
          <a href="#" class="nav-link text-dark"><h5><b>Samsung</b></h5></a>
        </li> <li class="nav-item ">
          <a href="#" class="nav-link text-dark"><h5><b>Google</b></h5></a>
        </li>
        </li> <li class="nav-item ">
          <a href="#" class="nav-link text-dark"><h5><b>OnePlus</b></h5></a>
        </li></li> <li class="nav-item ">
          <a href="#" class="nav-link text-dark"><h5><b>Realme</b></h5></a>
        </li>
      </ul>
      <!--Categories to be displayed-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-primary">
          <!-- Brands to be displayed -->
          <a href="#" class="nav-link text-light"><h4><b>Categories</b></h4></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-dark"><h5><b>Laptops</b></h5></a>
        </li> <li class="nav-item">
          <a href="#" class="nav-link text-dark"><h5><b>Mobiles & Tablets</b></h5></a>
        </li> <li class="nav-item ">
          <a href="#" class="nav-link text-dark"><h5><b>Audio & Accessories</b></h5></a>
        </li>
      </ul>
    </div>
  </div>

<!-- topmost div-->
</div>
    <div class="bg-primary p-3 text-center" style="font-family:'Candara';color:white;font-size:20px"><i class="fa-regular fa-copyright"></i> All Rights Reserved by Devesh</div>

    <!-- Bootstrap Js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
