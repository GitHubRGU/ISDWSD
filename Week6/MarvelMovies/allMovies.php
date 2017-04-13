<?php
include ("ConnectionString.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All movies</title>
</head>
<body>


<header>
    <h1>Marvel Movies</h1>
</header>

<main>
    <BR>
    <p>ALL of the Marvel Movies</p>



    <?

    echo "<p>Step A</p>";
    // create an SQL query as a string
    $sql_query = "SELECT * FROM ldbmm";

    echo "<p>Step B</p>";
    // execute the SQL query
    $result = $link->query($sql_query);

    echo "<p>Step C</p>";
    // We can then process the results from this (step 4)
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    // process the $row
    echo "<p>Query: " . $sql_query . "</p>";
    echo "<p>Result: " . $result . "</p>";
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo "<p>".$row."</p>";
    }

    echo "<p>Step D</p>";
    $result->close();

    echo "<p>Step E</p>";
    // close connection to database
    $link->close();

    echo "<p>Step F</p>";




    ?>

    <BR>
    <p>All done!</p>


</main>


</body>
</html>