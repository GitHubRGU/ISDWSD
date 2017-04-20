<!doctype html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="../CSS/style.css" type="text/css" />


<style>
    * { margin: 0; padding: 0; }

    html {
        background: url(../images/background.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    #page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
    p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
</style>


<body>


<?php

include("../inc/header.php");

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
<p>Log in to view the current status of your existing work order, using the link above.</p>


</main>
";

include("../inc/footer.php");

?>


</body>
</html>


