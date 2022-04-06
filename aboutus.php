<?php

$con= new mysqli('localhost', 'root', '', 'PCELL');
if(!$con){
    die(mysqli_error($con));

}
session_start();
if(!isset($_SESSION["TPO"])){
    header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/1a705ea4f1.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
  </head>
  
  <body>
  <?php include 'partials/_nav.php' ?>
      
      <div class="container">
      <div class="nav">
        <div class="logo">your logo</div>
        <div>
    <span>Product</span>
    <span class="active">About Us</span>
    <span>Contact Us</span>
</div></div>
<div class="about-us">
  <div class="who-we-are">
    <h3>who we are</h3>
    <span>orem ipsum is simply dummy text of the</span>
</div>
<div class="cards">
  <div class="card">
    <div class="card-img card-img1"></div>
    <card class="card-body">
    <h3>havy Ruiz</h3>
    <span>web developer</span>
    <p>orem ip is simply dummy text</p></card>
</div></div>
<div class="card">
    <div class="card-img card-img2"></div>
    <card class="card-body">
    <h3>havy Ruiz</h3>
    <span>web developer</span>
    <p>orem ip is simply dummy text</p></card>
</div></div>
<div class="card">
    <div class="card-img card-img3"></div>
    <card class="card-body">
    <h3>havy Ruiz</h3>
    <span>web developer</span>
    <p>orem ip is simply dummy text</p></card>
</div></div>
<div class="card">
    <div class="card-img card-img4"></div>
    <card class="card-body">
    <h3>havy Ruiz</h3>
    <span>web developer</span>
    <p>orem ip is simply dummy text</p></card>
</div></div>
</div>
</div></div>
 

  </body>
</html>
</body>
</html>