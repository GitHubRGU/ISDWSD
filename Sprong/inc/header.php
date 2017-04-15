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
            <li><a href="../inc/viewJobStatus.php">View / update work progress</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<li><a href='../inc/requestWork.php'>Request work</a></li>";
            } else {
                echo "<li><a href='../inc/login.php'>Login</a></li>";
            }
            ?>

        </ul>
    </nav>
</header>
</body>
</html>
