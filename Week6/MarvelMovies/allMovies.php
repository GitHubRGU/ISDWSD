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

    echo "Step 1";
    // create an SQL query as a string
    $sql_query = "SELECT * FROM ldbmm";

    echo "Step 2";
    // execute the SQL query
    $result = $link->query($sql_query);

    echo "Step 3";
    // We can then process the results from this (step 4)
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    // process the $row


    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo "<p>".$row."</p>";
    }

    echo "Step 4";
    $result->close();

    echo "Step 5";
    // close connection to database
    $link->close();

    echo "Step 6";




    ?>

    <BR>
    <p>All done!</p>


</main>


</body>
</html>