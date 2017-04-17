<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />
<body>


<?php

include("header.php");

echo "
<main>
<p>createUsers.php.</p>



            <form method=\"post\" action=\"createUser.php\"><br>
                <label>First name:</label>
                <input type=\"text\" name=\"firstname\" placeholder=\"First name\"/><br><br>
                <label>Surname:</label>
                <input type=\"text\" name=\"surname\" placeholder=\"Surname\"/><br><br>
                <label>Username:</label>
                <input type=\"text\" name=\"username\" placeholder=\"Enter username here\"/><br><br>
                <label>Password:</label>
                <input type=\"password\" name=\"password\" placeholder=\"Enter password here\"/><br><br>
                <label>Address line 1:</label>
                <input type=\"text\" name=\"address1\" placeholder=\"Address line 1\"/><br><br>
                <label>Address line 2:</label>
                <input type=\"text\" name=\"address2\" placeholder=\"Address line 2\"/><br><br>
                <label>Address line 3:</label>
                <input type=\"text\" name=\"address3\" placeholder=\"Address line 3\"/><br><br>
                <label>Postcode:</label>
                <input type=\"text\" name=\"postcode\" placeholder=\"Postcode\"/><br><br>
                <label>Telephone:</label>
                <input type=\"text\" name=\"telephone\" placeholder=\"Telephone\"/><br><br>
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