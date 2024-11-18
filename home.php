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
            <li><a href="connect">Connect</a></li>
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
        <div class="photoholder"><a href="profile.php"><img src="prof.jpg" id="prof2"></a></div>
    </nav>
    <div class="imt">
        <!-- <img src="BG.jpg" class="bgimage" alt="back"/> -->
        <a href="editor.php" class="subscript">
            <img src="code.png" class="bgimage2" alt="back2"/>Let's Code
        </a>
        <a href="learn.php" class="subscript">
            <img src="elearn.png" class="bgimage3" alt="back3"/>Let's Learn
        </a>
        <a href="connect" class="subscript">
            <img src="econnect.png" class="bgimage4" alt="back4"/>Let's Connect
        </a>
    <div class="type-text">
        <div class="typewriter">
                <!-- <p>Welcome To Code And Learn</p> -->
                <font color = "#569CD6">Welcome</font>
                <font color ="#DCDCAA">To</font>
                <font color ="#D69D85 ">Code</font>
                <font color ="#B5CEA8">And</font>
                <font color ="#E06C75">Learn</font>
        </div>
    </div>
    </div>
    <div class="about2">
        <div class="logo">
            <h1><img src="logo2.png" alt=""><strong>CodynLrn</strong></h1>
            <div class="contactus">
                <h1><strong>Contact Us</strong></h1>
            </div>
            <div class="copyrights">
                <h1><strong>copyrights</strong></h1>
            </div>
        </div>
        <div class="info">
        <div class="know">
            To Know more about us <a href="about.php">Click Here</a>
        </div>
        <div class="contactinfo">
            email: &nbsp;<a href="/">codynlrn@gmail.com</a>
        </div>
        <div class="copyinfo">
            @CodynLrn,All rights reserved
        </div>
    </div>
    </div>
</body>
</html>
