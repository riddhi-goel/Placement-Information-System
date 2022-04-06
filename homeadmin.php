<?php
session_start();
if(!isset($_SESSION["TPO"])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to ADMIN HOMEPAGE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/release/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap--> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <!--JQuery-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <!--Bootstrap Tooltips-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> 
        <!--Bootstrap Core Javascript-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script> 
        <!--MDB Core Javascript-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/md.min.js"></script> 
    </head>
    <script type="text/javascript">
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop()>100);
        });
        </script>

<body>
<nav class=" navbar navbar-expand-lg navbar dark fixed -top">
    <a class ="navbar-brand ml-5 font-weight-bold" href="#" style="font-size: 35px; color: black;">Placement Information System</a>
    <!--Collapsible Button-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expand="false" aria-label="Toggle navigation" data-target="#exnavbar" aria-control="exnavbar">
        <span class="navbar-toggler-icon"></span>
</button>
<!--Collapsible Content-->
<div class="collapse navbar-collapse pr-5" id="exnavbar">
<ul class="navbar-nav ml-auto mr-5 pr-5" style="font-size: 19px;">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbardropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">Home</a>
    <div class="dropdown-menu dropdown-primary" aria-label="navbardropdownlink">
        <a class="dropdown-item" href ="companydisplay.php">Manage Company Details</a>
        <a class="dropdown-item" href ="eligibledisplay.php">Manage Eligible Student Details Details</a>
        <a class="dropdown-item" href ="selecteddisplay.php">Manage Selected Students Details</a>
        
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbardropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">Search</a>
    <div class="dropdown-menu dropdown-primary" aria-label="navbardropdownlink">
        <a class="dropdown-item" href ="NewComp.php">Search Company Details</a>
        <a class="dropdown-item" href ="NewElig.php">Search Eligible Student Details Details</a>
        <a class="dropdown-item" href ="selectedsearch.php">Search Selected Students Details</a>
        
</li>
<li class="nav-item">
    <a class="nav-link" href="aboutus.php" style="color: black;">About us</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
</li>

</ul>

</div>
</nav>
<div style="margin-top: 12%;text-align: center; color: black;">
    <h1 class="font-weight-bold" style="font-size: 70px;">Welcome to Placement Information System </h1>
    <h4>---Admin Home Page---</h4>
</div>
</body>
</html>
