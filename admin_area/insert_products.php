<?php 
    include("../includes/connect.php");
    if(isset($_POST['insert_product'])){
        $product_title = $_POST['product_title'];
        $product_desc = $_POST['product_desc'];
        $product_keyword = $_POST['product_keyword'];
        $product_category = $_POST['product_category'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_status = 'true';
        //accessing images 
        $product_image1= $_FILES['product_image1']['name'];
        $product_image2= $_FILES['product_image2']['name'];
        $product_image3= $_FILES['product_image3']['name'];
        //accessing temp name
        $temp_image1= $_FILES['product_image1']['tmp_name'];
        $temp_image2= $_FILES['product_image2']['tmp_name'];
        $temp_image3= $_FILES['product_image3']['tmp_name'];
       //checking empty condition
       if($product_title=='' or $product_desc=='' or $product_keyword=='' or $product_category=='' or $product_brand=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo"<script>alert('Please fill all the available fields.')</script>";
        exit();
       }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        //insert products
        $insert_product = "insert into `products` (product_title,product_desc,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title', '$product_desc','$product_keyword', '$product_category','$product_brand','$product_image1', '$product_image2', '$product_image3','$product_price',NOW(),'$product_status' )";
        $result_query = mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script>alert('Successfully inserted the product.')</script>";
        }
        
       }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin DashBoard</title>
    <!-- Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS FILE-->
    <link rel="stylesheet" href="../style.css">
</head>
<body class = "text-light"style="background-image:url('https://wallpaperaccess.com/full/3492868.gif');">
    <div class="container mt-3"> 
        <h1 class="text-center"style="font-family:'Trebuchet MS';">Insert Products</h1>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text"name="product_title"id="product_title"class="form-control" placeholder="Enter Product title"autocomplete="off"required/>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_desc" class="form-label">Product Description</label>
                <input type="text"name="product_desc"id="product_desc"class="form-control" placeholder="Enter Product description"autocomplete="off"required/>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product Keyword</label>
                <input type="text"name="product_keyword"id="product_keyword"class="form-control" placeholder="Enter Product Keyword"autocomplete="off"required/>
            </div>

            <!--Product Categories-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select Product Category</option>
                    <?php 
                        $select_query = "Select * from `categories`";
                        $result_query = mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!--Product Brands-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select">
                <option value="">Select Product Brand</option>
                <?php 
                        $select_query = "Select * from `brands`";
                        $result_query = mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $brand_title = $row['brand_title'];
                            $brand_id = $row['brand_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image-1</label>
                <input type="file"name="product_image1"id="product_image1"class="form-control"required/>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image-2</label>
                <input type="file"name="product_image2"id="product_image2"class="form-control"required/>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image-3</label>
                <input type="file"name="product_image3"id="product_image3"class="form-control"required/>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text"name="product_price"id="product_price"class="form-control" placeholder="Enter Product Price"autocomplete="off"required/>
            </div>
            <div class="form-outline mb-4 m-auto"style="display:flex;justify-content:center;">
                <input type="submit"name="insert_product"class="btn btn-primary"value="Insert Product"style="border-radius:15px;font-size:16px;font-family:'Trebuchet MS';color: white;">
            </div>
        </form>
    </div>
</body>
</html>
