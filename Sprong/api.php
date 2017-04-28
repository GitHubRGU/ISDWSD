<?php

//  Sprong API
//  ==========
//
//  API to retrieve information contained in the users and jobs tables
//  in the Sprong database.
//  Information returned will depend upon which table is being queried.
//
//  A users table query returns; First Name, Surname, Email Address and User Type.
//
//  A jobs table query returns; Job Number, Job Title and Job Text.



//  Get the path of the request ($request):
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

//  Get the body of the request ($input):
$input = json_decode(file_get_contents('php://input'),true);

//  Open a connection to the mySQL database ($link):
include("inc/connection.php");

//  Get the table name (users or jobs) and primary key (uid or jid) from the path ($table and $key):
$table = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
$key = array_shift($request)+0;

//  Get the columns and values from the input object ($columns and $values):
$columns = preg_replace('/[^a-z0-9_]+/i','',array_keys($input));
$values = array_map(function ($value) use ($link) {
    if ($value===null) return null;
    return mysqli_real_escape_string($link,(string)$value);
},array_values($input));

//  Generate the SQL query, based upon which table is being queried ($sql):
if ($table == 'users') {
    $sql = "select firstname, surname, email, usertype from `$table`" . ($key ? " WHERE uid=$key" : '');
} elseif ($table == 'jobs') {
    $sql = "select jobnum, jobtitle, jobtext from `$table`" . ($key ? " WHERE jobnum=$key" : '');
}

//  Execute the SQL query ($result):
$result = mysqli_query($link,$sql);

//  ERROR HANDLING
//  ==============

//  Drop the connection if the SQL query ($result) returns a 404 (Not Found) error:
if (!$result) {
    http_response_code(404);
    echo "Status Code: 404 Not Found";
    die(mysqli_error($link));
}

//  Drop the connection if the SQL query ($result) returns a 400 (Bad Request) error:
if (!$result) {
    http_response_code(400);
    echo "Status Code: 400 Bad Request";
    die(mysqli_error($link));
}

//  Drop the connection if the SQL query ($result) returns a 500 (Internal Server Error) error:
if (!$result) {
    http_response_code(500);
    echo "Status Code: 500 Internal Server Error";
    die(mysqli_error($link));
}

//  Create and display a JSON encoded table of the query results:
echo "<p>Status Code: 200  Content:</p>";
echo var_dump($result);
if (!$key) echo '[';
    for ($i=0;$i<mysqli_num_rows($result);$i++) {
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$key) echo ']';

//  Close the database connection:
mysqli_close($link);
