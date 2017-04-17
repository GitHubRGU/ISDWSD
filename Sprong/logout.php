<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/style.css" type="text/css" />
<body>


<?php
include("inc/header.php");

//  Force a log out:
session_start();

//  Check if the username session variable is set:
if (isset($_SESSION['username']))
{

//  if it is, then unset it:
    unset($_SESSION['username']);
}

//  Send user to index.php:
header("location:./");

include("inc/footer.php");

?>

</body>
</html>
