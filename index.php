<?php
include('./include/connect.php');
include('./functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-info ">
            <div class="container-fluid">
              <img src="img/logo.png" alt="">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">welcome guest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="login.php">login</a>
                  </li>
            </ul>
          </nav>
<div class="bg-light">
    <h3 class="text-center">hidden store</h3>
    <p class="text-center">communication is at the heart of e-commerce and community</p>
</div>
<div class="row">
    <div class="col-md-10">
<div class="row">
  <?php
//   $select_query="select * from product order by rand()";
//   $result_query=mysqli_query($con,$select_query);
//   // $row=mysqli_fetch_assoc($result_query);
//   // echo $row['product_title'];
// while($row=mysqli_fetch_assoc($result_query)){
// $product_id=$row['product_id'];
// $product_tite=$row['product_title'];
// $product_description=$row['product_description'];
// $product_image1=$row['product_image1'];
// $product_price=$row['product_price'];
// $categorie_id=$row['categorie_id'];
// $brand_id=$row['brand_id'];
// echo " <div class='col-md-4 mb-2'>
// <div class='card'>
//         <img src='./product_image/$product_image1' class='card-img-top' alt='$product_tite'>
//         <div class='card-body'>
//           <h5 class='card-title'>$product_tite</h5>
//           <p class='card-text'>$product_description.</p>
//           <a href='#' class='btn btn-info'>add to card</a>
//           <a href='#' class='btn btn-secondary'>view more</a>
//         </div>
//   </div>
//     </div>";

//   }

       getproducts();
  ?>
   

            <!-- <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/product/product-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info">add to card</a>
                      <a href="#" class="btn btn-secondary">view more</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/product/product-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info">add to card</a>
                      <a href="#" class="btn btn-secondary">view more</a>
                    </div>
                  </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
                <img src="img/product/product-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">add to card</a>
                  <a href="#" class="btn btn-secondary">view more</a>
                </div>
              </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <img src="img/product/product-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">add to card</a>
                  <a href="#" class="btn btn-secondary">view more</a>
                </div>
              </div>
        
        
    </div>
    <div class="col-md-4 mb-2">
        <div class="card">
            <img src="img/product/product-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">add to card</a>
              <a href="#" class="btn btn-secondary">view more</a>
            </div>
          </div></div> -->
</div></div>
    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
       <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>
    </li>
    <?php
    // $select_brands="select * from `brands`";
    // $result_brands=mysqli_query($con,$select_brands);
    // while($row_data=mysqli_fetch_assoc($result_brands)){
    // $brand_title=$row_data['brand_title'];
    // $brand_id=$row_data['brand_id'];
    // echo  "  <li class='nav-item '>
    // <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
    //    </li>";
    // }
    getbrands();
    ?>
   </ul>
    <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
       <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    
    <?php
    //les categorie li f database kyjiw l index.php
    // $select_categories="select * from `categories`";
    // $result_categories=mysqli_query($con,$select_categories);
    // while($row_data=mysqli_fetch_assoc($result_categories)){
    // $categorie_title=$row_data['categorie_title'];
    // $categorie_id=$row_data['categorie_id'];
    // echo  "  <li class='nav-item '>
    // <a href='index.php?brand=$categorie_id' class='nav-link text-light'>$categorie_title</a>
    //    </li>";
    // }
    getcategories();
    ?>
   </ul>

    </div>
</div>
    </div>
<div class="bg-info p-3 text-center">
    <p>all rights reseved designed by house-design</p>
</div>
    <script src="bootstrap/bootstrap-4.0.0-dist/js/bootstrap.bundle.js"integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>