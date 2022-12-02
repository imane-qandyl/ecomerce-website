<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list_user</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-light">
<div class="container">
        <h1 class="text-center mt-3"> list user </h1>
        <div class="row">
            <div class="col-sm">
<table class="table mt-5 table-dark  table-bordered table-striped table-hover "><!--striped-bordered-->
    <thead>
    <tr>
        <td>product title</td>
        <td>product description</td>
        <td>product keywords</td>
        <td>product category</td>
        <td>product brand</td>
        <td>product image</td>
        <td>product price</td></tr>
        <tbody>
       <?php
            for($i=0;$i<=10;$i++){

          ?>
            <tr>
              <td> <?php $i ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php }?>
        </tbody>
    </thead></table>
    </div></div></div>

</body>
</html>