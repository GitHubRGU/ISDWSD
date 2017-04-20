<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="http://sprong.azurewebsites.net/Sprong/CSS/style.css" type="text/css" />
<body>




<?php


include ("connection.php");
include ("header.php");

echo"<main>";

//  URL will have the jobnum value appended after the final "/",
//  read this into variable "$lastWord" and use for the query:
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$lastWord = substr($url, strrpos($url, '/') + 1);
echo "<p>" . $lastWord . "</p>";


//  SQL query string to retrieve all job titles the database:
$sql_query="SELECT * FROM jobs WHERE jobnum = '" . $lastWord . "'";

//   DEBUGGING:
//   echo "$sql_query";


//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);

//  Work through the array returned and display the job history:
while($row = $result->fetch_array())
{
    $jobid = $row['jobid'];
    $jobname = $row['jobname'];
    $jobowner = $row['jobowner'];
    $jobtext = $row['jobtext'];

    echo "<p>{$jobname} . {$jobowner} . {$jobtext}</p>";
}

echo "</main>
";

include ("footer.php");
?>






</body>
</html>