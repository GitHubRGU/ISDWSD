<?php
//  Establish connection to Azure mySQL database ($link):
include("connection.php");

define('INCLUDE_DIR', dirname(__FILE__) . '/inc');

$rules = array(
    //
    //  Main pages:
    'viewJobStatus' => "/viewJobStatus",
    'requestWork' => "/requestWork",
    //
    //  Admin pages:
    'login' => "/login",
    'manageUsers' => "/manageUsers",
    'logout' => "/logout",
    //
    //  Home page:
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


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login to Sprong</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css" />
</head>

<body>
<h1>Sprong Login (form with Session)</h1>
<div class="loginBox">
    <h3>Login to Sprong</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"/><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password"/><br><br>
        <input type="submit" name="submit" value="login"/>
    </form>
    <div class="error"><?php // echo error;?><?php // echo $username; echo $password?></div>
</div>
</body>
</html>
