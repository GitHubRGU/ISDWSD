<html>
<head>
    <link href="./CSS/style.css" rel="stylesheet" type="text/css" />
    <title>Use of Sprong API</title>
</head>
<body>

<p>Potato there</p>


<?php

$data = file_get_contents('http://sprong.azurewebsites.net/Sprong/api.php/users');
$users = json_decode($data); // decode the JSON feed

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