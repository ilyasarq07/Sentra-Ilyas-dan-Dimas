<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "register";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
    die("<script>alert('Lu wibu makanya error.')</script>");
}
mysqli_close($conn);
 ?>