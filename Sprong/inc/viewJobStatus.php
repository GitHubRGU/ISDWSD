<?php

include ("connection.php");
include ("header.php");

echo"

<main>
<h2>View Job Progress</h2>
<p>Below is a list of all work</p>
<ul>
";

//  SQL query string to retrieve all job titles the database:
$sql_query="SELECT * FROM jobs";

//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);

while($row = $result->fetch_array())
{
    $jid = $row['jid'];
    $jobtitle = $row['jobtitle'];
    $jobowner = $row['jobowner'];
    echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/viewAllJobs.php{$jid}'>{$jobtitle}</a> for {$jobowner}</li>";
}

echo "
</main>"
;

include ("footer.php");

?>

