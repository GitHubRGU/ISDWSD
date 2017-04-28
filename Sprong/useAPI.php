<html>
<head>
    <link href="./CSS/style.css" rel="stylesheet" type="text/css" />
    <title>Use of Sprong API</title>
</head>
<body>

<p>Hello there</p>

    <?php
    $help = file_get_contents("http://sprong.azurewebsites.net/Sprong/api.php/users")
    //  $json=file_get_contents('http://sprong.azurewebsites.net/Sprong/api.php/users');
    $data =  json_decode($json);

    if (count($data->stand)) {
        // Open the table
        echo "<table>";

        // Cycle through the array
        foreach ($data->stand as $idx => $stand) {

            // Output a row
            echo "<tr>";
            echo "<td>$stand->afko</td>";
            echo "<td>$stand->positie</td>";
            echo "</tr>";
        }

        // Close the table
        echo "</table>";
    }
    ?>


</body>
</html>