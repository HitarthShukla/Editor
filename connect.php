<?php
session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // User is logged in, proceed with your code
    
    echo "<script>
      document.addEventListener('DOMContentLoaded', function() {
          const userDetails = document.getElementsByClassName('userinfo')[0];
          if (userDetails) {
              userDetails.style.display = 'none';
          }
      });
      </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodynLrn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="editor.php">Editor</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="learn.php">Learn</a></li>
            <li class="settings-dropdown">
                <span>Settings</span>
                <ul class="dropdown-content">
                    <li class="appearance-dropdown">
                        <span>Appearance</span>
                        <ul class="dropdown-content-appearance">
                            <li><a onclick="light()">Light</a></li>
                            <li><a onclick="neon()">Dark</a></li>
                        </ul>
                    </li>
                    <li><a href="general.html">General</a></li>
                    <li><a href="preferences.html">Preferences</a></li>
                </ul>
            </li>
            <li><a href="connect.php">Connect</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <div class="userinfo">
            <button id="login">
                <a href="login.html">Login</a>
            </button>
            <button id="signup">
                <a href="Create_ac.html">Sign Up</a>
            </button>
        </div>
    </nav>
    <main>
        <p>
            hello this is connect section 
        </p>
    </main>
    <script src="index.js"></script>
</body>
</html>
