<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aberdeen Folk</title>
</head>
<body>
<p>
    <?php

    //  Activity 1:

    $name="Shaun";
    $myage="12";

    print "Hello, " . $name;
    print "<p></p>";
    print "Your age is " . $myage;
    print "<p></p>";
    if($myage>"21"){
        print "You can buy sausage rolls";
    }
    elseif($myage>"18"){
        print "You can buy mugs";
    }
    elseif($myage>"16"){
        print "You can buy specs";
    }
    else
    print "You can't buy anything";


    // Activity 2:

    $wantedgood="specs";

    switch($wantedgood) {
        case $wantedgood = "mugs":
            echo "You have to be 18 to buy mugs";
            break;
        case $wantedgood = "specs":
            echo "You need to be 16 to buy specs";
            break;
        case $wantedgood = "sausage rolls":
            echo "You need to be 21 to buy sausage rolls";
            break;
        default:
            echo "You need to be over 16 to buy anything";
    }


    // Activity 3:

    $provisionedActivities=array("Specs","Mugs","Sausage Rolls");

    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }




    ?>
</p>

</body>
</html>
