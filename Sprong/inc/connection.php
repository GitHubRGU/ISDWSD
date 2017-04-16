<?

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

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    print "<p></p>";
    echo "Debugging error number: " . mysqli_connect_errno() . PHP_EOL;
    print "<p></p>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    print "<p></p>";
    exit;
}

echo "Woohoo: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
print "<p></p>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
print "<p></p>";


echo "dbhost: " . $connectstr_dbhost;
print "<p></p>";
echo "username: " . $connectstr_dbusername;
print "<p></p>";
echo "dbpassword: " . $connectstr_dbpassword;
print "<p></p>";
echo "dbname: " . $connectstr_dbname;
print "<p></p>";




echo "<p>Step A</p>";
// create an SQL query as a string
$sql_query = "SELECT * FROM users";

echo "<p>Step B</p>";
// execute the SQL query
$result = $link->query($sql_query);

echo "<p>Step C(1)</p>";
// We can then process the results from this
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
// process the $row
echo "<p>Query: " . $sql_query . "</p>";
echo "<p>Step C(2)</p>";
echo "<p>Result: " . var_dump($result) . "</p>";
while($row = $result->fetch_array()){
    // print out fields from row of data
    echo "<p>".$row."</p>";
}

echo "<p>Step D</p>";
$result->close();

echo "<p>Step E</p>";
// close connection to database
$link->close();

echo "<p>Step F</p>";









mysqli_close($link);

?>

