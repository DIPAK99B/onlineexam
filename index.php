<!DOCTYPE html>
<html>
<head>
<title>Online Examination System</title>
<link href="data/css/style1.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="data/css/bootstrap.min.css">
<script type="text/javascript" src="data/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="data/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Links</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <form class="d-flex">
          <a href="login.html">Login</a>
          <p>&nbsp; OR &nbsp;</p>
          <a href="registration.html">Signup</a> 
        </form>
      </div>
    </div>
  </nav>
<div id="header">
    <h1 class="heading-name">
        Online Examination System
    </h1>
</div>   
<div class="banner">
  <img src="data/images/DNA2.jfif">
</div>
<div class="TestInfo">
  <h1>Free Mock Test</h1>
</div>
<!--<div class="d-flex flex-row bd-highlight mb-3">-->
<div class="flex">
<?php
$c = 1;
while($c <= 5) {  
    echo '<div class="Hindi">';
      echo '<h1>Cell biology 1 Test Name here!</h1>';
      echo '<a href="test.php" class="Free-Test">Free Test</a>';
      echo '</div>';
    $c++;
  }
?>
</div>
<!--
  <div class="Hindi">
    <h1>Cell biology 1 Test Name here!</h1>
    <a href="test.php" class="Free-Test">Free Test</a>
  </div>
  <div class="English">
    <h1>Cell biology 2 Test NAME here!</h1>
    <a href="test.php" class="Free-Test">Free Test</a>
  </div>
  <div class="Maths">
    <h1>Cell biology 3 Test NAME here!</h1>
    <a href="test.php" class="Free-Test">Free Test</a>
  </div>
  <div class="Maths">
    <h1>Cell biology 4 Test NAME here!</h1>
    <a href="test.php" class="Free-Test">Free Test</a>
  </div>
</div> -->
<div class="TestInfo">
  <h1>Test Description </h1>
  <p>
    area for discription
  </p>
  <img src="data/images/Formula.jpg" alt="">
</div>
<div class="card text-center">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">Contact Info</h5>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
    <a href="https://in.linkedin.com/in/dipak-bansode-213bbb152" class="btn-btn-primary">Contact Us</a>
    <a href="#" class="btn-btn-primary1">Whatsapp</a>
    <a href="https://www.youtube.com/channel/UCZj1CTt3azBgRiTIJTCInbw" class="btn-btn-primary2">Youtube</a>
    <a href="#" class="btn-btn-primary3">Admin</a>
  </div>
  <div class="card-footer text-muted">
    Made by Dipak Bansode @ 2021
  </div>
</div>
</body>
</html>