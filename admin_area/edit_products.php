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
                <?php  $select_categorie_all="select * from categories ";
                $result_categorie_all=mysqli_query($con,$select_categorie_all);
                while($row_categorie_all=mysqli_fetch_assoc($result_categorie_all)){
                    $categorie_title=$row_categorie_all['categorie_title'];
                    $categorie_id=$row_categorie_all['categorie_id'];
                    echo "<option value=' $categorie_id'>$categorie_title</option>";
                };
               ?>
            </select>
       
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" id="form-select">
                <option value="<?php echo $brand_title?>"><?php echo $brand_title?></option>
               <?php  $select_brand_all="select * from brands ";
                $result_brand_all=mysqli_query($con,$select_brand_all);
                while($row_brand_all=mysqli_fetch_assoc($result_brand_all)){
                    $brand_title=$row_brand_all['brand_title'];
                    $brand_id=$row_brand_all['brand_id'];
                    echo "<option value=' $brand_id'>$brand_title</option>";
                };
               ?>
                
            </select>
       
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product image1</label>
            <div class="d-flex">
            <input type="file" id="product_image1"name="product_image1" class="form-control w-90 m-auto" ><!--required="required"-->
            <img src="../product_image/<?php echo $product_image1?>" alt="" class="product_img">
      
        </div> </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product image2</label>
            <div class="d-flex">
            <input type="file" id="product_image2"name="product_image2" class="form-control w-90 m-auto"> <!--required="required"-->
            <img src="../product_image/<?php echo $product_image2?>" alt="" class="product_img">
      
        </div> </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">Product image3</label>
            <div class="d-flex">
            <input type="file" id="product_image3"name="product_image3" class="form-control w-90 m-auto" ><!--required="required"-->
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
<!--editing product -->
<?php
if(isset($_POST['edit_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_categorie=$_POST['product_categorie'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];

    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];


    if($product_title==''or $product_description==''or $product_keywords==''or $product_categorie==''or $product_brands==''or $product_price==''or $product_image1==''or $product_image2==''or $product_image3==''){
        echo "<script>alert('please fill all the fileds')</script>";
    }
    else{
        move_uploaded_file($temp_image1,"../product_image/$product_image1");
        move_uploaded_file($temp_image2,"../product_image/$product_image2");
        move_uploaded_file($temp_image3,"../product_image/$product_image3");
        //update products
        $update_product="UPDATE product set product_title='$product_title', product_description=' $product_description',
        product_keywords='$product_keywords',categorie_id='$product_categorie',brand_id='$product_brands',
        product_image1='$product_image1',product_image2='$product_image2',product_image3='$product_image3',product_price=$product_price,date=NOW() where product_id=$edit_id";
        $result_update=mysqli_query($con,$update_product);
        if($result_update){
            echo "<script>alert('updated successfuly')</script>";
            echo "<script>window.open('./insert_product.php')</script>";
        }
    }
    

}
?>