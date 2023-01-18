<?php 
if(isset($_GET['edit_products'])){
    $edit_id = $_GET['edit_products'];
    $get_data = "Select * from `products` where product_id = $edit_id";
    $result = mysqli_query($con,$get_data);
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    $product_desc = $row['product_desc'];
    $product_keyword = $row['product_keyword'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
    // $status = $row['status'];
    //fetching category name
    $select_category = "Select * from `categories` where category_id = $category_id";
    $result_category = mysqli_query($con,$select_category);
    $row_category = mysqli_fetch_assoc($result_category);
    $category_title = $row_category['category_title'];

     //fetching brands name
     $select_brand = "Select * from `brands` where brand_id = $brand_id";
     $result_brand = mysqli_query($con,$select_brand);
     $row_brand = mysqli_fetch_assoc($result_brand);
     $brand_title = $row_brand['brand_title'];
    
}
?>

<div class="container mt-3">
    <h1 class="text-center text-light">
        Edit Products
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" value ="<?php echo $product_title ?>" id="product_title" class="form-control" required />
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" name="product_desc"value ="<?php echo $product_desc ?>" id="product_desc" class="form-control" required />
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_keyword" class="form-label">Product Keywords</label>
            <input type="text" name="product_keyword" value ="<?php echo $product_keyword ?>"id="product_keyword" class="form-control" required />
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_category" class="form-label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title ?>"><?php echo $category_title ?></option>
                <?php 
                    $select_category_all = "Select * from `categories` ";
                    $result_category_all = mysqli_query($con,$select_category_all);
                    while($row_category_all = mysqli_fetch_assoc($result_category_all)){
                        $category_title = $row_category_all['category_title'];
                        $category_id = $row_category_all['category_id'];
                        echo"<option value='$category_id'>$category_title</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value="<?php echo $brand_title ?>"><?php echo $brand_title ?></option>
                <?php 
                    $select_brand_all = "Select * from `brands` ";
                    $result_brand_all = mysqli_query($con,$select_brand_all);
                    while($row_brand_all = mysqli_fetch_assoc($result_brand_all)){
                        $brand_title = $row_brand_all['brand_title'];
                        $brand_id = $row_brand_all['brand_id'];
                        echo"<option value='$brand_id'>$brand_title</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_img1" class="form-label">Product Image 1</label>
            <div class="d-flex ">
            <input type="file" name="product_img1" id="product_img1" class="form-control w-90 m-auto " required />
            <img src="../images/product_images/<?php echo $product_image1 ?>" alt="product_image"class="product_img m-2">
            </div>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_img2" class="form-label">Product Image 2</label>
            <div class="d-flex ">
            <input type="file" name="product_img2" id="product_img2" class="form-control w-90 m-auto " required />
            <img src="../images/product_images/<?php echo $product_image2 ?>" alt="product_image"class="product_img m-2">
            </div>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_img3" class="form-label">Product Image 3</label>
            <div class="d-flex ">
            <input type="file" name="product_img3" id="product_img3" class="form-control w-90 m-auto " required />
            <img src="../images/product_images/<?php echo $product_image3 ?>" alt="product_image"class="product_img m-2">
            </div>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price"value="<?php echo $product_price ?>" class="form-control" required />
        </div>
        <div class="text-center">
            <input type="submit" name="edit_product" id="edit_product" class="btn btn-dark text-light m-auto" value="Update Product" required />
        </div>
    </form>
</div>
