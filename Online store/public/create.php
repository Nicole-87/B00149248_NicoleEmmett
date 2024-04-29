<?php
if (isset($_POST['submit'])) {
    require "../common.php";

 try {
    require_once "../src/DBconnect.php";

 $new_user = array(
    "firstname" => escape($_POST['firstname']),
    "lastname" => escape($_POST['lastname']),
    "email" => escape($_POST['email']),
    "age" => escape($_POST['age']),
    "location" => escape($_POST['location'])
    );

$sql = "INSERT INTO account (". implode(", ", array_keys($new_user)).")
 values (:" . implode(", :", array_keys($new_user)).")";

$statement = $connection->prepare($sql);
$statement->execute($new_user);

 } catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
 }
}
?>

<?php include "../templates/header.php";

if (isset($_POST['submit']) && $statement)
 {
 echo $new_user['firstname']. ' successfully added';
 }
?>

<h1>Contact</h1><br>

<h3>Create Account or Sign up for monthly offers</h3><br>

 <form method="post">
 <label for="firstname">First Name</label>
 <input type="text" name="firstname" id="firstname" required>
 <label for="lastname">Last Name</label>
 <input type="text" name="lastname" id="lastname" required>
 <label for="email">Email Address</label>
 <input type="email" name="email" id="email" required>
 <label for="age">Age</label>
 <input type="text" name="age" id="age">
 <label for="location">Location</label>
 <input type="text" name="location" id="location">
 <input type="submit" name="submit" value="Submit">
 </form>
 
 <a href="myAccount.php">Back to home</a>
