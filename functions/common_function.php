<?php

$con=mysqli_connect('localhost','root','','Mystore');
if($con){
    echo"connection successful";
}


function getproducts(){
    global $con;
$select_query="select * from product order by rand()";
$result_query=mysqli_query($con,$select_query);
// $row=mysqli_fetch_assoc($result_query);
// echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_tite=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$categorie_id=$row['categorie_id'];
$brand_id=$row['brand_id'];
echo " <div class='col-md-4 mb-2'>
<div class='card'>
      <img src='./product_image/$product_image1' class='card-img-top' alt='$product_tite'>
      <div class='card-body'>
        <h5 class='card-title'>$product_tite</h5>
        <p class='card-text'>$product_description.</p>
        <a href='#' class='btn btn-info'>add to card</a>
        <a href='#' class='btn btn-secondary'>view more</a>
      </div>
</div>
  </div>";

}}
function getbrands(){
    global $con;
    $select_brands="select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);
    while($row_data=mysqli_fetch_assoc($result_brands)){
    $brand_title=$row_data['brand_title'];
    $brand_id=$row_data['brand_id'];
    echo  "  <li class='nav-item '>
    <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
       </li>";
    }
   
}
function getcategories(){
    global $con;
    $select_categories="select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    while($row_data=mysqli_fetch_assoc($result_categories)){
    $categorie_title=$row_data['categorie_title'];
    $categorie_id=$row_data['categorie_id'];
    echo  "  <li class='nav-item '>
    <a href='index.php?brand=$categorie_id' class='nav-link text-light'>$categorie_title</a>
       </li>";
    }
   
}
?>