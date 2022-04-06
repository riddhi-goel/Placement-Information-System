<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Placement Information System</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
  <h2>Login</h2>
 
 <?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $USERNAME=$_POST['USERNAME'];
    $PASSWORD=$_POST['PASSWORD'];
    $ROLE=$_POST['ROLE'];
    
    $emailquery = "SELECT * FROM `LOGIN` WHERE `USERNAME`= '$USERNAME' AND `ROLE`='$ROLE'";
    $resultquery = mysqli_query($con,$emailquery);
    $emailpass= mysqli_fetch_assoc($resultquery);
    error_reporting(0) ;
    $dbpass = $emailpass['PASSWORD'];
    $passdecode= password_verify($PASSWORD, $dbpass);

 
  if(mysqli_num_rows($resultquery) === 1)
  {
      if($passdecode)
      {
         if($ROLE=="TPO")
          {
            $_SESSION["TPO"]=$USERNAME;
            header("Location:homeadmin.php");
          }
         else if($ROLE=="TPC")
          {
           $_SESSION["TPC"]=$USERNAME;
           header("Location:hometpc.php");
          }?>
          <div class="alert alert-success" role="alert">
           <?php echo "Loggedin Successfully"; ?>
          </div>    
<?php}
  }
  else if(!$emailquery)
          {?>
          <div class="alert alert-danger" role="alert">
            <p class="error"><?php echo "Invalid Email"; ?></p>
          </div>
    <?php } 
  
  else if(!$passdecode)
        {?>
        <div class="alert alert-danger" role="alert">
        <p class="error"><?php echo "Invalid Credentials"; ?></p>
        </div>
   <?php }

  else {?>
         <div class="alert alert-danger" role="alert">
         <p class="error"><?php echo "Mismatched Credentials! Incorrect Role!"; ?></p>
          </div>
<?php } 
  }}    
?>

  <label>Email</label>
  <input type="email" name = "USERNAME" id="USERNAME" placeholder="Enter your Email" required><br>
  <label>Password</label>
  <input type="password" name = "PASSWORD" id="PASSWORD" placeholder="Enter your Password" required><br>
  <label >Select User Type:</label>
  <select type="text" name = "ROLE" id="ROLE" required>
     <option selected>User Type:</option>
     <option value="TPO">TPO</option>
     <option value="TPC">TPC</option>  
  </select><br>
  <div style="text-align: center;">
  <button type="submit" class="btn btn-dark" name="submit" style="text-align:center; ">Login</button>
  <a href= "createaccount.php"> Sign Up</a>
  <div>
</form>
</body>
</html>
