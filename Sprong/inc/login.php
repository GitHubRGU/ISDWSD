<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php
include("../inc/header.php");

//  Check if anything has been POSTed:
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

//  If nothing POSTed, then display the Login form:
    ?>
    <main>
        <div class="loginBox">
            <form method="post" action="login.php"><br>
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="Enter username here"/><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="Enter password here"/><br><br>
                <input type="submit" name="submit" value="Login to Sprong"/>
            </form>
            <div class="error"><?php // echo error;?><?php // echo $username; echo $password?></div>
        </div>
    </main>


    <?php

    include("../inc/footer.php");

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  Something has been POSTed, so a user is logged in, but need to check that a
    //  correct username and password has been entered:

    $username = $_POST["username"];
    $password = $_POST{"password"};

    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }else
    {


        //  Open a connection to the mySQL database ($link):
        include("../inc/connection.php");

        $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
        $result=mysqli_query($link,$sql);

        if(mysqli_num_rows($result == 1))
        {
            //  If query doesn't return a single row, then something is wrong,
            //  send the user to the home page:
            header("location: home.php");
        }else
        {
            echo "Incorrect username or password.";
        }
    }



}
?>


</body>
</html>
