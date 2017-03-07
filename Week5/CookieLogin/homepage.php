<?php
/**
 * Created using PhpStorm.
 */

//  $username="Mike";
//  $password="mysecretpassword";

print "Triggered the php!!!";
print ":-)";

$username=$_POST["name"];
$password=$_POST["password"];

print $username;
print $password;

if($username=="Mike" AND $password=="mysecretpassword") {
    setcookie("access_level", "standarduser");
    }
    else
    print "WRONG USERNAME OR PASSWORD";

//  Function to display which User Level you've logged in as
function displayAccessLevelInformation($access_level){
    if($access_level=="standarduser"){
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif($access_level=="root"){
        echo "<p>You are currently logged in as root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

displayAccessLevelInformation($access_level);


?>
