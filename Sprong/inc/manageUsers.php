<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

//  Establish connection to Azure mySQL database ($link):
include("connection.php");

include("header.php");



session_start();
if (isset($_SESSION['username']))
{
//  Session has been set, so a user is logged in:
//   DEBUGGING:
//   echo "<p>User is logged in!</p>";

//  Build SQL query string to insert the new user into the database:
$username = $_SESSION['username'];
$sql_query="SELECT * FROM users WHERE username='" . $username . "'";

//   DEBUGGING: Show me what the query string looks like:
//   echo "<p>SQL query string: " . $sql_query . "</p>";

//  Run the SQL query on the database:
$result = mysqli_query($link,$sql_query);
$row = mysqli_fetch_assoc($result);
$uid = $row['uid'];

//   DEBUGGING
//   echo "Answer = " . $row['uid'];

//  Use query results to store the untouched detailsin the database:
    $initFirstname = $row['firstname'];
    $initSurname = $row['surname'];
    $initUsername = $row['username'];
    $initPassword = $row['password'];
    $initAddress1 = $row['address1'];
    $initAddress2 = $row['address2'];
    $initAddress3 = $row['address3'];
    $initPostcode = $row['postcode'];
    $initTelephone = $row['telephone'];
    $initEmail = $row['email'];


//  $_POST has been triggered, so the "Update user info" has been clicked -
//  push all the data to the user table:
if ($_POST) {
    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $address3 = $_POST["address3"];
    $postcode = $_POST["postcode"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

//  Build SQL query string to insert the new user into the database:
//  W3 School syntax = UPDATE table_name SET column1=value, column2=value2,...  WHERE some_column=some_value
    $sql_query="UPDATE users SET firstname='" . $firstname . "', surname='" . $surname . "', username='" . $username . "', password='" . $password . "', address1='" . $address1 . "', address2='" . $address2 . "', address3='" . $address3 . "', postcode='" . $postcode . "', telephone='" . $telephone . "', email='" . $email . "' WHERE uid='" . $uid . "'";

//   DEBUGGING: Show me what the query string looks like:
//   echo "<p>SQL query string: " . $sql_query . "</p>";

//  Run the SQL query on the database - DON'T SWITCH THIS ON UNTIL YOU'RE SURE IT'S CORRECT!!!:
    $result = mysqli_query($link,$sql_query);

//  Close the link to the mySQL database:
    mysqli_close($link);
}


//  Same form as createUser.php, but filled in with the information that is already in the database:
echo "
<main>
<p>To update your account information, please amend your details below, then click the Save updated details button.</p>

<form method=\"post\" action=\"manageUsers.php\">

<table>
<tr><td><label for=\"firstname\">First name:</label><td><input type=\"text\" name=\"firstname\" value=\"$initFirstname\" id=\"firstname\" size=\"40\">
<tr><td><label for=\"surname\">Surname:</label><td><input type=\"text\" name=\"surname\" id=\"surname\" value=\"$initSurname\" size=\"40\">
<tr><td><label for=\"username\">Username:</label><td><input type=\"text\" name=\"username\" id=\"username\" value=\"$initUsername\" size=\"40\">
<tr><td><label for=\"password\">Password:</label><td><input type=\"text\" name=\"password\" id=\"password\" value=\"$initPassword\" size=\"40\">
<tr><td><label for=\"address1\">Address line 1:</label><td><input type=\"text\" name=\"address1\" id=\"address1\" value=\"$initAddress1\" size=\"40\">
<tr><td><label for=\"address2\">Address line 2:</label><td><input type=\"text\" name=\"address2\" id=\"address2\" value=\"$initAddress2\" size=\"40\">
<tr><td><label for=\"address3\">Address line 3:</label><td><input type=\"text\" name=\"address3\" id=\"address3\" value=\"$initAddress3\" size=\"40\">
<tr><td><label for=\"postcode\">Postcode:</label><td><input type=\"text\" name=\"postcode\" id=\"postcode\" value=\"$initPostcode\" size=\"40\">
<tr><td><label for=\"telephone\">Telephone:</label><td><input type=\"text\" name=\"telephone\" id=\"telephone\" value=\"$initTelephone\" size=\"40\">
<tr><td><label for=\"email\">Email:</label><td><input type=\"text\" name=\"email\" id=\"email\" value=\"$initEmail\" size=\"40\">
</table>

<br>            
<input type=\"submit\" name=\"submit\" value=\"Save updated details\"/><br>
</form>


</main>
";

//  Let the user know their account details have been updated:
if ($_POST) {
    $message = "Your details have been updated.";
    echo "<script type='text/javascript'>alert('$message');</script>";

//    echo "<p><h4>Account details updated - click View/Update my details to confirm!</h4></p>";
    header("location:../inc/manageUsers.php");
}


include("footer.php");

} else {
    //  User is not logged in, so send them to the home page:
    header("location:../inc/home.php");
}

?>


</body>
</html>
