<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

//  Confirm that user is logged in (session exists):
session_start();
if (isset($_SESSION['username'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include("header.php");
        ?>
        <main>
            <form action="requestWork.php" method="post">
                <input type="text" name="requestName" placeholder="Short description of work">
                <input type="submit">
            </form>
        </main>

        <?php
        include("footer.php");
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