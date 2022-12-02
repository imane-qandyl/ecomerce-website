<?php
include('../include/connect.php');

if(isset($_POST['insert_products'])){
$product_title=$_POST['product_title'];
$product_description=$_POST['product_description'];
$product_keywords=$_POST['product_keywords'];
$product_categories=$_POST['product_categories'];
$product_brands=$_POST['product_brands'];
$product_price=$_POST['product_price'];
$product_status='true';

$product_image1=$_FILES['product_image1']['name'];
$product_image2=$_FILES['product_image2']['name'];
$product_image3=$_FILES['product_image3']['name'];

$temp_image1=$_FILES['product_image1']['tmp_name'];
$temp_image2=$_FILES['product_image2']['tmp_name'];
$temp_image3=$_FILES['product_image3']['tmp_name'];

if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_categories=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' ){
echo "<script>alert('please fill all the available fields')</script>";
exit();
}
else{
    move_uploaded_file($temp_image1,"../product_image/$product_image1");
    move_uploaded_file($temp_image2,"../product_image/$product_image2");
    move_uploaded_file($temp_image3,"../product_image/$product_image3");

    $insert_products="insert into `product` (product_title,product_description,product_keywords,categorie_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) 
    values('$product_title','$product_description','$product_keywords','$product_categories','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
    $result_query=mysqli_query($con,$insert_products);
    if($result_query){
        echo "<script>alert('successfuly inserted the products')</script>";
    }
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert product</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-3"> Insert product </h1>
        <form action=""method="POST"enctype="multipart/form-data">
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_title" class="form-label">product title</label><input type="text"name="product_title" id="product_title"class="form-control"placeholder="enter product title"autocomplete="off"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_description" class="form-label">product description</label><input type="text"name="product_description" id="product_description"class="form-control"placeholder="enter description"autocomplete="off"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_keywords" class="form-label">product keywords</label><input type="text"name="product_keywords" id="product_keywords"class="form-control"placeholder="enterkeywords"autocomplete="off"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto"> 
   <select name="product_categories"class="form-select mt-3" id="" >
       <option value="">select a category</option>
       <?php
       $select_query="select * from `categories`";
       $result_query=mysqli_query($con,$select_query);
       while($row=mysqli_fetch_assoc($result_query)){
           $categorie_title=$row['categorie_title'];
           $categorie_id=$row['categorie_id'];
           echo"<option value='$categorie_id'>$categorie_title</option>";
       }
       ?>
      
    </select>
</div>
<div class="form-outline mb-4 w-50 m-auto"> 
<select name="product_brands" class="form-select mt-3" aria-label="Default select example">
       <option value="">select a brand</option>
       <?php
       $select_query="select * from `brands`";
       $result_query=mysqli_query($con,$select_query);
       while($row=mysqli_fetch_assoc($result_query)){
           $brand_title=$row['brand_title'];
           $brand_id=$row['brand_id'];
           echo"<option value='$brand_id'>$brand_title</option>";
       }
       ?>
    </select>
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image1" class="form-label">product image 1</label><input type="file"name="product_image1" id="product_image1"class="form-control"autocomplete="off"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image2" class="form-label">product image 2</label><input type="file"name="product_image2" id="product_image2"class="form-control"autocomplete="off"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image3" class="form-label">product image 3</label><input type="file"name="product_image3" id="product_image3"class="form-control"autocomplete="off"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_price" class="form-label">product price</label><input type="text"name="product_price" id="product_price"class="form-control"autocomplete="off"placeholder="enter product price"required="required">
</div>
<div class="form-outline mb-4 w-50 m-auto">
  <input type="submit"name="insert_products"class="btn btn-info mt-3 px-3" value="insert products">
</div>
        </form>
    </div>
</body>
</html>