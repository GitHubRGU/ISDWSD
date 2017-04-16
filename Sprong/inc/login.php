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


} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  Something has been POSTed, so a user is logged in, but need to check that a
    //  correct username and password has been entered:

    $username = $_POST["username"];
    $password = $_POST{"password"};

    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }

    else{

        //  Open a connection to the mySQL database ($link):
        include("../inc/connection.php");

        $sql_query="SELECT * FROM users WHERE username='" . $username . "' and password='" . $password . "'";

        //  DEBUGGING: Show me what the query string looks like:
        echo "<p>SQL query string: " . $sql_query . "</p>";

        //  Run the SQL query on the database:
        $result = mysqli_query($link,$sql_query);

        echo "<p>Got here!</p>";


        echo "<p>Number of rows = " . mysqli_num_rows($result) . "</p>";

        //  Looking up the entered Username and Password in the user table
        //  should return a single row if both details match:
        if(mysqli_num_rows($result) == 1)
        {
            echo "<p>SAUL GOODMAN!</p>";
            //  send the user to the home page:
            //  header("location: home.php");
        }else
            //  No match, tell user to try again:
        {
            echo "<p>Incorrect username or password entered.</p>";
        }
    }



}


include("../inc/footer.php");

//  Close the link to the mySQL database:
mysqli_close($link);

?>


</body>
</html>
