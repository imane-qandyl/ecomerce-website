<?php
include('../include/connect.php');
include('../functions/common_function.php');
session_name('login');
session_start();
if(!isset($_SESSION['var'])){
    header("location:../login.php");}
    if(isset($_POST['logout'])){
            unset($_SESSION['var']);
        }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
    
    <style>
        .admin_image{
    width: 100px;
    object-fit: contain;
}
.product_img{
    width: 20%;
    object-fit:contain;
}
    </style>
    
</head>
<body>
  <div class="container-fluid p-0 ">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="container-fluid">
              <img src="../img/logo.png" alt="" class="logo">
              <nav class="navbar navbar-expand-lg ">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href=""class="nav-link">welome guest</a>
                    </li>
                  </ul>
</nav>
          </div>
      </nav>
      <div class="bg-light">
          <h3 class="text-center p-2">Manage details</h3>
      </div>
      <div class="row">
          <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
              <div class="px-5">
                  <a href="#">
                      <img src="../img/product/product-12.jpg" alt="" class="admin_image">
                  </a>
                  <p class="text-light text-center">Admin name</p>
              </div>
              <div class="button text-center">
                  <button classe="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">insert product</a></button>
                  <button classe="my-3"><a href="index.php?view_products" class="nav-link text-light bg-info my-1">view product</a></button>
                  <button classe="my-3"><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">insert categories</a></button>
                  <button classe="my-3"><a href="" class="nav-link text-light bg-info my-1">view categories</a></button>
                  <button classe="my-3"><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">insert brands</a></button>
                  <button classe="my-3"><a href="" class="nav-link text-light bg-info my-1">view brands</a></button>
                  <button classe="my-3"><a href="" class="nav-link text-light bg-info my-1">all oders</a></button>
                  <button classe="my-3"><a href="" class="nav-link text-light bg-info my-1">all payments</a></button>
                  <button classe="my-3"><a href="index.php?list_user" class="nav-link text-light bg-info my-1">list users</a></button>
                  <button classe="my-3"><a href="" class="nav-link text-light bg-info my-1">logout</a></button>
              </div>

          </div>
      </div>
      <div class="container my-3">
          <?php
          if(isset($_GET['insert_categories'])){
              include('insert_categories.php');
          }
          if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }
        if(isset($_GET['list_user'])){
            include('list_user.php');
        }
        if(isset($_GET['view_products'])){
            include('view_products.php');
        }
?>
      </div>
  </div>

<script src="bootstrap/bootstrap-4.0.0-dist/js/bootstrap.bundle.js"integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>