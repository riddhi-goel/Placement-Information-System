<?php

$con= new mysqli('localhost', 'root', '', 'PCELL');
if(!$con){
    die(mysqli_error($con));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <body>
    
    <?php include 'partials/_nav.php' ?>
    
    <div class="container">
        <h1 class="text-center"> </h1>
    
    </div>
        
    
  </body>
</html>
</body>
</html>
