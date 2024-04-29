<?php
if (isset($_POST['submit'])) {
    require "../common.php";

 try {
    require_once "../src/DBconnect.php";


 $new_product = array(
    "productID" => escape($_POST['productID']),
    "productName" => escape($_POST['productName']),
    "price" => escape($_POST['price']),
    "about" => escape($_POST['about']),
    );
$sql = "INSERT INTO sale (". implode(", ", array_keys($new_product)).")
 values (:" . implode(", :", array_keys($new_product)).")";

$statement = $connection->prepare($sql);
$statement->execute($new_product);

 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
?>

<?php include "../templates/header.php";

if (isset($_POST['submit']) && $statement)
 {
 echo $new_product['productName']. ' successfully added';
 }
?>

<h2>Add a product</h2>

 <form method="post">
 <label for="productID">Product ID</label>
 <input type="text" name="productID" id="productID" required>
 <label for="productName">Product Name</label>
 <input type="text" name="productName" id="productName" required>
 <label for="price">Price</label>
 <input type="text" name="price" id="price" required>
 <label for="about">About</label>
 <input type="text" name="about" id="about">
 <input type="submit" name="submit" value="Submit">
 </form>

 <a href="onsale.php">Back to Sale</a>
 
 <?php include "../templates/footer.php"; ?>