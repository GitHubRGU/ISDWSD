<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aberdeen Folk</title>
</head>
<body>
<p>
    <?php
    $name="Shaun";
    $myage="22";

    print"Hello " . $name;
    print"Your age is " . $myage;
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
    ?>
</p>
</body>
</html>