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
            <?php
            if (isset($_SESSION['username'])) {
                //  User successfully logged in, so show all appropriate links:
                echo "<li><a href='home.php''>Home Page</a></li>";
                echo "<li><a href='contact.php'>Contact us</a></li>";
                echo "<li><a href='manageUsers.php'>View/update Customer Details</a></li>";
                echo "<li><a href='requestWork.php'>Request work</a></li>";
                echo "<li><a href='viewJobStatus.php'>View / update work progress</a></li>";
                echo "<li><a href='logout.php'>Logout</a></li>";
            } else {
                //  User is not logged in, so display basic links:
                echo "<li><a href='home.php''>Home Page</a></li>";
                echo "<li><a href='contact.php'>Contact us</a></li>";
                echo "<li><a href='login.php'>Login</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>
</body>
</html>
