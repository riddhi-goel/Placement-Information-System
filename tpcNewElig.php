<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["TPC"])){
    header("Location:login.php");
}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Eligible Students details Search</title>
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
 <?php include 'partials/tpcnav.php' ?>;
  <div class="container">
   <br />
   <br />
   <br />
   <h2 class="font-weight-bold" style="font-size: 50px; text-align: center;">Search Eligible_Student Data</h2><br />
  
<select  onchange=" la(this.value)">
<option value="">----Search For---</option>
<option value ="EligibleCourses.php">Eligible Courses</option>
<option value ="Total_ES.php">Total Eligible Students</option>
<option value ="Test_Date.php">Test Date</option>
<option value ="Int_S_E_Date.php">Interview Start and End Date</option>
<option value ="Result_Date.php">Result Date</option>
<option value ="GD.php">Group Discussion</option>
<option value ="AP_SS.php">Appeared for Written Test And Shortlisted Students for Interview</option>
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
