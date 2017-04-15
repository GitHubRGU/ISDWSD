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
            <li><a href="./">Home Page</a></li>
            <li><a href="viewJobStatus">View / update work progress</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<li><a href='requestWork'>Request work</a></li>";
            } else {
                echo "<li><a href='login'>Login</a></li>";
            }
            ?>

        </ul>
    </nav>
</header>
</body>
</html>
