<?php
if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    // echo $edit_id;
    $get_data="select * from product where product_id=$edit_id";
    echo $get_data;
    $result=mysqli_query($con,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    echo $product_title;
    $product_description=$row['product_description'];
    $product_keywords=$row['product_keywords'];
    $categorie_id=$row['categorie_id'];
    $brand_id=$row['brand_id'];
    $product_image1=$row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];
    $product_price =$row['product_price'];

    $select_categorie="select * from categories where categorie_id=$categorie_id";
    $result_categorie=mysqli_query($con,$select_categorie);
    $row_categorie=mysqli_fetch_assoc($result_categorie);
    $categorie_title=$row_categorie['categorie_title'];
    //echo $categorie_title;

    $select_brand="select * from brands where brand_id=$brand_id";
    $result_brand=mysqli_query($con,$select_brand);
    $row_brand=mysqli_fetch_assoc($result_brand);
    $brand_title=$row_brand['brand_title'];
   // echo $brand_title;

}
?>

<div class="container mt-5">
    <h1 class="text-center">Edit product</h1>
    <form action=""method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" id="product_title"value="<?php echo $product_title?>" name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" id="product_description"value="<?php echo $product_description?>" name="product_description" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product keywords</label>
            <input type="text" id="product_keywords"value="<?php echo $product_keywords?>"name="product_keywords" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto">
            <label for="product_categorie" class="form-label">Product Categories</label>
            <select name="product_categorie" id="form-select">
                <option value="<?php echo $categorie_title?>"><?php echo $categorie_title?></option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
       
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" id="form-select">
                <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
       
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product image1</label>
            <div class="d-flex">
            <input type="file" id="product_image1"name="product_image1" class="form-control w-90 m-auto" required="required">
            <img src="../product_image/<?php echo $product_image1?>" alt="" class="product_img">
      
        </div> </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product image2</label>
            <div class="d-flex">
            <input type="file" id="product_image2"name="product_image2" class="form-control w-90 m-auto" required="required">
            <img src="../product_image/<?php echo $product_image2?>" alt="" class="product_img">
      
        </div> </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">Product image3</label>
            <div class="d-flex">
            <input type="file" id="product_image3"name="product_image3" class="form-control w-90 m-auto" required="required">
            <img src="../product_image/<?php echo $product_image3?>" alt="" class="product_img">
      
        </div> </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price"class="form-label">Product Price</label>
            <input type="text" id="product_price"value="<?php echo $product_price?>" name="product_price" class="form-control" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_product" value="update product"class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>