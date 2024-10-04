<?php
session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // User is logged in, proceed with your code
    $username =  $_SESSION['UserName'];
echo "<script>
      document.addEventListener('DOMContentLoaded', function() {
          const userDetails = document.getElementsByClassName('userinfo')[0];
          const photoholder = document.getElementsByClassName('photoholder')[0];
          var editname = document.getElementsByClassName('editname')[0];
          var USERname = '" . $username. "';

          if (userDetails) {
              userDetails.style.display = 'none';
              photoholder.style.display = 'inline';
              
              if (editname) {
                  editname.innerText = USERname; // Only set text if element is found
              } else {
                  console.error('Element with class editname not found.');
              }
          }
      });
      </script>";


}
?>
<script src="index.js"></script>
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
        <div class="photoholder"><img src="prof.jpg" id="prof2"></div>
    </nav>
    <img src="image1.png" id="img1">
    <img src="image2.png" id="img2">
    <img src="image3.png" id="img3">
    <!-- <img src="image4.png" id="img4"> -->
    <img src="image5.png" id="img5">
    <div class="message">
        <h1>Coming Soon</h1>
    </div>
</body>
</html>
