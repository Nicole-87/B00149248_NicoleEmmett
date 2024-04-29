<?php
require_once '../templates/header.php';
require "../common.php";
require_once '../src/DBconnect.php';
?>

<style>
    @import "css/mystyle.css";
</style>

<?php
if (isset($_SESSION['sale']) && !empty($_SESSION['sale'])) {
    var_dump($_SESSION['sale']);

    $whereIn = implode(',', $_SESSION['sale']);

    $sql = "SELECT * FROM sale WHERE productID IN ($whereIn)";
    
   
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();

    echo $sql;

      foreach ($result as $row) {
       
        $productId = $row['productID'];
        $productName = $row['productName'];
        $price = $row['price'];

        echo "Product ID: $productId, Product Name: $productName, Price: $price<br>";
      }
   
} else {

    echo "Your shopping cart is empty.";
}
?>

