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
<div style="margin-top:2%; margin-left:-18%; font-size:-30%; color: black;">
        <div style="margin-right:100px">
    <table class="table" style="width:100%" style="margin-right:100px">
  <thead class="thead-dark">
    <tr> 
     
      <th scope="col">Company Name</th>
      <th scope="col">BTECH CS students</th>
      <th scope="col">BTECH IT students</th>
      <th scope="col">BTECH EC students</th>
      <th scope="col">BTECH EE students</th>
      <th scope="col">BTECH EI students</th>
      <th scope="col">BTECH MT students</th>
      <th scope="col">BTECH BT students</th>
      <th scope="col">BTECH CE students</th>
      <th scope="col">MCA students</th>
      <th scope="col">$MSC CS students</th>
      <th scope="col">MTECH CS students</th>
      <th scope="col">MTECH IT students</th>
      <th scope="col">MTECH VLSI students</th>
      <th scope="col">MTECH RS students</th>
      <th scope="col">Total eligible students</th>
      <th scope="col">Test Date</th>
      <th scope="col">Interview start Date</th>
      <th scope="col">Interview end Date</th>
      <th scope="col">Result Date</th>
      <th scope="col">Appeared in Written Test</th> 
      <th scope="col">GD</th> 
      <th scope="col">Appeared in Interview</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT * FROM `ELIGIBLE_STUDENTS` ORDER BY `CNAME` ASC";
  $result=mysqli_query($con,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
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
          
          
         

        echo '<tr>
        <th scope="row">'.$CNAME.'</th>
        <td>'.$BTECH_CS.'</td>
        <td>'.$BTECH_IT.'</td>
        <td>'.$BTECH_EC.'</td>
        <td>'.$BTECH_EE.'</td>
        <td>'.$BTECH_EI.'</td>
        <td>'.$BTECH_MT.'</td>
        <td>'.$BTECH_BT.'</td>
        <td>'.$BTECH_CE.'</td>
        <td>'.$MCA.'</td>
        <td>'.$MSC_CS.'</td>
        <td>'.$MTECH_CS.'</td>
        <td>'.$MTECH_IT.'</td>
        <td>'.$MTECH_VLSI.'</td>
        <td>'.$MTECH_RS.'</td>
        <td>'.$TOTAL_ES.'</td>
        <td>'.$Test_Date.'</td>
        <td>'.$Interview_S_Date.'</td>
        <td>'.$Interview_E_Date.'</td>
        <td>'.$Result_Date.'</td>
        <td>'.$Ap_WrittenTest.'</td>
        <td>'.$GD.'</td>
        <td>'.$SS_INTERVIEW.'</td>
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
</div>
</html>