<?php 
//including connect.php
include('./includes/connect.php');
//displaying products
    function getProducts(){
        global $con;
        //condition to check isset or not
        if(!isset($_GET['category'])){
          if(!isset($_GET['brand'])){
              $select_query = "Select * from `products` order by rand() LIMIT 0,9";// rand() to show random products on home page and limit -> max no. of products on the home page
              $result_query = mysqli_query($con,$select_query);
              
        while($row = mysqli_fetch_assoc($result_query)){
            $product_title = $row['product_title'];
            $description = $row['product_desc'];
            $product_id = $row['product_id'];
            $product_image1= $row['product_image1'];
            //$product_image2= $row['product_image2'];
            //$product_image3= $row['product_image3'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo"<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
              <div class='card 'style='border-radius:20px;margin:8px'>
                <img src='./images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
                 <div class='card-body'>
                     <h5 class='card-title'>$product_title</h5>
                     <p class='card-text'>$description</p>
                     <p class='card-price'>Price: $product_price</p>
                     <a href='#' class='btn btn-primary'>Add to Cart</a>
                     <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
                </div>
              </div>";
              }
            }
        }
    }
    //displaying brands
    function getBrands(){
      global $con;
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
      }

  //displaying categories
  function getCategories(){
      global $con;
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
  }

    //displaying unique products according to category
    function getUniqueCategories(){
      global $con;
      //condition to check isset or not
      if(isset($_GET['category'])){
        $category_id = $_GET['category'];
        $select_query = "Select * from `products` where category_id = $category_id order by rand() ";// rand() to show random products on home page and limit -> max no. of products on the home page
        $result_query = mysqli_query($con,$select_query);
        $no_of_rows = mysqli_num_rows($result_query);
        if($no_of_rows==0){
          echo"<h2 style='font-family:Trebuchet MS;color:white;text-align:center;'>No Products available for this Category!</h2>";
        }
      while($row = mysqli_fetch_assoc($result_query)){
          $product_title = $row['product_title'];
          $description = $row['product_desc'];
          $product_id = $row['product_id'];
          $product_image1= $row['product_image1'];
          // $product_image2= $row['product_image2'];
          //$product_image3= $row['product_image3'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];

          echo"<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
            <div class='card 'style='border-radius:20px;margin:8px'>
              <img src='./images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
               <div class='card-body'>
                   <h5 class='card-title'>$product_title</h5>
                   <p class='card-text'>$description</p>
                   <p class='card-price'>Price: $product_price</p>
                   <a href='#' class='btn btn-primary'>Add to Cart</a>
                   <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
          </div>";
          }
        }
      }
    //displaying products according to brands
    function getUniqueBrands(){
      global $con;
      //condition to check isset or not
      if(isset($_GET['brand'])){
      $brand_id = $_GET['brand'];
      $select_query = "Select * from `products` where brand_id = $brand_id ";// rand() to show random products of specific brand 
      $result_query = mysqli_query($con,$select_query);
      $no_of_rows = mysqli_num_rows($result_query);
        if($no_of_rows==0){
          echo"<h2 style='font-family:Trebuchet MS;color:white;text-align:center;'>This brand is not available for service!</h2>";
        }
      while($row = mysqli_fetch_assoc($result_query)){
          $product_title = $row['product_title'];
          $description = $row['product_desc'];
          $product_id = $row['product_id'];
          $product_image1= $row['product_image1'];
          // $product_image2= $row['product_image2'];
          //$product_image3= $row['product_image3'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];

          echo"<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
            <div class='card 'style='border-radius:20px;margin:8px'>
              <img src='./images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
               <div class='card-body'>
                   <h5 class='card-title'>$product_title</h5>
                   <p class='card-text'>$description</p>
                   <p class='card-price'>Price: $product_price</p>
                   <a href='#' class='btn btn-primary'>Add to Cart</a>
                   <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
          </div>";
          }
        }
      }
//searching products
function searchProduct(){
  global $con;
      if(isset($_GET['search_data_product'])){
          $search_data_value = $_GET['search_data'];
  
          $search_query = "Select * from `products` where product_keyword like '%$search_data_value%'";
          $result_query = mysqli_query($con,$search_query);
              
        while($row = mysqli_fetch_assoc($result_query)){
            $product_title = $row['product_title'];
            $description = $row['product_desc'];
            $product_id = $row['product_id'];
            $product_image1= $row['product_image1'];
            //$product_image2= $row['product_image2'];
            //$product_image3= $row['product_image3'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];

            echo"<div class='col-md-4 mb-3 d-flex align-items-stretch'style='width: 18rem;'>
              <div class='card 'style='border-radius:20px;margin:8px'>
                <img src='./images/$product_image1' class='card-img-top' alt='$product_title'style='border-radius:20px;'>
                 <div class='card-body'>
                     <h5 class='card-title'>$product_title</h5>
                     <p class='card-text'>$description</p>
                     <p class='card-price'>Price: $product_price</p>
                     <a href='#' class='btn btn-primary'>Add to Cart</a>
                     <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
                </div>
              </div>";
              }
            }
          }

?>
