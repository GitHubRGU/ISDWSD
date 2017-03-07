<?php
/**
 * Created using PhpStorm.
 */

// $username="Mike";
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


?>

