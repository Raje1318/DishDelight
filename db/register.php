<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_pass = $_POST["user_pass"];
    $user_confpass = $_POST["user_confpass"];
// New field for confirm password
    

    // Check if passwords match
    if ($user_pass !== $user_confpass) {
        echo "<script>alert('Password do not match');</script>";
    } else {
        // Connect to MySQL (replace dbname, dbuser, dbpass with your MySQL details)
        $conn = new mysqli("localhost", "root", "", "dishdelight");
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Insert user data into database
        $sql = "INSERT INTO register (user_name, user_email,user_pass,user_confpass) VALUES ('$user_name', '$user_email','$user_pass', '$user_confpass')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
}
?>