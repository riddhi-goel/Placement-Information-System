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
<option value="">----Search For---</option>
<option value ="address.php">Address</option>
<option value ="ctc_u.php">CTC_UG</option>
<option value ="ctc_p.php">CTC_PG</option>
<option value ="sti.php">Stipend</option>
<option value ="Tmi.php">Two Month Internship(TMI)</option>
<option value ="Smi.php">Six Month Internship(SMI)</option>
<option value ="fte.php">Full Time Employment(FTE)</option>
<option value ="Entire.php">Entire Detail of Company</option>
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