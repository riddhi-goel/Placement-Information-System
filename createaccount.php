<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create your Account</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
  <h2>Sign Up</h2>
 
  <?php
include 'connect.php';
if(isset($_POST['submit'])){

  $FIRSTNAME=mysqli_real_escape_string($con, $_POST['FIRSTNAME']);
  $LASTNAME=mysqli_real_escape_string($con, $_POST['LASTNAME']);
  $USERNAME=mysqli_real_escape_string($con, $_POST['USERNAME']);
  $PASSWORD=mysqli_real_escape_string($con, $_POST['PASSWORD']);
  $CONFIRM_PASS=mysqli_real_escape_string($con, $_POST['CONFIRM_PASS']);
  $GENDER=mysqli_real_escape_string($con, $_POST['GENDER']);
  $ROLE=mysqli_real_escape_string($con, $_POST['ROLE']);

  

  $emailquery = "SELECT * FROM `LOGIN` WHERE `USERNAME`= '$USERNAME'";
  $resultquery = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($resultquery);
  if($emailcount>0){ ?>
                    <div class="alert alert-danger" role="alert">
                    <p class="error"><?php echo "Email already exists!!"; ?></p>
                    </div>
             <?php }
  else if($PASSWORD === $CONFIRM_PASS){
              $PASSWORD = password_hash($PASSWORD, PASSWORD_BCRYPT);
              $CONFIRM_PASS = password_hash($CONFIRM_PASS, PASSWORD_BCRYPT);
          $sql = "INSERT INTO `LOGIN` (`FIRSTNAME`,`LASTNAME`,`USERNAME`,`PASSWORD`,`CONFIRM_PASS`,`GENDER`,`ROLE`) VALUES ('$FIRSTNAME', '$LASTNAME', '$USERNAME', '$PASSWORD', '$CONFIRM_PASS', '$GENDER', '$ROLE')";
           $result = mysqli_query($con,$sql);
             if($result){?>
                         <div class="alert alert-success" role="alert">
                         <p class="success"><?php echo "Account Created Successfully"; ?></p>
                         </div>
                 <?php   header("Location:login.php");
                } 
            else{ die(mysqli_error($con));
                }
          }
  else{?>
              <div class="alert alert-danger" role="alert">
              <p class="error"> <?php echo "Password does not match!"; ?></p>
              </div>
  <?php }
     

}?>

  <label>First Name</label>
  <input type="text"  name="FIRSTNAME" id="FIRSTNAME" placeholder="Enter your First Name" required>
  <label>Lastname</label>
  <input type="text" name = "LASTNAME" id="LASTNAME" placeholder="Enter your Last Name" required>
  <label>Email</label>
  <input type="email" name = "USERNAME" id="USERNAME" placeholder="Enter your Email" required>
  <label>Password</label>
  <input type="password" name = "PASSWORD" id="PASSWORD" placeholder="Enter your Password" required>
  <label>Confirm Password</label>
  <input type="password" name = "CONFIRM_PASS" id="CONFIRM_PASS" placeholder="Confirm your Password" required>
  <label >Select Gender:</label>
  <select type="text" name = "GENDER" id="GENDER" required>
     <option selected>Gender:</option>
     <option value="FEMALE">FEMALE</option>
     <option value="MALE">MALE</option> 
  </select>
  <label >Select User Type:</label>
  <select type="text" name = "ROLE" id="ROLE" required>
     <option selected>User Type:</option>
     <option value="TPO">TPO</option>
     <option value="TPC">TPC</option>  
  </select>
  <div style="text-align: center;">
  <button type="submit" class="btn btn-dark" name="submit" style="text-align:center; ">Sign Up</button>
  <a href= "login.php"> Login</a>
  <div>
</form>
</body>
</html>
