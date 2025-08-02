<?php
$servername="localhost";
$username="root";
$password="";
$database="dishdelight";
$conn = new mysqli($servername,$username,$password,$database);


if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_message = $_POST['user_message'];

$sql = "INSERT INTO contact (user_name, user_email,user_message) VALUES ('$user_name', '$user_email','$user_message')";

if($conn->query($sql) === TRUE){
    echo"Your response submitted Successfully...";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>