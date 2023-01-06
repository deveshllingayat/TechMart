<!-- connect file-->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $_SESSION['username'] ?></title>
  <title>Welcome <?php ?></title>
  <!-- Bootstrap CSS link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- font awsome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS FILE-->
  <link rel="stylesheet" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />


</head>

<body>
  <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <h4 id="logo">tm</h4>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../displayAll.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup style="font-size: 14px;"><?php cart_item_no() ?></sup> Cart</a>
            </li>
            <li class="nav-item" style="pointer-events:none">
              <a class="nav-link" href="#">Cart Value : &#x20B9; <?php echo total_cart_price() ?>/-</a>
            </li>
          </ul>

          <form class="d-flex ms-auto" method="get" action="../search_product.php">
            <input class="form-control ms-2" type="search" name="search_data" placeholder="Search Products" aria-label="Search" style="width:350px;border-radius:8px;">
            <button class="btn btn-outline-none text-light" type="submit" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
      

        </div>
      </div>
    </nav>
    <!-- calling cart -->
    <?php
    cart();
    ?>

    <!-- fourth child-->
    <div class="row">
      <div class="col-md-2 p-0">
        <ul class="my_profile_nav navbar-nav text-center mt-4"style="background-color:#E8E8E8;height:100vh;">
          <li class="nav-item text-light"style="background-color:rgb(50,50,50);border:1 px outset white;">
            <a class="nav-link" href="#">
              <h4>Your Profile</h4>
            </a>
          </li>
          <?php
          $username = $_SESSION['username'];
          $user_image_query = "Select * from `user_table` where username = '$username'";
          $result_image = mysqli_query($con,$user_image_query);
          $row_image = mysqli_fetch_array($result_image);
          $user_image = $row_image['user_image'];
          echo "<li class='nav-item '>
          <img src='./users_images/$user_image' class='profile_img my-3' alt='profile_photo'>
        </li>";
           ?>
          
          <li class="nav-item  text-dark">
            <?php 
            if(isset($_GET['pending_orders'])){
              echo"
              <a class='nav-link' href='profile.php?pending_orders' style='font-weight:bold;'>
              Pending Orders
              </a>";
            }else{
              echo"
              <a class='nav-link' href='profile.php?pending_orders'>
              Pending Orders
              </a>";
            }
            ?>
          </li>
          <li class="nav-item  text-dark">
            <!-- <a class="nav-link" href="profile.php?edit_account">
              Edit Account
            </a> -->
            <?php 
            if(isset($_GET['edit_account'])){
              echo"
              <a class='nav-link' href='profile.php?edit_account' style='font-weight:bold;'>
              Edit Account
              </a>";
            }else{
              echo"
              <a class='nav-link' href='profile.php?edit_account'>
              Edit Account
              </a>";
            }
            ?>
          </li>
          <li class="nav-item  text-dark">
            <!-- <a class="nav-link" href="profile.php?my_orders">
              My Orders
            </a> -->
            <?php 
            if(isset($_GET['my_orders'])){
              echo"
              <a class='nav-link' href='profile.php?my_orders' style='font-weight:bold;'>
              My Orders
              </a>";
            }else{
              echo"
              <a class='nav-link' href='profile.php?my_orders'>
              My Orders
              </a>";
            }
            ?>
          </li>
          <li class="nav-item  text-dark ">
            <!-- <a class="nav-link" href="profile.php?delete_account">
              Delete Account
            </a> -->
            <?php 
            if(isset($_GET['delete_account'])){
              echo"
              <a class='nav-link' href='profile.php?delete_account' style='font-weight:bold;'>
              Delete Account
              </a>";
            }else{
              echo"
              <a class='nav-link' href='profile.php?delete_account'>
              Delete Account
              </a>";
            }
            ?>
          </li>
          <li class="nav-item  text-dark ">
            <a class="nav-link" href="logout.php">
              Logout
            </a>
          </li>
        </ul>
      </div>

      <div class="col-md-10 text-center">
          <?php 
          get_user_order_details();
          if(isset($_GET['edit_account'])){
            include('edit_account.php');
          }
          if(isset($_GET['my_orders'])){
            include('user_orders.php');
          }
          if(isset($_GET['delete_account'])){
            include('delete_account.php');
          }
          ?>
      </div>
    </div>

    <?php
    include("../includes/footer.php");
    ?>

    <!-- Bootstrap Js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>