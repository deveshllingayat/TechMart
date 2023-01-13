<?php 
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
<h2 class="text-center text-light" style="font-family:'Trebuchet MS';">Insert Cagegories</h2>
<form action="" method= "post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" id="basic-addon1"style="background-color:silver ;"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name = "cat_title"placeholder="Category Title" required />
</div>
<div class="input-group w-10 mb-2 m-auto"style="display:flex;justify-content:center;">
 <button type="submit" class="btn btn-dark text-light p-2 my-2 border-0" name = "insert_cat">Insert Category</button>

</div>
</form>