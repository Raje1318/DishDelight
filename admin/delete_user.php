
<?php
include('../db/db.php'); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $conn->query("DELETE FROM register WHERE user_id = $user_id");
    header("Location: user_list.php");
}
?>
