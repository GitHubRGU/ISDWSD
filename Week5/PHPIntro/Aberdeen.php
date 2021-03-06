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
    $myage="27";

    print "Hello, " . $name;
    print "<p></p>";
    print "Your age is " . $myage;
    print "<p></p>";
    if($myage>"21"){
        print "You can buy specs, mugs and sausage rolls";
        print "<p></p>";
    }
    elseif($myage>"18"){
        print "You can buy specs and mugs";
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

    print "<br/>";

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

    print "<br/>";

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

    print "<br/>";

    $provisionedActivities=array("no products","specs","mugs","sausage rolls");

    for($day=1;$day<31;$day++){
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


    // Activity 5:

    print "<br/>";

    $provisionedActivities=array("no products","specs","mugs","sausage rolls");
    $extraStock=array(7,7,7);

    for($day=1;$day<31;$day++){
        print "On the " . $day . " of the month ";

        if($day=="1"){                                           // Test for first day of the month (definitely $extraStock!)
            $pickStock=rand(0,2);                                // Choose which item to offer
            print $provisionedActivities[$pickStock+1];          // Display the offered item
            $extraStock[$pickStock]=$extraStock[$pickStock]-1;   // Reduce stock of item in $extraStock
        }

        // Test for not a multiple of 2, 3 or 4 using !is_int()
        elseif(!is_int($day/2) and !is_int($day/3) and !is_int($day/4)){
            $pickStock=rand(0,2);                                // Choose which item to offer
            // if($extraStock[$pickStock])
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
        print "  (S=" . $extraStock[0] . "  M=" . $extraStock[1] . "  SR=" . $extraStock[2] . ")";
        print "<p></p>";

    }


    // Activity 6:

    print "<br/>";

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
    print strtoupper($names[$selection]) . " has won the specs!";
    print "<p></p>";
    unset($names[$selection]);  //  Removes the winner from the array

    print "Remaining contestants: ";
    print join(", ",$names);
    print "<p></p>";

    $selection=rand(0,10);
    print strtoupper($names[$selection]) . " has won the mugs!";
    print "<p></p>";
    unset($names[$selection]);  //  Removes the winner from the array

    print "Remaining contestants: ";
    print join(", ",$names);
    print "<p></p>";

    $selection=rand(0,9);
    print strtoupper($names[$selection]) . " has won the sausage rolls!";
    print "<p></p>";
    unset($names[$selection]);  //  Removes the winner from the array

    print "Remaining contestants: ";
    print join(", ",$names);
    print "<p></p>";
    print "<p></p>";


    // Activity 7:

    function calcaward($specs,$mugs,$srolls){
        return(10 * (($specs * $mugs * $srolls) * ($specs * $mugs * $srolls)) / 2);
    }

    function wanted($name,$specs,$mugs,$srolls){
        print "<br/>";
        print "Wanted: " . $name;
        print "<p></p>";
        print "Known to be in posession of the following items:";
        print "<p></p>";
        print "Specs: " . $specs;
        print "<p></p>";
        print "Mugs: " . $mugs;
        print "<p></p>";
        print "Sausage Rolls: " . $srolls;
        print "<p></p>";
        print "Award for capture: £" . calcaward($specs,$mugs,$srolls);
        print "<p></p>";
        print "<p></p>";
    }


    wanted("Gordon",1,2,3);
    wanted("Andy",2,2,2);
    wanted("Stuart",3,4,5);







    ?>
</p>

</body>
</html>
