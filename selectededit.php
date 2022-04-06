<?php
include 'connect.php';
$UID=$_GET["editcompanyuid"]; 
$sql= "SELECT * FROM `SELECTED_STUDENTS` WHERE `UID`= '$UID'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$UID=$row['UID'];
$CNAME=$row['CNAME'];
$COURSENAME=$row['COURSENAME'];
$FULLTIMEEMP=$row['FULLTIMEEMP'];
$SIXMI=$row['SIXMI'];
$PPO_FTE=$row['PPO_FTE'];
$PPO_SMI=$row['PPO_SMI'];


if(isset($_POST['submit'])){
  $UID=$_POST['UID'];
  $CNAME=$_POST['CNAME'];
  $COURSENAME=$_POST['COURSENAME'];
  $FULLTIMEEMP=$_POST['FULLTIMEEMP'];
  $SIXMI=$_POST['SIXMI'];
  $PPO_FTE=$_POST['PPO_FTE'];
  $PPO_SMI=$_POST['PPO_SMI'];  
  $sql = "UPDATE `selected_students` SET `UID`='$UID',`CNAME`= '$CNAME', `COURSENAME`='$COURSENAME', `FULLTIMEEMP`= '$FULLTIMEEMP', `SIXMI`= '$SIXMI', `PPO_FTE`='$PPO_FTE', `PPO_SMI`='$PPO_SMI' WHERE `UID`= '$UID'";
  $result = mysqli_query($con,$sql);
  if($result){
      //echo "Data UPDATED Successfuly";
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
  <h1 style="text-align: center;">Edit Details of Selected Students</h1>
    <div class= " container my-5">
    <form method = "post">
<div class="form-group">
    <label >Unique ID</label>
    <input type="number" class="form-control" placeholder="Enter Unique ID" name="UID" autocomplete="off" value=<?php echo "'$CNAME'"; ?>>
</div>

<div class="form-group">
    <label >Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="CNAME" autocomplete="off" value=<?php echo "'$CNAME'"; ?>>
</div>
<div class="form-group">
    <label >Course Name</label>
    <input type="text" class="form-control" placeholder="Enter Course Name" name="COURSENAME" autocomplete="off" value=<?php echo "'$COURSENAME'"; ?>>
</div>
<div class="form-group">
    <label >Full Time Employee</label>
    <input type="number" class="form-control" placeholder="Enter Full Time Employee" name="FULLTIMEEMP" autocomplete="off" value=<?php echo $FULLTIMEEMP; ?>>
</div>
<div class="form-group">
    <label >Six Months Internship</label>
    <input type="number" class="form-control" placeholder="Enter Six Month Internship" name="SIXMI" value=<?php echo $SIXMI; ?>>
</div>
<div class="form-group">
    <label >PPO Full Time</label>
    <input type="number" class="form-control" placeholder="Enter PPO Full Time" name="PPO_FTE" value=<?php echo $PPO_FTE; ?>>
</div>
<div class="form-group">
    <label >PPO Six Months Internship</label>
    <input type="number" class="form-control" placeholder="Enter PPO Six Month Internship" name="PPO_SMI" autocomplete="off" value=<?php echo $PPO_SMI; ?>>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Edit</button>
</form>
   </div>


   
  </body>
</html>