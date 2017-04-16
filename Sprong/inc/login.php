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
    //  Something has been POSTed, so user is logged in, but need to check that a
    //  correct username and password has been entered:

    //  Open a connection to the mySQL database ($link):
    include("../inc/connection.php");

    $username = $_POST["username"];
    $password = $_POST{"password"};

    //  Run a SQL query on the user table in the database and confirm that the username
    //  and password entered are a correct pair:
    function checklogin($username, $password, $link)
    {
        $sql_query = "SELECT * FROM users WHERE username='" . $username . "' and password='" . $password . "'";
        echo $sql_query;
        $result = mysqli_query($link,$sql_query);
        //  OLD    $result = $link->query($sql);
        while($row = mysqli_fetch_array($result)){
            //  OLD   while ($row = $result->fetch_array()) {
            return true;
        }
        return false;
    }

    if (checklogin($username, $password, $link)) {
        session_start();
        $_SESSION['username'] = $username;
        header("location:./");
    } else {
        header("location:login");
    }

} else {
    print('something has gone VERY wrong!');
}
?>


</body>
</html>
