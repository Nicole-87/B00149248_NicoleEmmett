<?php
include "../templates/header.php";
require "../common.php";
require_once '../src/DBconnect.php';
?>

<div class="container">
  
    <h1>Sale</h1>

    <p>Get skincare products you need at lower prices at our sale section here at Skin Shop.</p>
   
</div>

 <h2><a href="readSale.php"><strong>Search Products</strong></a></h2> 
 <br>
 <br>
 
 <div class='productName'>
    <h3>Dermalogica PreCleance</h3> <img src="images/preCleanse.jpg" alt="Image Skin"><a href="add-to-cart.php?productID=123">Add to Cart</a>
</div>

<div class='productName'>
    <h3>Dermalogica Special Cleansing Gel</h3> <img src="images/scg.jpg" alt="Image Skin"><a href="add-to-cart.php?productID=321">Add to Cart</a>
</div>

<div class='productName'>
    <h3>Obagi ClearFX</h3> <img src="images/ageless.jpg" alt="Image Skin"><a href="add-to-cart.php?productID=879">Add to Cart</a>
</div>

<div class='productName'>
    <h3> Image Ageless Cleanser</h3> <img src="images/clear.jpg" alt="Image Skin"><a href="add-to-cart.php?productID=564">Add to Cart</a>
</div>
</div>

<?php require_once '../templates/footer.php';?>