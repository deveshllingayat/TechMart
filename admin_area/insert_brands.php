<?php 
  include("../includes/connect.php");
  if($_POST['insert_brand']){
    $brand_title = $_POST['brand_title'];
    //select data from database
    $select_query = "Select * from `brands` where  brand_title = '$brand_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('The Brand is already present inside the database.')</script>";
    }
    else{
      $insert_query = "insert into `brands` (brand_title) values ('$brand_title')";
      $result = mysqli_query($con,$insert_query);
      if($result){
        echo "<script>alert('The Brand has been inserted successfully!')</script>";
        }
      }
    }


?>

<form action="" method= "post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" id="basic-addon1"style="background-color:silver ;"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name = "brand_title"placeholder="Insert Brand Name"  required/>
</div>
<div class="input-group w-10 mb-2 m-auto">
<input type="submit" class="bg-primary text-light p-2 my-3 border-0 "style="border-radius:15px;" name = "insert_brand"value="Insert Brands" required/> 
 
</div>
</form>
