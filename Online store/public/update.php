<?php
try {
 require "../common.php";
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


<h3>Results</h3>
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
 <th>Edit</th>
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
<td><a href="update-single.php?id=<?php echo escape($row["id"]);
?>">Edit</a></td>
 </tr>
 <?php endforeach; ?>
 </tbody>
 </table>
</div>

 <a href="myAccount.php">Back to home</a>

<?php include "../templates/footer.php"; ?>