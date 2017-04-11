<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All movies</title>
</head>
<body>


<header>
    <h1>Marvel Movies</h1>
</header>

<main>
    <BR>
    <p>All Marvel Movies</p>
</main>


<?

// Connect to my Azure account and WebApp + database:

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

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
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


// create a SQL query as a string
$sql_query = "SELECT * FROM marvelmovies";
// execute the SQL query
$result = $link->query($sql_query);
// We can then process the results from this (step 4)
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
// process the $row


while($row = $result->fetch_array()){
    // print out fields from row of data
    echo "<p>".$row['title']."</p>";
}


$result->close();
// close connection to database
$link->close();




?>

</body>
</html>