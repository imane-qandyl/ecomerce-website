<?php
if(isset($_GET['d'])){
    include('../include/connect.php');
    $delete="DELETE FROM product WHERE product_id=".$_GET['id'];
    $veref=mysqli_query($con,$delete);
    echo"suprrimer";
}
$req="select * from product";
if(isset($_REQUEST["search"])){
  $req.=" WHERE title like ('% ".$_REQUEST["search"]."%') OR description like ('%".$_REQUEST["search"]."%')";
}
if(!isset($_REQUEST['search'])){
    $_REQUEST['search']="";
}
if(isset($_GET['p'])){
    $nump=$_GET['p'];
}
else{
    $nump=1;
}
$con=mysqli_connect('localhost','root','','Mystore');
$res=mysqli_query($con,$req);
if(mysqli_num_rows($res)){
  $rowspage=10;
  $total=mysqli_num_rows($res);
  $nbp=ceil($total/$rowspage);
  $from=(($nump-1)*$rowspage)+1;
  $req.="limit $from,$rowspage";
  $res=mysqli_query($con,$req);



?>

   <h3 class="text-center text-success">view products</h3>
    <table class="table table-bordered-mt-5">
        <thead class="bg-info">
            <tr>
                <th>product_id</th>
                <th>product title</th>
                <th>product image</th>
                <th>product price</th>
                <th>total sold</th>
                <th>status</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
$get_products="select * from product";
$result=mysqli_query($con,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$status=$row['status'];
$number++;
?>
<tr class='text-center'>
<td><?=$number?></td>
<td> <?=$product_title?></td>
<td><img src='../product_image/<?=$product_image1?>' class='product_img'></td>
<td><?=$product_price?></td>
<td>0</td>
<td><?=$status?></td>
<td><a href="index.php?edit_products=<?=$product_id?>" class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
<td><a href="index.php?view_products=1&d=1&id=<?=$row['product_id']?>"class='text-light'><i class='fa-solid fa-trash'></i></a></td>
</tr>
<?php
}}

            ?>
          

        </tbody>
    </table>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item"><a class="page-link" href="#">8</a></li>
    <li class="page-item"><a class="page-link" href="#">9</a></li>
    <li class="page-item"><a class="page-link" href="#">10</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
    <?php
for($p=1;$p<$nbp;$p++){
   ?> <li class="page-item"><a class="page-link" href="view_products.php?p=<?=$p?>&search=<?=$_REQUEST["search"]?>"><?=$p?></a></li>
<?php }?>
</ul>
</nav>
    
