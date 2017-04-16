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

        $sql_query="SELECT * FROM users";

        echo "<p>SQL query string: " . $sql_query . "</p>";

        //  Run the SQL query on the database:
        $result = mysqli_query($link,$sql_query);

        echo "<p>Got here!</p>";
        echo "<p>Query returned: " . $result . "</p>";

        //  echo "<p>Result is: " . var_dump($result) . "</p>";

        while($row = mysqli_fetch_array($result)){
            // print out fields from row of data
            echo $row['uid'] . " - " . $row['username'] . " - " . $row['password'];
            echo "<br/>";
        }


        echo "<p>Got here too!</p>";

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


include("../inc/footer.php");


?>


</body>
</html>
