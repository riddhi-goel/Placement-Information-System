<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["TPO"])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Placement Information System</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
<?php include 'partials/_nav.php' ?>
<div class="container">
<div style="margin-top:-4%; margin-left:-18%; font-size:-30%; color: black;">
    <button class="btn btn-dark my-5"><a href="companyinsert.php" class="text-light">ADD NEW COMPANY</a></button>
    <div style="margin-right:100px">
    <table class="table"  style="margin-top:-2%; margin-left:0%; font-size:-30%; width:30px" style="margin-right:100px">
  <thead class="thead-dark">
    <tr>
  
      <th scope="col">Company Name</th>
      <th scope="col">Company Abbreviation</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Pincode</th>
      <th scope="col">Provides Full Time Employment</th>
      <th scope="col">Provides Two Months Internship</th>
      <th scope="col">Provides Six Months Internship</th>
      <th scope="col">CTC For Undergraduates in Lakhs</th>
      <th scope="col">CTC For Postgraduates in Lakhs</th>
      <th scope="col">Stipend</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM `COMPANY` ORDER BY CNAME ASC";
  $result=mysqli_query($con,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
         
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

        echo '<tr>
       
        <td>'.$CNAME.'</td>
        <td>'.$CNAME_ABB.'</td>
        <td>'.$ADDRESS.'</td>
        <td>'.$CITY.'</td>
        <td>'.$STATE.'</td>
        <td>'.$PINCODE.'</td>
        <td>'.$FTE.'</td>
        <td>'.$TMI.'</td>
        <td>'.$SMI.'</td>
        <td>'.$CTC_UG.'</td>
        <td>'.$CTC_PG.'</td>
        <td>'.$STIPEND.'</td>
        <td>
  <button class="btn btn-dark"><a href="companyedit.php?editcompanyname='.$CNAME.'" class="text-light">EDIT</a></button>
  <button input type="submit" class="btn btn-danger" value="DELETE" class="companydelete" onclick = "return checkdelete()"><a href="companydelete.php?deletecompanyname='.$CNAME.'" class="text-light">DELETE</a></button>
  </td>
      </tr>';
      }
  }
?>
  </tbody>
</table>
</div>
</div>
</body>
</div>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this record?');
  }
</script>
</html>

 