<?php
//including connect.php
include('./includes/connect.php');
//displaying random products on home page
function getProducts()
{
  global $con;
  //condition to check isset or not
  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      $select_query = "Select * from `products` order by rand() LIMIT 0,9"; // rand() to show random products on home page and limit -> max no. of products on the home page
      $result_query = mysqli_query($con, $select_query);

      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_title = $row['product_title'];
        $description = $row['product_desc'];
        $product_id = $row['product_id'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
        <div class='card h-auto d-inline-block'style='border-radius:20px;margin:8px;'>
          <img src='./images/product_images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
           <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'>$description</p>
               <p class='card-price'>Price: $product_price</p>
               <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
               <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
          </div>
        </div>";
      }
    }
  }
}
//get all products
function getAllProducts()
{
  global $con;
  //condition to check isset or not
  if (!isset($_GET['category'])) {
    if (!isset($_GET['brand'])) {
      $select_query = "Select * from `products` order by rand() "; // rand() to show random products on home page and limit -> max no. of products on the home page
      $result_query = mysqli_query($con, $select_query);

      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_title = $row['product_title'];
        $description = $row['product_desc'];
        $product_id = $row['product_id'];
        $product_image1 = $row['product_image1'];
        //$product_image2= $row['product_image2'];
        //$product_image3= $row['product_image3'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
        <div class='card h-auto d-inline-block'style='border-radius:20px;margin:8px;'>
          <img src='./images/product_images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
           <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'>$description</p>
               <p class='card-price'>Price: $product_price</p>
               <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
               <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
          </div>
        </div>";
      }
    }
  }
}
//displaying brands in side nav
function getBrands()
{
  global $con;
  $select_brands = "Select * from `brands`";
  $result_brands = mysqli_query($con, $select_brands);
  while ($row_data = mysqli_fetch_assoc($result_brands)) {
    $brand_title = $row_data['brand_title'];
    $image_path = $row_data['brand_image_path'];
    $brand_id = $row_data['brand_id'];
    if ($brand_id % 2 != 0) {
      echo "<li class='nav-item'style='background-color:#E8E8E8'>
              <a href='index.php?brand=$brand_id' class='nav-link '><img src='./images/$image_path'width='40px'height='40px' alt='$brand_title' ></a>
            </li>";
    } else {
      echo "<li class='nav-item bg-light'>
              <a href='index.php?brand=$brand_id' class='nav-link '><img src='./images/$image_path'width='40px'height='40px' alt='$brand_title' ></a>
            </li>";
    }
  }
}

//displaying categories in side nav
function getCategories()
{
  global $con;
  $select_categories = "Select * from `categories`";
  $result_categories = mysqli_query($con, $select_categories);
  while ($row_data = mysqli_fetch_assoc($result_categories)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    if ($category_id % 2 != 0) {
      echo "<li class='nav-item'style='background-color:#E8E8E8;'>
          <a href='index.php?category=$category_id' class='nav-link text-dark'><h5>$category_title</h5></a>
        </li> ";
    } else {
      echo "<li class='nav-item bg-light'>
          <a href='index.php?category=$category_id' class='nav-link text-dark'><h5>$category_title</h5></a>
        </li> ";
    }
  }
}

