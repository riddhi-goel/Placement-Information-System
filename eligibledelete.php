<?php
include 'connect.php';
if(isset($_GET['deletecompanyname'])){
  $CNAME=$_GET['deletecompanyname'];
    $sql= "DELETE FROM `ELIGIBLE_STUDENTS` WHERE `CNAME` = '$CNAME' ";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:eligibledisplay.php');
    }else{
        die(mysqli_error($con));
    }

}

?>