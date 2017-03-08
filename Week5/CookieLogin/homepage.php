<?php


//  Function to display which User Level you've logged in with:
function displayAccessLevelInformation($accessLevel){
    if($accessLevel=="standarduser"){
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif($accessLevel=="root"){
        echo "<p>You are currently logged in as root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}


$username=$_POST["name"];
$password=$_POST["password"];

//  Show the Username and Password entered:
print "<p>Username: ".$username."</p>";
print "<p>Password: ".$password."</p>";

if($username=="Mike" AND $password=="mysecretpassword") {
    setcookie("access_level", "standarduser");
    $accessLevel="standarduser";
    }
if($username=="Mike" AND $password=="myrootpassword") {
    setcookie("access_level", "root");
    $accessLevel="root";
    }
else
    print "<p>WRONG USERNAME OR PASSWORD ENTERED</p>";




displayAccessLevelInformation($accessLevel);
print "<p></p>";

?>
