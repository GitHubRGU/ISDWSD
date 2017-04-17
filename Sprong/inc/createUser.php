<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

include("header.php");

echo "
<main>
<p>To create your account, please enter your details below, click on the Create User button, then log in to Sprong.</p>

            <form method=\"post\" action=\"createUser.php\"><br>
            
            
            
<table>

<tr><td><label for=\"firstname\">First name:</label>                
  <td><input type=\"text\" name=\"firstname\" id=\"firstname\" size=\"40\">

<tr><td><label for=\"surname\">Surname:</label>                
  <td><input type=\"text\" name=\"surname\" id=\"surname\" size=\"40\">

<tr><td><label for=\"username\">Username:</label>                
  <td><input type=\"text\" name=\"username\" id=\"username\" size=\"40\">
  
<tr><td><label for=\"password\">Password:</label>                
  <td><input type=\"text\" name=\"password\" id=\"password\" size=\"40\">
  
<tr><td><label for=\"address1\">Address line 1:</label>                
  <td><input type=\"text\" name=\"address1\" id=\"address1\" size=\"40\">
    
<tr><td><label for=\"address2\">Address line 2:</label>                
  <td><input type=\"text\" name=\"address2\" id=\"address2\" size=\"40\">
      
<tr><td><label for=\"address3\">Address line 3:</label>                
  <td><input type=\"text\" name=\"address3\" id=\"address3\" size=\"40\">
    
    
</table>
            
            
            
            
            
            
            
                <label>First name:</label>
                <input type=\"text\" name=\"firstname\" placeholder=\"First name\"/><br>
                <label>Surname:</label>
                <input type=\"text\" name=\"surname\" placeholder=\"Surname\"/><br>
                <label>Username:</label>
                <input type=\"text\" name=\"username\" placeholder=\"Enter username here\"/><br>
                <label>Password:</label>
                <input type=\"password\" name=\"password\" placeholder=\"Enter password here\"/><br>
                <label>Address line 1:</label>
                <input type=\"text\" name=\"address1\" placeholder=\"Address line 1\"/><br>
                <label>Address line 2:</label>
                <input type=\"text\" name=\"address2\" placeholder=\"Address line 2\"/><br>
                <label>Address line 3:</label>
                <input type=\"text\" name=\"address3\" placeholder=\"Address line 3\"/><br>
                <label>Postcode:</label>
                <input type=\"text\" name=\"postcode\" placeholder=\"Postcode\"/><br>
                <label>Telephone:</label>
                <input type=\"text\" name=\"telephone\" placeholder=\"Telephone\"/><br>
                <label>Email:</label>
                <input type=\"text\" name=\"email\" placeholder=\"Email\"/><br><br>
                <input type=\"submit\" name=\"submit\" value=\"Create user\"/>
            </form>
            <div class=\"error\"><?php // echo error;?><?php // echo $username; echo $password?></div>


</main>
";

include("footer.php");

?>


</body>
</html>