<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<style>
    html {
        background: url(../images/lpmbackground.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<body>


<?php

//  Confirm that user is logged in (session exists):
session_start();
if (isset($_SESSION['username'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include("header.php");
        ?>
        <main>
            <form method="post" action="requestWork.php"><br>
                <label>Job title</label><br>
                <input type="text" name="password" placeholder="Enter a short description"/><br><br>
                <input type="submit" name="submit" value="Submit request"/>
            </form>
        </main>

        <?php
        //  include("footer.php");
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('connection.php');
        $jobNum = str_replace(' ', '-', $_POST['jobtitle']);
        $jobName = $_POST['jobname'];
        $jobText = $_POST['jobtext'];
        $jobOwner = $_SESSION['username'];

        $sql = "INSERT INTO jobs (jobnum, jobtitle, jobtext, jobowner) VALUES ('" . $jobNum . "', '" . $jobName . "', '" . $jobText . "', '" . $jobOwner . "')";

        //   DEBUGGING:
        echo "<p>SQL query string: " . $sql_query . "</p>";



        //  DON'T EXECUTE THE SQL QUERY UNTIL IT'S DEFINITELY CORRECT:
//        if (mysqli_query($link, $sql_query)) {
//        } else {
//            echo "Error: " . $sql . "<br>Error Message: " . mysqli_error($link);
//        }
        header("requestWork");
    }

} else {
    header("location:login");
}


include("footer.php");

?>


</body>
</html>