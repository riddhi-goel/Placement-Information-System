<?php
error_reporting(0) ;
include 'connect.php';
$CNAME=$_GET['editcompanyname'];
$sql= "SELECT * FROM `ELIGIBLE_STUDENTS` WHERE `CNAME`= '$CNAME'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
  
  $CNAME=$row['CNAME'];
  $BTECH_CS=$row['BTECH_CS'];
  $BTECH_IT=$row['BTECH_IT'];
  $BTECH_EC=$row['BTECH_EC'];                                        
  $BTECH_EE=$row['BTECH_EE'];
  $BTECH_EI=$row['BTECH_EI'];
  $BTECH_MT=$row['BTECH_MT'];
  $BTECH_BT=$row['BTECH_BT'];
  $BTECH_CE=$row['BTECH_CE'];
  $MCA=$row['MCA'];
  $MSC_CS=$row['MSC_CS'];
  $MTECH_CS=$row['MTECH_CS'];
  $MTECH_IT=$row['MTECH_IT'];
  $MTECH_VLSI=$row['MTECH_VLSI'];
  $MTECH_RS=$row['MTECH_RS'];
  $TOTAL_ES=$row['TOTAL_ES'];
  $Test_Date=$row['Test_Date'];
  $Interview_S_Date=$row['Interview_S_Date'];
  $Interview_E_Date=$row['Interview_E_Date'];
  $Result_Date=$row['Result_Date'];
  $Ap_WrittenTest=$row['Ap_WrittenTest'];
  $GD=$row['GD'];  
  $SS_INTERVIEW=$row['SS_INTERVIEW'];


