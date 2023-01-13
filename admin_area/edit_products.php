<div class="container mt-3">
    <h1 class="text-center text-light">
        Edit Products
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" required />
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" name="product_desc" id="product_desc" class="form-control" required />
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_keyword" class="form-label">Product Keywords</label>
            <input type="text" name="product_keyword" id="product_keyword" class="form-control" required />
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_category" class="form-label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="">3</option>
                <option value="">3</option>
                <option value="">3</option>
                <option value="">3</option>
                <option value="">3</option>
                <option value="">1</option>
            </select>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value="">3</option>
                <option value="">3</option>
                <option value="">3</option>
                <option value="">3</option>
                <option value="">3</option>
                <option value="">1</option>
            </select>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_img1" class="form-label">Product Image 1</label>
            <div class="d-flex ">
            <input type="file" name="product_img1" id="product_img1" class="form-control w-90 m-auto " required />
            <img src="../images/paytm.png" alt="product_image"class="product_img m-2">
            </div>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_img2" class="form-label">Product Image 2</label>
            <div class="d-flex ">
            <input type="file" name="product_img2" id="product_img2" class="form-control w-90 m-auto " required />
            <img src="../images/paytm.png" alt="product_image"class="product_img m-2">
            </div>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_img3" class="form-label">Product Image 3</label>
            <div class="d-flex ">
            <input type="file" name="product_img3" id="product_img3" class="form-control w-90 m-auto " required />
            <img src="../images/paytm.png" alt="product_image"class="product_img m-2">
            </div>
        </div>
        <div class="form-outline text-light w-50 m-auto mb-3">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" required />
        </div>
    </form>
</div>