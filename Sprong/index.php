<!doctype html>
<html>
<style>
    html {
        background: url(./images/lpmbackground.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/style.css" type="text/css" />
<body>

<?php

include("inc/header.php");


//  Establish connection to Azure mySQL database ($link):
include("inc/connection.php");

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //  User not logged in:
    'createUser' => "/createUser",
    'login' => "/login",
    //  User logged in:
    'manageUsers' => "/manageUsers",
    'requestWork' => "/requestWork",
    'viewAllJobs' => "/viewAllJobs",
    'viewJobProgress' => "/viewJobProgress/(?'jobID'[\w\-]+)",
    'logout' => "/logout",
    //  Always present:
    'contact' => "/contact",
    'home' => "/"
);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

//  Nothing found, so 404 error:
    include(INCLUDE_DIR . '404.php');



echo "
<main>

<p>Welcome to Sprong, the home of quality guitar maintenance and repair.</p>
<p>Your gateway to a perfectly set up instrument!</p>
<p>Sprong employ a team of three experienced luthiers, offering the following services:</p>
<ul>
  <li>Restring</li>
  <li>Change of string gauge</li>
  <li>Full instrument setup, to customers requirements / specifications</li>
  <li>Instrument repairs</li>
  <li>Clean up and restoration</li>
  <li>Replacement of hardware / electronics</li>
  <li>Fault finding and problem resolution</li>
</ul> 
<p>If you'd like us to undertake any of the above work on your instrument, please log in to your account, or register as a new user using the Register link above.</p>
<p>To view the current status of an existing work order, please log in using the Login link above.</p>


</main>
";


include("inc/footer.php");

?>
</body>
