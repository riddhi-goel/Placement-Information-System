<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $USERNAME=$_POST['USERNAME'];
    $PASSWORD=$_POST['PASSWORD'];
    $ROLE=$_POST['ROLE'];

    $emailquery = "SELECT * FROM `LOGIN` WHERE `USERNAME`= '$USERNAME'";
  $resultquery = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($resultquery);
  if($emailcount){
    $emailpass= mysqli_fetch_assoc($resultquery);
    $dbpass = $emailpass['PASSWORD'];
    $passdecode= password_verify($PASSWORD, $dbpass);

    if($passdecode){
        $emailrole= mysqli_fetch_assoc($resultquery);
        $dbrole = isset($emailrole['ROLE'])? count($emailrole['ROLE']) : 0;    
        if($ROLE === $dbrole){?>
                        <div class="alert alert-success" role="alert">
                          <?php echo "Login Successful"; ?>
                        </div>
                        <?php if(isset($_SESSION['TPO'])){
                                   header("Location:homeadmin.php");
                                  }
                               else if(isset($_SESSION['TPC'])){
                                header("Location:hometpc.php");
                               } 
                           }
       else{?>
          <div class="alert alert-danger" role="alert">
           <?php echo "Mismatched Credentials! Incorrect Role!"; ?>
          </div>
    <?php } 
  }
  else{?>
        <div class="alert alert-danger" role="alert">
          <?php echo "Incorrect Password"; ?>
        </div>
<?php }
   }else{?>
    <div class="alert alert-danger" role="alert">
      <?php echo "Invalid Email"; ?>
    </div>
<?php }
 
  }
  
  ?>