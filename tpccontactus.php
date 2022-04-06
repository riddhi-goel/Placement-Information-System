
<?php

$con= new mysqli('localhost', 'root', '', 'PCELL');
if(!$con){
    die(mysqli_error($con));
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<?php include 'partials/tpcnav.php' ?>
<div style="margin-top:3%; margin-left:25%; margin-right: 25%; color: black;">
<!doctype html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/1a705ea4f1.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CONTACT US</title>
    
  </head>
  <h2 class="text-center p-3" style="font-size: 35px; color: black;"><u>CONTACT US</u></h2>
  <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name of office</th>
      <th scope="col">Phone number</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Vice-Chancellor</td>
      <td>01438-228787</td>
      <td>inashastri@banasthali.in, vc@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Dean Administration</td>
      <td>01438-228456</td>
      <td>deanadmin@banasthali.ac.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Academic Section</td>
      <td>01438-228950,228989</td>
      <td>mittal_hi@yahoo.co.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Examination Section</td>
      <td>01438-228524</td>
      <td>exam@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Result Section</td>
      <td>01438-228950</td>
      <td>results@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Finance and Accounts</td>
      <td>01438-228546,228644</td>
      <td>researchbanasthali@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Research Section</td>
      <td>01438-228989</td>
      <td>inashastri@banasthali.in, vc@banasthali.in</td>
      
    </tr>
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Placement office(s)</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody></tbody>
  <tr>
      <th scope="row"></th>
      <td>Computer Science and Engineering</td>
      <td>9352141479</td>
      <td>campusplacement@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Management</td>
      <td>9410111228</td>
      <td>iic@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Design</td>
      <td>9352878377</td>
      <td>placements@banasthali.in</td>
      
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Life-Sciences,Pharmacy,Chemical & all other programs</td>
      <td>9352879809,9783774453</td>
      <td>bio_chem_pharma@banasthali.in</td>
      
    </tr>
  </tbody>
</table>
</html>
</body>
</div>
</html>
