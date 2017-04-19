<!doctype html>
<html>
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
    'viewJobProgress' => "/viewAllJobs/(?'jobID'[\w\-]+)",
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

<p>Welcome back to Sprong, the home of quality guitar maintenance and repair.</p>
<p></p>
<p>This is where you can check on the history and status of your requested work.</p>
<p></p>
<p>To view the current status of your existing work order, please use the View / Update link above.</p>


</main>
";



include("inc/footer.php");

?>
</body>
