<?php
if (isset($_POST['submit'])) {
 try {
 require "../common.php";
 require_once '../src/DBconnect.php';
 $sql = "SELECT *
 FROM sale
 WHERE productName = :productName";
 $productName = $_POST['productName'];
 $statement = $connection->prepare($sql);
 $statement->bindParam(':productName', $productName, PDO::PARAM_STR);
 $statement->execute();
 $result = $statement->fetchAll();
 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
require "../templates/header.php";
if (isset($_POST['submit'])) {
 if ($result && $statement->rowCount() > 0) {
?>

 <h2>Results</h2>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Product ID</th>
                <th>About</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo escape($row["productName"]); ?></td>
                    <td><?php echo escape($row["price"]); ?></td>
                    <td><?php echo escape($row["productID"]); ?></td>
                    <td><?php echo escape($row["about"]); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

 <?php } else { ?>
 > No results found for <?php echo escape($_POST['productName']); ?>.
 <?php }
} ?>
<h2>Find Product</h2>
<form method="post">
 <label for="productName">Product Name</label>
 <input type="text" id="productName" name="productName">
 <input type="submit" name="submit" value="View Results">
</form>

<a href="onsale.php">Back to Sale</a>

<?php require "../templates/footer.php"; ?>