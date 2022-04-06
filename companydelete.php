<?php
include 'connect.php';
if(isset($_GET['deletecompanyname'])){
  $CNAME=$_GET['deletecompanyname'];
    $sql= "DELETE FROM `COMPANY` WHERE `CNAME` = '$CNAME' ";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:companydisplay.php');
    }else{
        die(mysqli_error($con));
    }

}

?>