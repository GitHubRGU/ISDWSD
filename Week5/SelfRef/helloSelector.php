<?php
/**
 * Created by PhpStorm.
 * User: 1615309
 * Date: 09/03/2017
 * Time: 13:39
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World 2.0</title>
</head>
<body>

<header>
    <h1>Where would you like to say hello?</h1>
</header>

<main>
    <br>
    <h3>Plain links:</h3>
    <p><a href="helloPrinter.php">Earth</a></p>
    <p><a href="helloPrinter.php">Mars</a></p>
    <p><a href="helloPrinter.php">Uranus</a></p>
    <br>

    <h3>Extended links:</h3>
    <p><a href="helloPrinter.php?query=Earth&type=planet">Earth</a></p>
    <p><a href="helloPrinter.php?query=Mars&type=planet">Mars</a></p>
    <p><a href="helloPrinter.php?query=Uranus&type=planet">Uranus</a></p>

    <br>
    <br>
</main>

<footer>
    <p>(C) Shaun Hyland (RGU 2017)</p>
</footer>

</body>
</html>
