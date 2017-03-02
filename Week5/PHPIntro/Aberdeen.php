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
    $myage="17";

    print "Hello, " . $name;
    print "<p></p>";
    print "Your age is " . $myage;
    print "<p></p>";
    if($myage>"21"){
        print "You can buy sausage rolls";
        print "<p></p>";
    }
    elseif($myage>"18"){
        print "You can buy mugs";
        print "<p></p>";
    }
    elseif($myage>"16"){
        print "You can buy specs";
        print "<p></p>";
    }
    else
    print "You can't buy anything";

    print "<p></p>";
    print "<p></p>";


    // Activity 2:

    $wantedgood="sausage rolls";

    switch($wantedgood) {
        case $wantedgood == "mugs":
            echo "You have to be 18 to buy mugs";
            print "<p></p>";
            break;
        case $wantedgood == "specs":
            echo "You need to be 16 to buy specs";
            print "<p></p>";
            break;
        case $wantedgood == "sausage rolls":
            echo "You need to be 21 to buy sausage rolls";
            print "<p></p>";
            break;
        default:
            echo "You need to be over 16 to buy anything";
            print "<p></p>";
    }

    print "<p></p>";
    print "<p></p>";


    // Activity 3:

    $provisionedActivities=array("Specs","Mugs","Sausage Rolls");

    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    print "<p></p>";
    print "<p></p>";

    $provisionedActivities[1]="Hugs";
    unset($provisionedActivities[2]);

    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    print "<p></p>";
    print "<p></p>";


    // Activity 4:


    for($day=1;$day<32;$day++)
    {
        print "On the " . $day . " of the month ";
        if($day=="1"){
            print "no products";
        }
        if(!is_int($day/2) and !is_int($day/3) and !is_int($day/4)){
            print "no products";
        }
        if(is_int($day/2)){
            print "specs";
            if(is_int($day/3) or is_int($day/4)){
                print " and ";
            }
        }
        if(is_int($day/3)){
            print "mugs";
            if(is_int($day/4)){
                print " and ";
            }
        }
        if(is_int($day/4)){
            print "sausage rolls";
        }
        print " are available";
        print "<p></p>";

    }




    ?>
</p>

</body>
</html>
