<?php require_once '../templates/header.php'; ?>


<?php
//Only allow users with username and password onto myAccount page
/*if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page if not logged in
    header('Location: login.php');
    exit;
} */?>

<style> @import"css/mystyle.css";</style>
<title>MyAccount</title>

<body>

    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">My Account</h3>
      </div>

        <div class="mainarea">
        <h1>You are logged in to your account  </h1>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        </div>

      <div class="row marketing">
        <div>
          <p>To update, view or delete your account, please choose from the below options. </p>
       </div>
       <ul>
        <li>
          <a href="create.php"><strong>Create</strong></a> - Create a new account
        </li>
        <li>
          <a href="read.php"><strong>Account Details</strong></a> - View your details
        </li>
        <li>
          <a href="update.php"><strong>Update</strong></a> - Update and edit your account
        </li>
        <li>
          <a href="delete.php"><strong>Delete</strong></a> - delete your account
        </li>
      </ul>
    </div>

  <?php require_once '../templates/footer.php';?>


