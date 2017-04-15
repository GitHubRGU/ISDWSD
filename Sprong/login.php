<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    include("header.php");
    ?>
    <main>
        <form action="login" method="post">
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="password" placeholder="password"><br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>
    <?php

    include("footer.php");

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("connection.php");

    $username = $_POST["username"];
    $password = $_POST{"password"};

    function checklogin($username, $password, $link)
    {
        $sql = "SELECT * FROM users WHERE username='" . $username . "' and password='" . $password . "'";
        $result = $link->query($sql);
        while ($row = $result->fetch_array()) {
            return true;
        }
        return false;
    }

    if (checklogin($username, $password, $link)) {
        session_start();
        $_SESSION['username'] = $username;
        header("location:./");
    } else {
        header("location:login");
    }

} else {
    print('something has gone VERY wrong!');
}
?>



















//  Establish connection (called $link) to my Sprong Azure mySQL database:
include("connection.php");



//  Check if the username and password fields are blank:
if(empty($_POST["username"]) || empty($_POST["password"]))
{
echo "Both fields are required.";
}else
{
$username=$_POST['username'];
$password=$_POST['password'];

echo "Username: " . $username . "<p></p>";
echo "Password: " . $password . "<p></p>";

//  SQL query to select uid for the user that matches the username and password entered
//  and store it in $result:
//  $sql="SELECT uid FROM users WHERE username='$username' AND password='$password'";
$sql="SELECT * FROM users";
$result=mysqli_query($link,$sql);

//  What is $result returning?:
echo "This is what result is returning: " . "<p></p>";
var_dump($result);
echo "End of result." . "<p></p>";

//  Check how many rows are in result (should only be one):
if(mysqli_num_rows($result) == 1)
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

