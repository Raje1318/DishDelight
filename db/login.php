<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dishdelight";

$conn = mysqli_connect("$servername","$username","$password","$database");

if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$user_confpass = $_POST['user_confpass'];

if($user_pass !== $user_confpass){
        echo "<script>alert('Password do not match');</script>";
}else{
$sql = "SELECT * FROM register WHERE user_name = '$user_name' AND user_pass = '$user_pass'";
$result = $conn->query($sql);

if($result->num_rows == 1){
header("Location: ../user/home.php");
exit();
}else{
        echo "<script>alert('Invalid username or password');</script>";
 
}
}
}
$conn->close();
?>