<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

//  Confirm that user is logged in (session exists):
session_start();
if (isset($_SESSION['username']))
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include ("header.php");
        ?>

    }





}

include("header.php");

echo "
<main>
<p>requestWork.php.</p>
</main>
";

include("footer.php");

?>


</body>
</html>