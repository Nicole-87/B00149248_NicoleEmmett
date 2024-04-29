<?php
include "../templates/header.php";
?>

<br>

<h1>About</h1>

<br> <p id="about-p">Established in 2005, Skin Shop is the one stop shop for all of your skin care needs. Our skin  experts are on hand in store and via email for recommendations.</p><br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src="images/derm.jpg" alt="Dermalogica">
    </div>

    <div class="item">
      <img src="images/image.jpg" alt="Image Skin">
    </div>

    <div class="item">
      <img src="images/skinc.jpg" alt="Skin Ceuticals">
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php require_once '../templates/footer.php';?>