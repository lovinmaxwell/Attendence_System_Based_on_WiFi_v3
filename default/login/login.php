<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"wifi_rissi_mac");

$sql="SELECT * FROM users WHERE username ='$username' AND password ='$password' ";
$result=mysqli_query($link,$sql);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location:dashboard-2.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>