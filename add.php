<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["TPO"])){
    header("Location:login.php");
}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Company details Search</title>
  <style>
  .bootstrap-tagsinput {
   width: 100%;
  }
  *{
    font-family: sans-serif;
   }

  select{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}
body{
   background-image: url(https://storage.googleapis.com/twg-content/images/MarketingResources_Thumbnail_Search.width-1200.jpg);
    background-size: cover;   
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin-top: 150px;
      
}
option{
    color:black;
    font-size: 18px;
    padding: 10px;
}
  </style>
 </head>
 <body>
 <?php include 'partials/_nav.php' ?>;
  <div class="container">
   <br />
   <br />
   <br />
   <h2 class="font-weight-bold" style="font-size: 50px; text-align: center;">Select Sub-Category</h2><br />
   <select  onchange=" la(this.value)">
<option value="">----Select Search Category---</option>
<option value ="state.php">State</option>
<option value ="city.php">City</option>
</select>
</div>
</body>
</html>
<script>
    function la(src)
    {
        window.location=src;
    }
    </script>