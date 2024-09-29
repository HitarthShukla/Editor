<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['UserName'];
    $password = $_POST['Password'];

    // Check if the username already exists
    $stmt = $conn->prepare("SELECT * FROM userinfo WHERE UserName = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = 'Username already exists.';
        header('Location: Create_ac.html');
        exit();
    } else {
        // Hash the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO userinfo (UserName, Password) VALUES (?, ?)");
        $stmt->bind_param('ss', $username, $passwordHash);

        if ($stmt->execute()) {
            $_SESSION['UserName'] = $username;
            header('Location: login.html');
            exit();
        } else {
            $_SESSION['error'] = 'Failed to create account. Please try again.';
            header('Location: Create_ac.html');
            exit();
        }
    }
}
?>
