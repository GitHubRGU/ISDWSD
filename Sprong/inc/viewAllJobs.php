<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>





<?php

include ("connection.php");
include ("header.php");

echo"

<main>
<h2>View/update Jobs</h2>
<p>Below is a list of all work, current and historical, that has been undertaken by our team of luthiers here at Sprong.</p>
<p>Please click on any of the job title links below to see the full story:</p>
<ul>
";

//  SQL query string to retrieve all job titles the database:
$sql_query="SELECT DISTINCTROW jobnum, jobtitle, jobowner FROM jobs";

//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);

while($row = $result->fetch_array())
{
    $jobnum = $row['jobnum'];
    $jobtitle = $row['jobtitle'];
    $jobowner = $row['jobowner'];
    echo "<li><a href='http://sprong.azurewebsites.net/Sprong/inc/viewJobProgress.php/{$jobnum}'>{$jobtitle}</a> for customer #{$jobowner}</li>";
}

echo "
</main>"
;

include ("footer.php");

?>




</body>
</html>