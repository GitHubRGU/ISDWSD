<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>




<?php


include ("connection.php");
include ("header.php");

//   DEBUGGING
//   echo "<p>params = " . $params . "</p>";



  $jobnum = $params['jobID'];




echo"<main>";


echo "<p>REAL viewJobProgress.php</p>";

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$lastWord = substr($url, strrpos($url, '/') + 1);
echo "<p>" . $lastWord . "</p>";


//  SQL query string to retrieve all job titles the database:
$sql_query="SELECT * FROM jobs WHERE jobnum = '" . $lastWord . "'";

//   DEBUGGING:
//   echo "$sql_query";


//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);

while($row = $result->fetch_array())
{
    $jobid = $row['jobid'];
    $jobname = $row['jobname'];
    $jobowner = $row['jobowner'];
    $jobtext = $row['jobtext'];

echo "
<job>
<h2>{$jobname}</h2>
<h3>for {$jobowner}</h3>
{$jobtext}
</job>";
}

echo "</main>
";

include ("footer.php");
?>






</body>
</html>