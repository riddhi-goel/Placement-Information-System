<?php
include 'connect.php';
session_start();
if(!isset($_SESSION["TPC"])){
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
<?php include 'partials/tpcnav.php' ?>
<div class="container">
      <div style="margin-top:2%; margin-right:100px">
    <table class="table" style="width:100%" style="margin-right:100px">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Unique ID</th>
      <th scope="col">Company Name</th>
      <th scope="col">Course Name</th>
      <th scope="col">Full Time Employee</th>
      <th scope="col">Six Month Internship</th>
      <th scope="col">PPO Full Time</th>
      <th scope="col">PPO Six Months Internship</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM `SELECTED_STUDENTS` ORDER BY `CNAME` ASC";
  $result=mysqli_query($con,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $UID=$row['UID'];
          $CNAME=$row['CNAME'];
          $COURSENAME=$row['COURSENAME'];
          $FULLTIMEEMP=$row['FULLTIMEEMP'];
          $SIXMI=$row['SIXMI'];
        $PPO_FTE=$row['PPO_FTE'];
        $PPO_SMI=$row['PPO_SMI'];
        
        echo '<tr>
        <td>'.$UID.'</td>
                <td>'.$CNAME.'</td>
        <td>'.$COURSENAME.'</td>
        <td>'.$FULLTIMEEMP.'</td>
        <td>'.$SIXMI.'</td>
        <td>'.$PPO_FTE.'</td>
        <td>'.$PPO_SMI.'</td>       
        <td>
  
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
</html>