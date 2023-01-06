<?php
include("../includes/connect.php");
if (isset($_POST['insert_brand'])) {
  $brand_title = $_POST['brand_title'];
  $brand_logo = $_FILES['brand_logo']['name'];
  $temp_logo = $_FILES['brand_logo']['tmp_name'];
  //select data from database
  $select_query = "Select * from `brands` where  brand_title = '$brand_title'and brand_logo='$brand_logo'";

  $result_select = mysqli_query($con, $select_query);

  $number = mysqli_num_rows($result_select);
  if ($number > 0) {
    echo "<script>alert('The Brand is already present inside the database.')</script>";
  } else {
    move_uploaded_file($temp_logo,"../images/$brand_logo");
    $insert_query = "insert into `brands` (brand_title,brand_logo) values ('$brand_title','$brand_logo')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
      echo "<script>alert('The Brand has been inserted successfully!')</script>";
    }
  }
}
?>

<h2 class="text-center text-light" style="font-family:'Trebuchet MS';">Insert Brands</h2>

<form action="" method="post" class="mb-2" enctype="multipart/form-data">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text" id="basic-addon1" style="background-color:silver ;"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="brand_title" placeholder="Brand Name" required />
  </div>
  <div class="input-group w-90 mb-3">
    <input type="file" name="brand_logo" id="brand_logo" class="form-control" required />
  </div>
  <div class="input-group w-10  m-auto" style="display:flex;justify-content:center;">
    <button type="submit" class="btn btn-primary text-light p-2 mb-2 border-0 "  name="insert_brand">Insert Brand</button>
  </div>
</form>