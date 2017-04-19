<?php

include ("connection.php");
include ("header.php");

$jobid = $params['jobid'];
echo"<main>";

//  SQL query string to retrieve all job titles the database:
$sql_query="SELECT * FROM jobs WHERE jobid = '$jobid'";

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


