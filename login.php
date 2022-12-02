<?php
if(isset($_POST['login'])){
    
if($_POST['login']=="admin"&& $_POST['motdepasse']=="123"){
    session_name("login");
    session_start();
    $_SESSION['var']="true";
    header("location:admin_area/index.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
    <div class="login-div">
        <div class="logo"></div>
        <div class="title">welcome in your application</div>
        <div class="sub-title">home easy</div>
        <div class="field">
<form action="" method="POST">
    
    <input type="text" name="login" class="username" placeholder="login;"><br><br>
    
    <input type="text" name="motdepasse"class="password"placeholder="password:"><br><br></div>
   <input type="submit" class="submit" value="submit"name="submit">
<input type="submit"class="logout"value="logout" name="logout">
</form>
<div class="link">
<a href="#">forgot password</a> or <a href="#">sign up</a>
</div></div>
</body>
</html>