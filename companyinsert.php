<?php

include 'connect.php';
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
  $sql = "INSERT INTO `company` (`CNAME`,`CNAME_ABB`,`ADDRESS`,`CITY`,`STATE`,`PINCODE`,`FTE`,`TMI`,`SMI`,`CTC_UG`,`CTC_PG`,`STIPEND`) VALUES ('$CNAME', '$CNAME_ABB', '$ADDRESS', '$CITY', '$STATE', '$PINCODE', '$FTE', '$TMI', '$SMI', '$CTC_UG', '$CTC_PG', '$STIPEND')";
  $result = mysqli_query($con,$sql);
  if($result){
      //echo "Data Inserted Successfuly";
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
  <h1 style="text-align: center;">Enter Details of New Company</h1>
    <div class= " container my-5">
    <form method = "post">
  
<div class="form-group" >
    <label >Company Name</label>
    <input type="text" pattern="[a-zA-Z'-'\s]*" class="form-control" placeholder="Enter Company Name" name="CNAME" autocomplete="off">
    

</div>

<div class="form-group">
    <label >Company Abbreviation</label>
    <input type="text" pattern="[a-zA-Z'-'\s]*" class="form-control" placeholder="Enter Company Abbreviation" name="CNAME_ABB" autocomplete="off">
</div>
<div class="form-group">
    <label >Address</label>
    <input type="text"  class="form-control" placeholder="Enter Address" name="ADDRESS" autocomplete="off">
</div>
<div class="form-group">
    <label >City</label>
    <input type="text" pattern="[a-zA-Z'-'\s]*"  class="form-control" placeholder="Enter City" name="CITY" >
</div>
<div class="form-group">
    <label >State</label>
    <select name="STATE" id="State-List" class="InputBox"><br>
           <option value="">Select</option>
           <option value="Andhra Pradesh">Andhra Pradesh</option>
           <option value="Arunachal Pradesh">Arunachal Pradesh</option>
           <option value="Assam">Assam</option>
           <option value="Bihar">Bihar</option>
           <option value="Chhattisgarh">Chhattisgarh</option>
           <option value="Goa">Goa</option>
           <option value="Gujarat">Gujarat</option>
           <option value="Haryana">Haryana</option>
           <option value="Himachal Pradesh">Himachal Pradesh</option>
           <option value="Jharkhand">Jharkhand</option>
           <option value="Karnataka">Karnataka</option>
           <option value="Kerala">Kerala</option>
           <option value="Madhya Pradesh">Madhya Pradesh</option>
           <option value="Maharashtra">Maharashtra</option>
           <option value="Manipur">Manipur</option>
           <option value="Meghalaya">Meghalaya</option>
           <option value="Mizoram">Mizoram</option>
           <option value="Nagaland">Nagaland</option>
           <option value="Odisha">Odisha</option>
           <option value="Punjab">Punjab</option>
           <option value="Rajasthan">Rajasthan</option>
           <option value="Sikkim">Sikkim</option>
           <option value="Tamil Nadu">Tamil Nadu</option>
           <option value="Telangana">Telangana</option>
           <option value="Tripura">Tripura</option>
           <option value="Uttar Pradesh">Uttar Pradesh</option>
           <option value="Uttarakhand">Uttarakhand</option>
           <option value="West Bengal">West Bengal</option>
           <option value="Chandigarh">Chandigarh</option>
           <option value="Delhi">Delhi</option>
           <option value="Jammu and Kashmir">Jammu and Kashmir</option>
           <option value="Puducherry">Puducherry</option>
           <option value="Ladakh">Ladakh</option>
           <option value="Other">Other</option>  
</select></br></div>

<div class="form-group">

    <label >Pincode</label>
    <input type="number" id="PINCODE" name="PINCODE"
       min="6" max="6"   class="form-control" placeholder="Enter Pincode" autocomplete="off">

</div>
<div class="form-group">
    <label >Do company provide Full Time Employement (YES/NO)</label>
    <select name="FTE"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do company provide Two Month Internship</label>
    <select name="TMI"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br>
</div> 
<div class="form-group">
    <label >Do company provide Six Month Internship (YES/NO)</label>
    <select name="SMI"><br>
           <option value="">select</option>
           <option value="YES">YES</option>
           <option value="NO">NO</option>  
</select></br></div> 
<div class="form-group">
    <label >CTC For Undergraduate</label>
    <input type="number" class="form-control" placeholder="Enter CTC For Undergraduate" name="CTC_UG" autocomplete="off">
</div> 
<div class="form-group">
    <label >CTC For Postgraduate</label>
    <input type="number" class="form-control" placeholder="Enter CTC For Postgraduate" name="CTC_PG" autocomplete="off">
</div>
<div class="form-group">
    <label >Stipend</label>
    <input type="number" class="form-control" placeholder="Enter Stipend" name="STIPEND" autocomplete="off">
</div>

</div>
     <div class="modal-footer">
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>

         </div>
      </div>
        </div>
    </div>
  
  </body>
</html>