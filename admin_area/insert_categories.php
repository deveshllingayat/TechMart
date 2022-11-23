<?php 
include("../includes/connect.php");
if(isset($_POST['insert_cat'])){
  $category_title = $_POST['cat_title'];
  //select data from database
  $select_query = "Select * from `categories` where category_title='$category_title'";
  $result_select = mysqli_query($con,$select_query);
  $number = mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This category is already present inside the database.')</script>";
  }
  else{
    $insert_query = "insert into `categories` (category_title) values ('$category_title')";
    $result = mysqli_query($con,$insert_query);
    if($result){
      echo "<script>alert('Category has been inserted successfully!')</script>";
    }
  }
}
?>

<form action="" method= "post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" id="basic-addon1"style="background-color:silver ;"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name = "cat_title"placeholder="Insert Category" required />
</div>
<div class="input-group w-10 mb-2 m-auto">
 <input type="submit" class="bg-primary text-light p-2 my-3 border-0"style="border-radius:15px;"name = "insert_cat"value="Insert Category" required/> 

</div>
</form>
