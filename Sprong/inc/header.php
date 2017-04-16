<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sprong - Guitar maintenance and repairs</title>
</head>


<body>
<header>
    <h1>Sprong - Guitar maintenance and repairs</h1>
    <nav>
        <ul>
            <li><a href="../inc/home.php">Home Page</a></li>
            <li><a href="../inc/contact.php">Contact us</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                //  User successfully logged in, so show appropriate links:
                echo "<li><a href='../inc/requestWork.php'>Request work</a></li>";
                echo "<li><a href='../inc/viewJobStatus.php'>View / update work progress</a></li>";
                echo "<li><a href='../inc/logout.php'>Logout</a></li>";
            } else {
                //  User is not logged in, so display a login link:
                echo "<li><a href='../inc/login.php'>Login</a></li>";
            }
            ?>

        </ul>
    </nav>
</header>
</body>
</html>