if(isset($_POST['submit'])){ 
   
    $CNAME=$_POST['CNAME'];
    $BTECH_CS=$_POST['BTECH_CS'];
    $BTECH_IT=$_POST['BTECH_IT'];
    $BTECH_EC=$_POST['BTECH_EC'];
    $BTECH_EE=$_POST['BTECH_EE'];
    $BTECH_EI=$_POST['BTECH_EI'];
    $BTECH_MT=$_POST['BTECH_MT'];
    $BTECH_BT=$_POST['BTECH_BT'];
    $BTECH_CE=$_POST['BTECH_CE'];
    $MCA=$_POST['MCA'];
    $MSC_CS=$_POST['MSC_CS'];
    $MTECH_CS=$_POST['MTECH_CS'];
    $MTECH_IT=$_POST['MTECH_IT'];
    $MTECH_VLSI=$_POST['MTECH_VLSI'];
    $MTECH_RS=$_POST['MTECH_RS'];
    $TOTAL_ES=$_POST['TOTAL_ES'];
    $Test_Date=$_POST['Test_Date'];
    $Interview_S_Date=$_POST['Interview_S_Date'];
    $Interview_E_Date=$_POST['Interview_E_Date'];
    $Result_Date=$_POST['Result_Date'];
    $Ap_WrittenTest=$_POST['Ap_WrittenTest'];
    $GD=$_POST['GD'];  
    $SS_INTERVIEW=$_POST['SS_INTERVIEW'];
  
  $sql = "UPDATE `ELIGIBLE_STUDENTS` SET  `CNAME`= '$CNAME', `BTECH_CS`= '$BTECH_CS',`BTECH_IT`= '$BTECH_IT',`BTECH_EC`= '$BTECH_EC',`BTECH_EE`= '$BTECH_EE',`BTECH_EI`= '$BTECH_EI',`BTECH_MT`= '$BTECH_MT',`BTECH_BT`= '$BTECH_BT',`BTECH_CE`= '$BTECH_CE',`MCA`= '$MCA',`MSC_CS`= '$MSC_CS',`MTECH_CS`= '$MTECH_CS',`MTECH_IT`= '$MTECH_IT',`MTECH_VLSI`= '$MTECH_VLSI',`MTECH_RS`= '$MTECH_RS',`TOTAL_ES`='$TOTAL_ES',`Test_Date`= '$Test_Date',`Interview_S_Date`= '$Interview_S_Date',`Interview_E_Date`= '$Interview_E_Date',`Result_Date`= '$Result_Date',`Ap_WrittenTest`= '$Ap_WrittenTest',`GD`= '$GD',`SS_INTERVIEW`= '$SS_INTERVIEW' WHERE `CNAME`='$CNAME'";
  $result = mysqli_query($con,$sql);
  if($result){
      //echo "Data UPDATED Successfuly";
      header('location:eligibledisplay.php');
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
  <h1 style="text-align: center;">Edit Details of Eligible Students</h1>
    <div class= " container my-5">
    <form method = "post">
 
    
<div class="form-group">
    <label >Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="CNAME" autocomplete="off" value=<?php echo "'$CNAME'"; ?>>
    </div>
<div class="form-group">
    <label >Do btech CS provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_CS" value =<?php echo $BTECH_CS; ?>>
</div>
<div class="form-group">
<label >Do btech IT provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_IT" value =<?php echo $BTECH_IT; ?>>
</div>
<div class="form-group">
<label >Do btech EC provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_EC" value =<?php echo $BTECH_EC; ?>>
</div>
<div class="form-group">
<label >Do btech EE provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_EE" value =<?php echo $BTECH_EE; ?>>
</div>
<div class="form-group">
<label >Do btech EI provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_EI" value =<?php echo $BTECH_EI; ?>>
</div>
<div class="form-group">
<label >Do btech MT provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_MT" value =<?php echo $BTECH_MT; ?>>
</div>
<div class="form-group">
<label >Do btech BT provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_BT" value =<?php echo $BTECH_BT; ?>>
</div>
<div class="form-group">
<label >Do btech CE provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="BTECH_CE" value =<?php echo $BTECH_CE; ?>>
</div>
<div class="form-group">
<label >Do MCA provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="MCA" value =<?php echo $MCA; ?>>
</div>
<div class="form-group">
<label >Do MSC CS provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="MSC_CS" value =<?php echo $MSC_CS; ?>>
</div>
<div class="form-group">
<label >Do MTECH CS provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="MTECH_CS" value =<?php echo $MTECH_CS; ?>>
</div>
<div class="form-group">
<label >Do MTECH IT provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="MTECH_IT" value =<?php echo $MTECH_IT; ?>>
</div>
<div class="form-group">
<label >Do MTECH VLSI provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="MTECH_VLSI" value =<?php echo $MTECH_VLSI; ?>>
</div>
<div class="form-group">
<label >Do MTECH RS provide Eligible students (YES/NO)</label>
    <input type="text" class="form-control" placeholder="Enter (Y/N)" name="MTECH_RS" value =<?php echo $MTECH_RS; ?>>
</div>
<div class="form-group">
    <label >Total eligible students</label>
    <input type="number" class="form-control" placeholder="Enter total eligible students" name="TOTAL_ES" autocomplete="off" value =<?php echo $TOTAL_ES; ?> >
</div>
<div class="form-group">
    <label >Test date</label>
    <input type="date" class="form-control" placeholder="Enter test date" name="Test_Date" autocomplete="off" value=<?php echo $Test_Date; ?> > 
</div>
<div class="form-group">
    <label >Interview start date</label>
    <input type="date" class="form-control" placeholder="Enter interview start date" name="Interview_S_Date" autocomplete="off" value=<?php echo $Interview_S_Date; ?>>
</div>
<div class="form-group">
    <label >Interview end date</label>
    <input type="date" class="form-control" placeholder="Enter interview end date" name="Interview_E_Date" autocomplete="off" value=<?php echo $Interview_E_Date; ?>>
</div>
<div class="form-group">
    <label >Result date</label>
    <input type="date" class="form-control" placeholder="Enter result date" name="Result_Date" autocomplete="off" value=<?php echo $Result_Date; ?>> 
</div>
<div class="form-group">
    <label >Written test</label>
    <input type="number" class="form-control" placeholder="Enter no.of students present in written test" name="Ap_WrittenTest" autocomplete="off" value=<?php echo $Ap_WrittenTest; ?>>
</div>
<div class="form-group">
    <label >GD (NA)</label>
    <input type="text" class="form-control" placeholder="Enter (NA)" name="GD" value=<?php echo $GD; ?>>
</div>
<div class="form-group">
    <label >Interview</label>
    <input type="number" class="form-control" placeholder="Enter no. of students present in interview" name="SS_INTERVIEW" autocomplete="off" value=<?php echo $SS_INTERVIEW; ?>>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Edit</button>
</form>
   </div>

    
  </body>
</html>   

