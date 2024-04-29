<?php

require "../common.php";
if (isset($_GET["id"])) {
 try {
 require_once '../src/DBconnect.php';
 $id = $_GET["id"];
 $sql = "DELETE FROM account WHERE id = :id";
 $statement = $connection->prepare($sql);
 $statement->bindValue(':id', $id);
 $statement->execute();
 $success = "User ". $id. " successfully deleted";

 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
try {
 require_once '../src/DBconnect.php';
 $sql = "SELECT * FROM account";
 $statement = $connection->prepare($sql);
 $statement->execute();
 $result = $statement->fetchAll();
} catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "../templates/header.php"; ?>

<h2>Delete users</h2>

<?php if ($success) echo $success; ?>

<div class="table-responsive">
    <table class="table table-bordered">
 <thead>
 <tr>
 <th>#</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Email Address</th>
 <th>Age</th>
 <th>Location</th>
 <th>Date</th>
 <th>Delete</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($result as $row) : ?>
 <tr>
 <td><?php echo escape($row["id"]); ?></td>
 <td><?php echo escape($row["firstname"]); ?></td>
 <td><?php echo escape($row["lastname"]); ?></td>
 <td><?php echo escape($row["email"]); ?></td>
 <td><?php echo escape($row["age"]); ?></td>
 <td><?php echo escape($row["location"]); ?></td>
 <td><?php echo escape($row["date"]); ?> </td>
 <td><a href="delete.php?id=<?php echo escape($row["id"]);
?>">Delete</a></td>
 </tr>
 <?php endforeach; ?>
 </tbody>
</table>
</div>

<a href="myAccount.php">Back to home</a>

<?php require "../templates/footer.php"; ?>