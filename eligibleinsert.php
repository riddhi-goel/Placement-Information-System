<?php
include 'connect.php';
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
  $sql = "INSERT INTO `ELIGIBLE_STUDENTS` ( `CNAME`,`BTECH_CS`,`BTECH_IT`,`BTECH_EC`,`BTECH_EE`,`BTECH_EI`,`BTECH_MT`,`BTECH_BT`,`BTECH_CE`,`MCA`,`MSC_CS`,`MTECH_CS`,`MTECH_IT`,`MTECH_VLSI`,`MTECH_RS`,`TOTAL_ES`,`Test_Date`,`Interview_S_Date`,`Interview_E_Date`,`Result_Date`,	`Ap_WrittenTest`,`GD`,`SS_INTERVIEW`) VALUES ( '$CNAME','$BTECH_CS','$BTECH_IT','$BTECH_EC','$BTECH_EE','$BTECH_EI','$BTECH_MT','$BTECH_BT','$BTECH_CE','$MCA','$MSC_CS','$MTECH_CS','$MTECH_IT','$MTECH_VLSI','$MTECH_RS','$TOTAL_ES','$Test_Date','$Interview_S_Date','$Interview_E_Date','$Result_Date','$Ap_WrittenTest','$GD','$SS_INTERVIEW' )";
  $result = mysqli_query($con,$sql);
  if($result){
      //echo "Data Inserted Successfuly";
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
  <h1 style="text-align: center;">Enter Details of Eligible Students </h1>
    <div class= " container my-5">
    <form method = "post">
    
<div class="form-group">
    <label >Company Name</label>
    <input type="text" class="form-control" placeholder="Enter Company Name" name="CNAME" autocomplete="off">
</div>
<div class="form-group">
    <label >Do btech CS provide Eligible students (YES/NO)</label>
    <select name="BTECH_CS"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech IT provide Eligible students (YES/NO)</label>
    <select name="BTECH_IT"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech EC provide Eligible students (YES/NO)</label>
    <select name="BTECH_EC"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech EE provide Eligible students (YES/NO)</label>
    <select name="BTECH_EE"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech EI provide Eligible students (YES/NO)</label>
    <select name="BTECH_EI"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech MT provide Eligible students (YES/NO)</label>
    <select name="BTECH_MT"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech BT provide Eligible students (YES/NO)</label>
    <select name="BTECH_BT"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do btech CE provide Eligible students (YES/NO)</label>
    <select name="BTECH_CE"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do MCA provide Eligible students (YES/NO)</label>
    <select name="MCA"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do MSC CS provide Eligible students (YES/NO)</label>
    <select name="MSC CS"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do MTECH CS provide Eligible students (YES/NO)</label>
    <select name="MTECH_CS"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do MTECH IT provide Eligible students (YES/NO)</label>
    <select name="MTECH_IT"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do MTECH VLSI provide Eligible students (YES/NO)</label>
    <select name="MTECH_VLSI"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do MTECH RS provide Eligible students (YES/NO)</label>
    <select name="MTECH_RS"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Total eligible students</label>
    <input type="number" class="form-control" placeholder="Enter total eligible students" name="TOTAL_ES" autocomplete="off" >
</div>
<div class="form-group">
    <label >Test date</label>
    <input type="date" class="form-control" placeholder="Enter test date" name="Test_Date" autocomplete="off"> 
</div>
<div class="form-group">
    <label >Interview start date</label>
    <input type="date" class="form-control" placeholder="Enter interview start date" name="Interview_S_Date" autocomplete="off">
</div>
<div class="form-group">
    <label >Interview end date</label>
    <input type="date" class="form-control" placeholder="Enter interview end date" name="Interview_E_Date" autocomplete="off">
</div>
<div class="form-group">
    <label >Result date</label>
    <input type="date" class="form-control" placeholder="Enter result date" name="Result_Date" autocomplete="off"> 
</div>
<div class="form-group">
    <label >Written test</label>
    <input type="number" class="form-control" placeholder="Enter no.of students present in written test" name="Ap_WrittenTest" autocomplete="off">
</div>
<div class="form-group">
    <label >GD (NA)</label>
    <input type="text" class="form-control" placeholder="Enter (NA)" name="GD">
</div>
<div class="form-group">
    <label >Interview</label>
    <input type="number" class="form-control" placeholder="Enter no. of students present in interview" name="SS_INTERVIEW" autocomplete="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

    
  </body>
</html>