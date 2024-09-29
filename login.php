<?php
session_start();
include 'database.php';

// Decrypt function
function decrypt($encryptedPassword) {
    $encryption_key = "your_secret_key"; // Use a secure key
    $iv = "your_initialization_vector"; // Ensure this matches your encryption method

    return openssl_decrypt($encryptedPassword, 'AES-128-CBC', $encryption_key, 0, $iv);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['UserName'];
    $password = $_POST['Password'];

    $stmt = $conn->prepare("SELECT * FROM userinfo WHERE UserName = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Decrypt the stored password
        $decryptedPassword = decrypt($user['Password']);
        
        // Verify the decrypted password
        if ($decryptedPassword === $password) {
            $_SESSION['UserName'] = $user['UserName'];
            header('Location: learn.html');
            exit();
        } else {
            $_SESSION['error'] = 'Invalid username or password.';
            header('Location: home.html');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Invalid username or password.';
        header('Location: connect.html');
        exit();
    }
}
?>
