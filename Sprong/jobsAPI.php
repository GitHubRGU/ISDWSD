<html>
<head>
    <title>Use of Sprong API (jobs) table</title>
</head>
<body>


<?php

//  Use the API to retrieve query results:
$data = file_get_contents('http://sprong.azurewebsites.net/Sprong/api.php/jobs');

//  Decode the JSON data:
$jobs = json_decode($data);

?>


<table>
    <tbody>
    <tr>
        <th>Job number</th>
        <th>Job title</th>
        <th>Job text</th>
    </tr>

    <?php
    foreach ($jobs as $job) {
        echo '<tr>';
        echo '<td>' . $job->firstname . '</td>';
        echo '<td>' . $job->surname . '</td>';
        echo '<td>' . $job->email . '</td>';
        echo '</tr>';
    }
    ?>

    </tbody>
</table>


</body>
</html>