<?php

$connectstr_dbhost = 'waws-prod-db3-081.ftp.azurewebsites.windows.net';
$connectstr_dbname = 'MMovies';
$connectstr_dbusername = 'shaun.hyland@live.co.uk';
$connectstr_dbpassword = 'DarthJan01';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link=mysqli_connect($connectstr_dbhost,$connectstr_dbusername,$connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<p></p>";
    echo "Debugging error number: " . mysqli_connect_errno() . PHP_EOL;
    echo "<p></p>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



$sql_query = "SELECT * FROM marvelmovies WHERE title LIKE '%spider%'";
$result = $link->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['title'] . "</p>";
}

$result->close();
// close connection to database
$link->close();


?>