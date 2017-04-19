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
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/home.php''>Home Page</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/contact.php'>Contact us</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/manageUsers.php'>View/update my details</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/requestWork.php'>Request work</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/viewAllJobs.php'>View / update jobs</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/logout.php'>Logout</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/uploadPhoto.php'>UPLOAD</a></li>";
            } else {
                //  User is not logged in, so display basic links:
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/home.php''>Home Page</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/contact.php'>Contact us</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/createUser.php'>Create new account</a></li>";
                echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/login.php'>Login</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>
</body>
</html>
