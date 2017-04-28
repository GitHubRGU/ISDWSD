<html>
<head>
    <title>Use of Sprong API (jobs) table</title>
</head>
<body>


<?php

//  Use the API to retrieve query results:
$data = file_get_contents('http://sprong.azurewebsites.net/Sprong/api.php/jobs');

//  Decode the JSON data:
$users = json_decode($data);

?>


<table>
    <tbody>
    <tr>
        <th>First name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>User Type</th>
    </tr>

    <?php
    foreach ($users as $user) {
        echo '<tr>';
        echo '<td>' . $user->firstname . '</td>';
        echo '<td>' . $user->surname . '</td>';
        echo '<td>' . $user->email . '</td>';
        echo '<td>' . $user->usertype . '</td>';
        echo '</tr>';
    }
    ?>

    </tbody>
</table>


</body>
</html>