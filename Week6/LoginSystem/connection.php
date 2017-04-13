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

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    print "<p></p>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    print "<p></p>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    print "<p></p>";
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
print "<p></p>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
print "<p></p>";


echo "dbhost: " . $connectstr_dbhost;
print "<p></p>";
echo "username: " . $connectstr_dbusername;
print "<p></p>";
echo "dbpassword:" . $connectstr_dbpassword;
print "<p></p>";
echo "dbname:" . $connectstr_dbname;
print "<p></p>";

mysqli_close($link);

?>