<?php

//  Sprong API
//  ==========


//  Get the HTTP method (GET, POST, PUT or DELETE) of the request ($method):
$method = $_SERVER['REQUEST_METHOD'];

//  Get the path of the request ($request):
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

//  Get the body of the request ($input):
$input = json_decode(file_get_contents('php://input'),true);

//  Open a connection to the mySQL database ($link):
include("inc/connection.php");
//  IS THIS REQUIRED?:
//  mysqli_set_charset($link,'utf8');

//  Get the table and key (uid) from the path ($table and $key):
$table = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
$key = array_shift($request)+0;

//  Get the columns and values from the input object ($columns and $values):
$columns = preg_replace('/[^a-z0-9_]+/i','',array_keys($input));
$values = array_map(function ($value) use ($link) {
    if ($value===null) return null;
    return mysqli_real_escape_string($link,(string)$value);
},array_values($input));

//  Create the SET part of the SQL command (required for PUT or POST methods) ($set):
$set = '';
for ($i=0;$i<count($columns);$i++) {
    $set.=($i>0?',':'').'`'.$columns[$i].'`=';
    $set.=($values[$i]===null?'NULL':'"'.$values[$i].'"');
}

//  Generate the SQL query, based on HTTP method ($sql):
switch ($method) {
    case 'GET':
        $sql = "select * from `$table`".($key?" WHERE uid=$key":''); break;
    case 'PUT':
        $sql = "update `$table` set $set where uid=$key"; break;
    case 'POST':
        $sql = "insert into `$table` set $set"; break;
    case 'DELETE':
        $sql = "delete `$table` where uid=$key"; break;
}

//  Excecute the SQL query ($result):
$result = mysqli_query($link,$sql);

//   Drop the connection if the SQL query ($result) returned an error:
if (!$result) {
    http_response_code(404);
    die(mysqli_error($link));
}

//  Display query results / the inserted uid or number of affected rows:
if ($method == 'GET') {
    if (!$key) echo '[';
    for ($i=0;$i<mysqli_num_rows($result);$i++) {
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$key) echo ']';
} elseif ($method == 'POST') {
    echo mysqli_insert_id($link);
} else {
    echo mysqli_affected_rows($link);
}

//  Close the database connection:
mysqli_close($link);