//displaying unique products according to category
function getUniqueCategories()
{
  global $con;
  //condition to check isset or not
  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    $select_query = "Select * from `products` where category_id = $category_id order by rand() "; // rand() to show random products on home page and limit -> max no. of products on the home page
    $result_query = mysqli_query($con, $select_query);
    $no_of_rows = mysqli_num_rows($result_query);
    if ($no_of_rows == 0) {
      echo "<h2 style='font-family:Trebuchet MS;color:white;text-align:center;'>No Products available for this Category!</h2>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_title = $row['product_title'];
      $description = $row['product_desc'];
      $product_id = $row['product_id'];
      $product_image1 = $row['product_image1'];
      // $product_image2= $row['product_image2'];
      //$product_image3= $row['product_image3'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];

      echo "<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
      <div class='card h-auto d-inline-block'style='border-radius:20px;margin:8px;'>
        <img src='./images/product_images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
         <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
             <p class='card-text'>$description</p>
             <p class='card-price'>Price: $product_price</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
             <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
          </div>
        </div>
      </div>";
    }
  }
}
//displaying products according to brands
function getUniqueBrands()
{
  global $con;
  //condition to check isset or not
  if (isset($_GET['brand'])) {
    $brand_id = $_GET['brand'];
    $select_query = "Select * from `products` where brand_id = $brand_id "; // rand() to show random products of specific brand 
    $result_query = mysqli_query($con, $select_query);
    $no_of_rows = mysqli_num_rows($result_query);
    if ($no_of_rows == 0) {
      echo "<h2 style='font-family:Trebuchet MS;color:white;text-align:center;'>This brand is not available for service!</h2>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_title = $row['product_title'];
      $description = $row['product_desc'];
      $product_id = $row['product_id'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];

      echo "<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
      <div class='card h-auto d-inline-block'style='border-radius:20px;margin:8px;'>
        <img src='./images/product_images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
         <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
             <p class='card-text'>$description</p>
             <p class='card-price'>Price: $product_price</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
             <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
          </div>
        </div>
      </div>";
    }
  }
}
//searching products
function searchProduct()
{
  global $con;
  if (isset($_GET['search_data_product'])) {
    $search_data_value = $_GET['search_data'];
    $search_query = "Select * from `products` where product_keyword like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $no_of_rows = mysqli_num_rows($result_query);
    if ($no_of_rows == 0) {
      echo "<h2 style='font-family:Trebuchet MS;color:white;text-align:center;'>No Products Available!</h2>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_title = $row['product_title'];
      $description = $row['product_desc'];
      $product_id = $row['product_id'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];

      echo "<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
      <div class='card h-auto d-inline-block'style='border-radius:20px;margin:8px;'>
        <img src='./images/product_images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
         <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
             <p class='card-text'>$description</p>
             <p class='card-price'>Price: $product_price</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
             <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
          </div>
        </div>
      </div>";
    }
  }
}
// vew details/more function
function viewMore()
{
  global $con;
  //condition to check isset or not
  if (isset($_GET['product_id'])) {
    if (!isset($_GET['category'])) {
      if (!isset($_GET['brand'])) {
        $product_id = $_GET['product_id'];
        $select_query = "Select * from `products` where product_id=$product_id"; // rand() to show random products on home page and limit -> max no. of products on the home page
        $result_query = mysqli_query($con, $select_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
          $product_title = $row['product_title'];
          $description = $row['product_desc'];
          $product_id = $row['product_id'];
          $product_image1 = $row['product_image1'];
          $product_image2= $row['product_image2'];
          $product_image3= $row['product_image3'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];

          echo "<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
              <div class='card h-auto d-inline-block'style='border-radius:20px;margin:8px;'>
                <img src='./images/product_images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
                 <div class='card-body'>
                     <h5 class='card-title'>$product_title</h5>
                     <p class='card-text'>$description</p>
                     <p class='card-price'>Price: $product_price</p>
                     <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
                     <a href='index.php' class='btn btn-secondary'>Go Home</a>
                  </div>
                </div>
              </div>
              <!-- Related Products-->
            <div class='col-md-8'>
            <div class='row '>
            <div class='col-md-12'>
                <h2 class='text-center text-light'>Product Images</h2>
            </div>
            <div class='col-md-6'>
            <img src='./images/product_images/$product_image2'  class='card-img-top' alt='$product_title'height='250px'style='border-radius:20px;object-fit:fill;'>
            </div>
            <div class='col-md-6'>
            <img src='./images/product_images/$product_image3' class='card-img-top' alt='$product_title'height='250px'style='border-radius:20px;object-fit:fill;'>
            </div>
            <div class = 'text-light m-3'>
              <h3 class='text-center'>Product Description</h3>
              <p >$description</p>
            </div>
            </div>
        </div>";
        }
      }
    }
  }

}
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//cart function
function cart(){
  global $con;
  if(isset($_GET['add_to_cart'])){
    $get_ip = getIPAddress();
    $get_product_id = $_GET['add_to_cart'];
    $select_query = "Select * from `cart_details` where ip_address ='$get_ip' and product_id = $get_product_id";
    $result_query = mysqli_query($con,$select_query);
    $no_of_rows = mysqli_num_rows($result_query);
    if ($no_of_rows > 0) {
      echo "<script>alert('Item already present inside the cart!');</script>";
      echo "<script>window.open('index.php','_self');</script>";
    }else{
      $insert_query = "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip',0)";
      $result_query = mysqli_query($con,$insert_query);
      echo "<script>alert('Item is added to cart')</script>";
      echo"<script>window.open('index.php','_self')</script>;";
    }
  }
}
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

//cart items
function cart_item_no(){
  global $con;
  if(isset($_GET['add_to_cart'])){
    $get_ip = getIPAddress();
    $select_query = "Select * from `cart_details` where ip_address ='$get_ip'";
    $result_query = mysqli_query($con,$select_query);
    $count_items = mysqli_num_rows($result_query);
  }else{
      $get_ip = getIPAddress();
      $select_query = "Select * from `cart_details` where ip_address ='$get_ip'";
      $result_query = mysqli_query($con,$select_query);
      $count_items = mysqli_num_rows($result_query);
    }
    echo $count_items;
  }
  //total cart price
  function total_cart_price(){
    global $con;
    $get_ip = getIPAddress();
    $total_price = 0;
    $cart_query = "Select * from `cart_details` where ip_address = '$get_ip'";
    $result = mysqli_query($con,$cart_query);
    while($row = mysqli_fetch_array($result)){
      $product_id = $row['product_id'];
      $select_products = "Select * from `products` where product_id = $product_id";
      $result_products = mysqli_query($con,$select_products);
      while($row_product_price = mysqli_fetch_array($result_products)){
        $product_price = array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total_price += $product_values;
      }
    }
    echo $total_price;
  }
?>
