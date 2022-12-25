<?php
if(isset($_GET['d'])){
    include('../include/connect.php');
    $delete="DELETE FROM product WHERE product_id=".$_GET['id'];
    $veref=mysqli_query($con,$delete);
    echo"suprrimer";
}
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
}
            ?>
          

        </tbody>
    </table>
