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
    <button class="btn btn-dark my-5"><a href="selectedinsert.php" class="text-light">ADD NEW STUDENT DETALIS</a></button>
    <div style="margin-right:100px">
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
     
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM `SELECTED_STUDENTS` ORDER BY `UID` ASC";
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
        
  <button class="btn btn-dark"><a href="selectededit.php?editcompanyuid='.$UID.'" class="text-light">EDIT</a></button>
  <button input type="submit" class="btn btn-danger" value="DELETE" class="selecteddelete" onclick = "return checkdelete()" ><a href="selecteddelete.php?deletecompanyuid='.$UID.'" class="text-light">DELETE</a></button>
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
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this record?');
  }
</script>
</html>