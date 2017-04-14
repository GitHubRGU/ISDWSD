<?php

//  Establish connection to Azure mySQL database ($link):
include("connection.php");


if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($link,$sql);

    if(mysqli_num_rows($result == 1))
    {
        //  If query doesn't return a single row, then something is wrong,
        //  send the user to the home page:
        header("location: home.php");
    }else
    {
        echo "Incorrect username or password.";
    }
}


?>

