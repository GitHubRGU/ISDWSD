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
    echo "User is logged in";
    ?>

<main>
    <p>manageUsers.php.</p>
</main>

<?php
    include("footer.php");

} else {
    //  User is not logged in, so send them to index.php:
    header("location:./");
}





?>


</body>
</html>