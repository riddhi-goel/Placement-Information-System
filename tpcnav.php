<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation bar</title>
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
    <style>
body{
  margin:0;
  padding:0;
 
}

.nav li{
  display:inline-block;
}
.nav a{
  text-decoration:none;
  color:#ffffff; // code of blue
  width:100px;
  display:block;
  padding:22px;
  font-size:20px;
  font-family:Helvetica;
  transition:0.6s;
}
.nav a:hover{
  background:#A8A8A8; //code of grey
  transition:0.6s;
}
.dropdown-menu{
    animation-name: atthover;
    animation-duration: 1s;
    animation-iteration-count: finite;
}
.dropdown:hover{
    animation-play-state: running;
}
.dropdown-item:hover{
    background-color: #ccc;
}
@keyframes atthover{
    0%{
        opacity: 0;
        margin-top: 30px;
    }
    50%{
        opacity: 1;
        margin-top: 0px;
    }
    100%{
        opacity: 100%;
    }
  }
  .navbar-dark.scrolled{
    background: #4a4847;
    transition: .5s ease-in-out;
}
    </style>
</head>
<script type="text/javascript">
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop()>100);
        });
        </script>

<body>
<nav class=" navbar navbar-expand-lg navbar dark fixed -top">
    <a class ="navbar-brand ml-5 font-weight-bold" href="#" style="font-size: 35px; color: black;"> Placement Information System</a>
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
        <a class="dropdown-item" href ="tpccompanydisplay.php">View Company Details</a>
        <a class="dropdown-item" href ="tpceligibledisplay.php">View Eligible Student Details Details</a>
        <a class="dropdown-item" href ="tpcselecteddisplay.php">View Selected Students Details</a>
        <a class="dropdown-item" href ="hometpc.php">Go to HomePage</a>
        </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbardropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">Search</a>
    <div class="dropdown-menu dropdown-primary" aria-label="navbardropdownlink">
        <a class="dropdown-item" href ="tpcNewComp.php">Search Company Details</a>
        <a class="dropdown-item" href ="tpcNewElig.php">Search Eligible Student Details Details</a>
        <a class="dropdown-item" href ="tpcselectedsearch.php">Search Selected Students Details</a>
        
</li>
<li class="nav-item">
    <a class="nav-link" href="tpcaboutus.php" style="color: black;">About us</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
</li>

</ul>

</div>
</nav>
</nav>
</body>
</html>