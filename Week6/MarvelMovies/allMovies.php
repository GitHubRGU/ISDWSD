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

    echo "Step B";
    // execute the SQL query
    $result = $link->query($sql_query);

    echo "Step C";
    // We can then process the results from this (step 4)
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    // process the $row
    echo $sql_query;
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo "<p>".$row."</p>";
    }

    echo "Step D";
    $result->close();

    echo "Step E";
    // close connection to database
    $link->close();

    echo "Step F";




    ?>

    <BR>
    <p>All done!</p>


</main>


</body>
</html>