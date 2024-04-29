<?php require_once('../templates/headerNoLogin.php'); ?>

<?php require_once ('config.php'); ?>

    <title>Sign in</title>
</head>

<?php
require_once '../src/clean.php';
$clean = new clean();

if(isset($_POST['Submit']))
{
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $sql ="SELECT username, password from users where username = :USER";
        $statement =$connection->prepare($sql);
        $tmpUser = ($_POST['username']);
        $statement->bindParam( ':USER',  $tmpUser, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row => $rows)
        {
            $username = $rows['username'];
            $password = $rows['password'];

            if (($_POST['username'] == $username) && ($_POST['Password'] == $password))
            {
                $_SESSION['username'] = $username;
                $_SESSION['Active'] = true;
                header(  "location:myAccount.php");
                exit;
            }
            else{
                echo 'Incorrect Username or password';
            }

            }
        }
        catch 
        (Exception $e)
        {
            echo '<div class="messages-error">Error Logging In:' . $e->getMessage() . '</div>';
        }
    }

?>



<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="username" type="username" id="inputUsername" class="form-control" placeholder="username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>
</div>

<ul>
 <li>
 <a href="create.php"><strong>Create</strong></a> - Create a new account
 </li>
</ul>

</body>
</html>



