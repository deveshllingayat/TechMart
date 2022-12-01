<!-- connect file-->
<?php 
include('includes/connect.php');
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

<!-- Third child-->
<div style="font-family:'Trebuchet MS';color:white;">
  <h2 class = "text-center mt-2" >APPLE INSPIRE</h3>
  <p class="text-center">Think Different.</p>
</div>

  <!-- fourth child-->
  <div class="row ">
    <div class="col-md-10 mt-2 ">
      <!--Products-->
      <div class="row ms-auto ">
      <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card "style="border-radius:20px;margin:8px">
            <img src="./images/iphone14.jpg" class="card-img-top" alt="Iphone 14"style="border-radius:20px;">
             <div class="card-body">
                 <h5 class="card-title">Iphone 14</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Add to Cart</a>
                 <a href="#" class="btn btn-secondary">View More</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card"style="border-radius:20px;margin:8px">
            <img src="./images/iphone14Pro.png" class="card-img-top" alt="..."style="border-radius:20px;">
              <div class="card-body">
            <h5 class="card-title">Iphone 14 Pro</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-secondary">View More</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card"style="border-radius:20px;margin:8px">
            <img src="./images/iphone14ProMax.png" class="card-img-top" alt="..."style="border-radius:20px;">
              <div class="card-body">
                <h5 class="card-title">Iphone 14 Pro Max</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card"style="border-radius:20px;margin:8px">
              <img src="./images/iphone14Pro.png" class="card-img-top" alt="..."style="border-radius:20px;">
            <div class="card-body">
              <h5 class="card-title">Iphone 14 Pro</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card"style="border-radius:20px;margin:8px">
              <img src="./images/iphone14Pro.png" class="card-img-top" alt="..."style="border-radius:20px;">
            <div class="card-body">
              <h5 class="card-title">Iphone 14 Pro</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"style="width: 18rem;">
          <div class="card"style="border-radius:20px;margin:8px">
              <img src="./images/iphone14Pro.png" class="card-img-top" alt="..."style="border-radius:20px;">
            <div class="card-body">
              <h5 class="card-title">Iphone 14 Pro</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    
<!--side nav-->
    <div class="side-nav col-md-2 bg-light p-0 "style="font-family:'Trebuchet MS';">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-primary">
        <!-- Brands to be displayed -->
          <a href="#" class="nav-link text-light"><h4>Top Brands</h4></a>
        </li>
        <?php 
        $select_brands = "Select * from `brands`";
        $result_brands = mysqli_query($con,$select_brands);
        while($row_data=mysqli_fetch_assoc($result_brands)){
          $brand_title = $row_data['brand_title'];
          $brand_url = $row_data['brand_url'];
          $brand_id = $row_data['brand_id'];
          if($brand_id%2!=0){
            echo "<li class='nav-item'style='background-color:#E8E8E8'>
            <a href='index.php?brand=$brand_id' class='nav-link '><img src='$brand_url'width='40px'height='40px' alt='$brand_title' ></a>
          </li>";
          }else{
            echo "<li class='nav-item bg-light'>
            <a href='index.php?brand=$brand_id' class='nav-link '><img src='$brand_url'width='40px'height='40px' alt='$brand_title' ></a>
          </li>";
          }
        }
        ?>
      </ul>
      <!--Categories to be displayed-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-primary">
          <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>
        <?php 
        $select_categories = "Select * from `categories`";
        $result_categories = mysqli_query($con,$select_categories);
        while($row_data = mysqli_fetch_assoc($result_categories)){
          $category_title = $row_data['category_title'];
          $category_id = $row_data['category_id'];
          if($category_id%2!=0){
            echo "<li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-dark'style='background-color:#E8E8E8;'><h5>$category_title</h5></a>
          </li> ";
          }else{
            echo "<li class='nav-item bg-light'>
            <a href='index.php?category=$category_id' class='nav-link text-dark'><h5>$category_title</h5></a>
          </li> ";
          }        
        }
        ?>
      </ul>
    </div>
  </div>

</div>
    <div class="bg-primary p-3 text-center" style="font-family:'Candara';color:white;font-size:20px"><i class="fa-regular fa-copyright"></i> All Rights Reserved by TechMart</div>

    <!-- Bootstrap Js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
