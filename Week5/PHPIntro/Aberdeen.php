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

    $provisionedActivities=array("no products","specs","mugs","sausage rolls");

    for($day=1;$day<31;$day++)
    {
        // Test for first day of the month
        print "On the " . $day . " of the month ";
        if($day=="1"){
            print $provisionedActivities[0];
        }
        // Test for not a multiple of 2, 3 or 4 using !is_int()
        elseif(!is_int($day/2) and !is_int($day/3) and !is_int($day/4)){
            print $provisionedActivities[0];
        }
        // Test for not a multiple of 2, using is_int()
        if(is_int($day/2)){
            print $provisionedActivities[1];
            // Need an " and " inserted if day is also a multiple of 3 or 4
            if(is_int($day/3) or is_int($day/4)){
                print " and ";
            }
        }
        // Test for not a multiple of 3, using is_int()
        if(is_int($day/3)){
            print $provisionedActivities[2];
            // Need an " and " inserted if day is also a multiple of 4
            if(is_int($day/4)){
                print " and ";
            }
        }
        if(is_int($day/4)){
            print $provisionedActivities[3];
        }
        print " are available";
        print "<p></p>";

    }


    // Activity 5:  HELP!!!


    // Activity 6:

    // 12 Names in this array:
    $names=array("Sam","Alex","Rita","Bryan","Najah","Alister","Albert","Eric","John","George","Zakk","Adrian");
    print "Unsorted names: ";
    print join(", ",$names);
    print "<p></p>";

    sort($names);
    print "Sorted names: ";
    print join(", ",$names);
    print "<p></p>";

    $selection=rand(0,11);
    print 
    print "<p></p>";


    ?>
</p>

</body>
</html>
