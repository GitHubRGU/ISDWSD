<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

//  Establish connection to Azure mySQL database ($link):
include("connection.php");

include("header.php");

//  $_POST has been triggered, so the "Create New Account" button has been clicked -
//  push all the data to the user table:
if ($_POST) {
    $firstname = test_input($_POST["firstname"]);
    $surname = test_input($_POST["surname"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $address1 = test_input($_POST["address1"]);
    $address2 = test_input($_POST["address2"]);
    $address3 = test_input($_POST["address3"]);
    $postcode = test_input($_POST["postcode"]);
    $telephone = test_input($_POST["telephone"]);
    $email = test_input($_POST["email"]);


//  Function to check entered data and avoid Cross Site Scripting attacks:
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}


//  Build SQL query string to insert the new user into the database:
    $sql_query="INSERT INTO users (firstname, surname, username, password, address1, address2, address3, postcode, telephone, email) VALUES ('" . $firstname . "', '" . $surname . "', '" . $username . "', '" . $password . "', '" . $address1 . "', '" . $address2 . "', '" . $address3 . "', '" . $postcode . "', '" . $telephone . "', '" . $email . "')";

//   DEBUGGING: Show me what the query string looks like:
//    echo "<p>SQL query string: " . $sql_query . "</p>";

//  Run the SQL query on the database:
    $result = mysqli_query($link,$sql_query);

//  Close the link to the mySQL database:
    mysqli_close($link);
}




echo"

<main>
<p>To create your account, please enter your details below, click on the Create New Account button, then log in to Sprong.</p>

<form method=\"post\" action=\"NEWcreateUser.php\">

<table>
<tr><td><label for=\"firstname\">First name:</label><td><input type=\"text\" name=\"firstname\" id=\"firstname\" size=\"40\">
<tr><td><label for=\"surname\">Surname:</label><td><input type=\"text\" name=\"surname\" id=\"surname\" size=\"40\">
<tr><td><label for=\"username\">Username:</label><td><input type=\"text\" name=\"username\" id=\"username\" size=\"40\">
<tr><td><label for=\"password\">Password:</label><td><input type=\"text\" name=\"password\" id=\"password\" size=\"40\">
<tr><td><label for=\"address1\">Address line 1:</label><td><input type=\"text\" name=\"address1\" id=\"address1\" size=\"40\">
<tr><td><label for=\"address2\">Address line 2:</label><td><input type=\"text\" name=\"address2\" id=\"address2\" size=\"40\">
<tr><td><label for=\"address3\">Address line 3:</label><td><input type=\"text\" name=\"address3\" id=\"address3\" size=\"40\">
<tr><td><label for=\"postcode\">Postcode:</label><td><input type=\"text\" name=\"postcode\" id=\"postcode\" size=\"40\">
<tr><td><label for=\"telephone\">Telephone:</label><td><input type=\"text\" name=\"telephone\" id=\"telephone\" size=\"40\">
<tr><td><label for=\"email\">Email:</label><td><input type=\"text\" name=\"email\" id=\"email\" size=\"40\">
</table>

<br>            
<input type=\"submit\" name=\"submit\" value=\"Create New Account\"/><br>
</form>


</main>
";

//  Let the user know their account has been created:
if ($_POST) {
    echo "<p><h4>Account created!</h4></p>";
    echo "<p>Please return to the home page and log in.</p>";
}


include("footer.php");

?>


</body>
</html>