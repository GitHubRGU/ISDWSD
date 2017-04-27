<?php

//  Sprong API
//  ==========
//
//  Can be used on the users tables to return the following information:
//
//  First name (firstname)
//  Surname (surname)
//  Email address (email)
//  User Type (usertype)
//


//  Get the path of the request ($request):
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

//  Get the body of the request ($input):
$input = json_decode(file_get_contents('php://input'),true);

//  Open a connection to the mySQL database ($link):
include("inc/connection.php");

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

//  Generate the SQL query ($sql):
        $sql = "SELECT firstname, surname, email, usertype FROM users";

//  Execute the SQL query ($result):
$result = mysqli_query($link,$sql);

//   Drop the connection if the SQL query ($result) returns a 404 (Not Found) error:
if (!$result) {
    http_response_code(404);
    die(mysqli_error($link));
}

//  Create and display a JSON encoded table of the query results:
    for ($i=0;$i<mysqli_num_rows($result);$i++) {
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }

//  Close the database connection:
mysqli_close($link);
