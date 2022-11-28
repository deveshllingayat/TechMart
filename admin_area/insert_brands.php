<?php 
  include("../includes/connect.php");
  if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];
    $brand_url = $_POST['brand_url'];
    //select data from database
    $select_query = "Select * from `brands` where  brand_title = '$brand_title'and brand_url='$brand_url'";

    $result_select = mysqli_query($con,$select_query);

    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('The Brand is already present inside the database.')</script>";
    }
    else{
      $insert_query = "insert into `brands` (brand_title,brand_url) values ('$brand_title','$brand_url')";
      $result = mysqli_query($con,$insert_query);
      if($result){
        echo "<script>alert('The Brand has been inserted successfully!')</script>";
        }
      }
    }
?>

<h2 class="text-center text-light" style="font-family:'Trebuchet MS';">Insert Brands</h2>

<form action="" method= "post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" id="basic-addon1"style="background-color:silver ;"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name = "brand_title"placeholder="Brand Name"  required/>
</div>
<div class="input-group w-90 mb-3">
<span class="input-group-text" id="basic-addon1"style="background-color:silver ;"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name = "brand_url"placeholder="Image URL"  required/>
</div>
<div class="input-group w-10  m-auto"style="display:flex;justify-content:center;">
<input type="submit" class="bg-primary text-light p-2 mb-2 border-0 "style="border-radius:15px;" name = "insert_brand"value="Insert Brand" required/>  
</div>
</form>
