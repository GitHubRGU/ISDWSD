<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

include("header.php");

echo "
<main>
<p>To create your account, please enter your details below, click on the Create New Account button, then log in to Sprong.</p>

<form method=\"post\" action=\"createUser.php\">

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
<input type=\"submit\" name=\"submit\" value=\"Create New Account\"/>
</form>

<div class=\"error\"><?php // echo error;?><?php // echo $username; echo $password?></div>


</main>
";

include("footer.php");

?>


</body>
</html>