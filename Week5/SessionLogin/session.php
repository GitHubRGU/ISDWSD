<?php
session_start();

//  Session test


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


//  $_SESSION['username']=["name"];
//  $_SESSION['password']=["password"];


$username=$_POST['name'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
$_SESSION['login_password']=$password;


//  Show the Username and Password entered:
print "<p>Username: ".$_SESSION['login_user']."</p>";
print "<p>Password: ".$_SESSION['login_password']."</p>";


if($_SESSION['login_user']=="Mike" AND $_SESSION['login_password']=="mysecretpassword") {
    $access_level="standarduser";
}
if($_SESSION['login_user']=="Mike" AND $_SESSION['login_password']=="myrootpassword") {
    $access_level="root";
}
else
    print "<p>WRONG USERNAME OR PASSWORD ENTERED</p>";




displayAccessLevelInformation($access_level);
print "<p></p>";


?>
