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
   background-image: url(http://bestirtech.com/blog/saved-search-2/);
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
   <h2 class="font-weight-bold" style="font-size: 50px; text-align: center;">Search Company Details</h2><br />
  
<select  onchange=" la(this.value)">
<style>
      body{
        background-color: whitesmoke;
      }
      select{
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
      }
      </style>
<option value="">----Search From---</option>
<option value ="comp.php">Company Name</option>
<option value ="add.php">Address</option>
<option value ="ctc_ug.php">CTC_UG</option>
<option value ="ctc_pg.php">CTC_PG</option>
<option value ="stipend.php">Stipend</option>
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