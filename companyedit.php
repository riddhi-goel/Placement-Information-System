<?php
include 'connect.php';
$CNAME=$_GET['editcompanyname'];
$sql= "SELECT * FROM `COMPANY` WHERE `CNAME`= '$CNAME'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$CNAME=$row['CNAME'];
$CNAME_ABB=$row['CNAME_ABB'];
$ADDRESS=$row['ADDRESS'];
$CITY=$row['CITY'];
$STATE=$row['STATE'];
$PINCODE=$row['PINCODE'];
$FTE=$row['FTE'];
$TMI=$row['TMI'];
$SMI=$row['SMI'];
$CTC_UG=$row['CTC_UG'];
$CTC_PG=$row['CTC_PG'];
$STIPEND=$row['STIPEND'];

if(isset($_POST['submit'])){

  $CNAME=$_POST['CNAME'];
  $CNAME_ABB=$_POST['CNAME_ABB'];
  $ADDRESS=$_POST['ADDRESS'];
  $CITY=$_POST['CITY'];
  $STATE=$_POST['STATE'];
  $PINCODE=$_POST['PINCODE'];
  $FTE=$_POST['FTE'];
  $TMI=$_POST['TMI'];
  $SMI=$_POST['SMI'];
  $CTC_UG=$_POST['CTC_UG'];
  $CTC_PG=$_POST['CTC_PG'];
  $STIPEND=$_POST['STIPEND'];  
  $sql = "UPDATE `company` SET `CNAME`= '$CNAME', `CNAME_ABB`='$CNAME_ABB', `ADDRESS`= '$ADDRESS', `CITY`= '$CITY', `STATE`='$STATE', `PINCODE`='$PINCODE', `FTE`='$FTE', `TMI`='$TMI', `SMI`='$SMI', `CTC_UG`='$CTC_UG', `CTC_PG`='$CTC_PG', `STIPEND`='$STIPEND' WHERE `CNAME`='$CNAME'";
  $result = mysqli_query($con,$sql);
  if($result){
      //echo "Data UPDATED Successfuly";
      header('location:companydisplay.php');
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
  <h1 style="text-align: center;">Edit Details of New Company</h1>
    <div class= " container my-5">
    <form method = "post">
  
<div class="form-group">
    <label >Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="CNAME" autocomplete="off" value=<?php echo "'$CNAME'"; ?>>
</div>
<div class="form-group">
    <label >Company Abbreviation</label>
    <input type="text" class="form-control" placeholder="Enter Company Abbreviation" name="CNAME_ABB" autocomplete="off" value=<?php echo "'$CNAME_ABB'"; ?>>
</div>
<div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" placeholder="Enter Address" name="ADDRESS" autocomplete="off" value=<?php echo "'$ADDRESS'"; ?>>
</div>
<div class="form-group">
    <label >City</label>
    <input type="text" class="form-control" placeholder="Enter City" name="CITY" value=<?php echo "'$CITY'"; ?>>
</div>
<div class="form-group">
    <label >State</label>
    <input type="text" class="form-control" placeholder="Enter State" name="STATE" value=<?php echo "'$STATE'"; ?>>
</div>
<div class="form-group">
    <label >Pincode</label>
    <input type="number" class="form-control" placeholder="Enter Pincode" name="PINCODE" autocomplete="off" value=<?php echo $PINCODE; ?>>
</div>
<div class="form-group">
    <label >Do company provide Full Time Employement (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (YES/NO)" name="FTE" value=<?php echo $FTE; ?>>
</div> 
<div class="form-group">
    <label >Do company provide Two Month Internship</label>
    <input type="text" class="form-control" placeholder="Enter (YES/NO)" name="TMI" value=<?php echo $TMI; ?>>
</div> 
<div class="form-group">
    <label >Do company provide Six Month Internship (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (YES/NO)" name="SMI" value=<?php echo $SMI; ?>>
</div> 
<div class="form-group">
    <label >CTC For Undergraduate</label>
    <input type="number" class="form-control" placeholder="Enter CTC For Undergraduate" name="CTC_UG" autocomplete="off" value=<?php echo $CTC_UG; ?>>
</div> 
<div class="form-group">
    <label >CTC For Postgraduate</label>
    <input type="number" class="form-control" placeholder="Enter CTC For Postgraduate" name="CTC_PG" autocomplete="off" value=<?php echo $CTC_PG; ?>>
</div>
<div class="form-group">
    <label >Stipend</label>
    <input type="number" class="form-control" placeholder="Enter Stipend" name="STIPEND" autocomplete="off" value=<?php echo $STIPEND; ?>>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Edit</button>
</form>
   </div>

    
  </body>
</html>