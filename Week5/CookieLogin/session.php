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


$_SESSION['username']=["name"];
$_SESSION['password']=["password"];


//  Show the Username and Password entered:
print "<p>Username: ".$_SESSION['username']."</p>";
print "<p>Password: ".$_SESSION['password']."</p>";


/*if($_SESSION['username']=="Mike" AND $_SESSION['password']=="mysecretpassword") {
    $_SESSION['access_level']="standarduser";
}
if($_SESSION['username']=="Mike" AND $_SESSION['password']=="myrootpassword") {
    $_SESSION['access_level']="root";
}
else
    print "<p>WRONG USERNAME OR PASSWORD ENTERED</p>";*/




displayAccessLevelInformation($_SESSION['access_level']);
print "<p></p>";


?>
