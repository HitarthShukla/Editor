<?php
require('database.php');
session_start();

if (isset($_POST['submit'])) {
    // Sanitize input
    $username = $_POST['UserName'];
    $password = $_POST['Password'];

    // Check if the user exists in the database
    $query = "SELECT * FROM `userinfo` WHERE UserName=? AND Password=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful, start session
        $_SESSION['UserName'] = $username;
        $_SESSION['loggedIn'] = true;
        header("Location: learn.php");
        exit();
    } else {
        // User does not exist or incorrect password
        echo "<script> alert('Please Enter Valid Username or Password');
                        window.location.href = 'login.html' </script>";
        
    }
}
?>
