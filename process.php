<?php

$username = $_POST['user'];
$password = $_POST['pass'];


// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($username);
// $password - mysqli_real_escape_string($password);

mysqli_connect("localhost", "root", "");
mysqli_connect("pak_serve_database");

$result = mysqli_query("select * from user where username ='$username' and password ='$password'") 
                or die("Failed to query database".mysqli_connect_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password ) {
    echo "Login success!!! Welcome".$row['username'];
} else {
    echo "Failed to login!";
}


?>