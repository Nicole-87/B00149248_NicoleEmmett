<?php
session_start();
if($_SESSION['Active'] = false){ 
   header("location:login.php");
   exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skin Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style> @import"../css/mystyle.css";</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Skin Shop</h1>      
    <p>Healty Skin Starts Here</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="brands.php">Brands</a></li>
        <li><a href="onsale.php">On Sale</a></li>
        <li><a href="bundles.php">Bundles</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="myAccount.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="shopping-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

