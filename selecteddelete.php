<?php
include 'connect.php';
if(isset($_GET['deletecompanyuid'])){
    $UID=$_GET['deletecompanyuid']; 
    $sql= "DELETE FROM `SELECTED_STUDENTS` WHERE `UID`= '$UID'";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:selecteddisplay.php');
    }else{
        die(mysqli_error($con));
    }


}


?>