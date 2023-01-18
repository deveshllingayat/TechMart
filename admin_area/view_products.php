<h3 class="text-center text-light">All Products</h3>
<table class="table  mt-4 text-center text-light  justify-content-center">
    <thead class="bg-dark">
        <tr>
        <th>Product ID</th>
        <th>Product Title</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-light text-dark "style="vertical-align:middle;">
        <?php 
        $get_products = "Select * from `products`";
        $result = mysqli_query($con,$get_products);
        
        while($row = mysqli_fetch_assoc($result)){
            $product_id = $row['product_id'];
            $product_title= $row['product_title'];
            $product_image = $row['product_image1'];
            $product_price = $row['product_price'];
            $status = $row['status'];
            ?>
            <tr>
            <td><?php echo $product_id ?></td>
            <td><?php echo $product_title ?></td>
            <td><img src='../images/product_images/<?php echo $product_image ?>'class='product_img'></td>
            <td><?php echo $product_price ?></td>
            <td><?php echo $status ?></td>
            <td><a href='index.php?edit_products=<?php echo $product_id ?>'class='text-dark'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href=''class='text-dark'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
        <?php
        }
        ?>
        
    </tbody>
</table>