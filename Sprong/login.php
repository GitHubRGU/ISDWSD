<?php

//  Establish connection to my (Sprong) Azure mySQL database ($link):
include("connection.php");

//  Check if the username and password fields are blank:
if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    //  SQL query to select uid for the user that matches the username and password entered
    //  and store it in $result:
    $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($link,$sql);

    //  Check how many rows are in result (should only be one):
    if(mysqli_num_rows($result == 1))
    {
        //  If query doesn't return a single row, then something is wrong,
        //  so send the user to the home page:
        header("location: home.php");
    }else
    {
        echo "Incorrect username or password entered!";
    }
}


?>

