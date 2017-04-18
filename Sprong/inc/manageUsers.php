<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

//  Establish connection to Azure mySQL database ($link):
include("connection.php");


session_start();
if (isset($_SESSION['username']))
{
    //  Session has been set, so a user is logged in:
    include("header.php");
    echo "User is logged in!!!";

    //  Build SQL query string to insert the new user into the database:
    $username = $_SESSION['username'];
    $sql_query="SELECT * FROM users WHERE username='" . $username . "'";

//   DEBUGGING: Show me what the query string looks like:
    echo "<p>SQL query string: " . $sql_query . "</p>";

//  Run the SQL query on the database:
    $result = mysqli_query($link,$sql_query);

    ?>

<main>
    <p>manageUsers.php.</p>
</main>

<?php
    include("footer.php");

} else {
    //  User is not logged in, so send them to the home page:
    header("location:../inc/home.php");
}


?>


</body>
</html>