<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $UID=$_POST['UID'];
  $CNAME=$_POST['CNAME'];
  $COURSENAME=$_POST['COURSENAME'];
  $FULLTIMEEMP=$_POST['FULLTIMEEMP'];
  $SIXMI=$_POST['SIXMI'];
  $PPO_FTE=$_POST['PPO_FTE'];
  $PPO_SMI=$_POST['PPO_SMI'];  
  $sql = "INSERT INTO `selected_students` (`UID`,`CNAME`,`COURSENAME`,`FULLTIMEEMP`,`SIXMI`,`PPO_FTE`,`PPO_SMI`) VALUES ('$UID','$CNAME', '$COURSENAME', '$FULLTIMEEMP', '$SIXMI', '$PPO_FTE', '$PPO_SMI')";
  $result = mysqli_query($con,$sql);
  if($result){
      //echo "Data Inserted Successfuly";
     header('location:selecteddisplay.php');
     } else{
     die(mysqli_error($con));
      }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>Placement Information System</title>
  </head>
  <body>
  <h1 style="text-align: center;">Enter Details of Selected Students</h1>
    <div class= " container my-5">
    <form method = "post">
    
<div class="form-group">
    <label >Unique Id</label>
    <input type="number" class="form-control" placeholder="Enter Unique ID" name="UID" autocomplete="off">
</div> 
<div class="form-group">
    <label >Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="CNAME" autocomplete="off">
</div>
<div class="form-group">
    <label >Course Name</label>
    <input type="text" class="form-control" placeholder="Enter Course Name" name="COURSENAME" autocomplete="off">
</div>
<div class="form-group">
    <label >Full Time Employement</label>
    <input type="number" class="form-control" placeholder="Enter Full Time Employement" name="FULLTIMEEMP" autocomplete="off">
</div>
<div class="form-group">
    <label >SIXMI</label>
    <input type="number" class="form-control" placeholder="Enter Six Month Internship" name="SIXMI" >
</div>
<div class="form-group">
    <label >PPO_FTE</label>
    <input type="number" class="form-control" placeholder="Enter PPO Full Time " name="PPO_FTE">
</div>
<div class="form-group">
    <label >PPO_SMI</label>
    <input type="number" class="form-control" placeholder="Enter PPO Six Month Internship" name="PPO_SMI" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>


   
  </body>
</html>