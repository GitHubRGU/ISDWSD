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

$lastWord = substr($url, strrpos($url, '/') + 1);
echo "<p>" . $lastWord . "</p>";


echo"<main>";


echo "<p>viewJobProgress.php</p>";


//  SQL query string to retrieve all job titles the database:
$sql_query="SELECT * FROM jobs WHERE jobnum = '" . $jobnum . "'";

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