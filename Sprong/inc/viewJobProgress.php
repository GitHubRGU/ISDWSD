<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="http://sprong.azurewebsites.net/Sprong/CSS/style.css" type="text/css" />

<?php include $_SERVER.'/inc/background.html'; ?>

<body>


<?php

include ("connection.php");
include ("header.php");

echo"<main>";

//  URL will have the jobnum value appended after the final "/",
//  read this into variable "$lastWord" and use for the query:
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$lastWord = substr($url, strrpos($url, '/') + 1);

//   DEBUGGING
//   echo "<p>" . $lastWord . "</p>";


//  SQL query string to retrieve the jobtitle from the database:
$sql_query="SELECT DISTINCT jobtitle FROM jobs WHERE jobnum = '" . $lastWord . "'";

//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_assoc($result);
$jobtitle = $row['jobtitle'];

//  Echo out $jobtitle, to use as title text for the history list:
echo "<p>Request: " . $_SERVER['REQUEST_URI'] . "</p>";

echo "<p><h2>History for work order: " . "$jobtitle</h2></p>";


//  SQL query string to retrieve ALL data for the appropriate jobnum from the database:
$sql_query="SELECT * FROM jobs WHERE jobnum = '" . $lastWord . "'";

//   DEBUGGING:
//   echo "$sql_query";

//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);

//  Work through the array returned and display the job history:
while($row = $result->fetch_array())
{
    $jobtext = $row['jobtext'];
    $jobstatus = $row['jobstatus'];
    echo "<p>{$jobtext}" . "  (Status: " . "{$jobstatus})</p>";
}

echo "</main>
";

include ("footer.php");
?>






</body>
</html>