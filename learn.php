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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodynLrn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="learn.css">
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
        <div id="userDetails" class="userinfo">
            <button id="login">
                <a href="login.html">Login</a>
            </button>
            <button id="signup">
                <a href="Create_ac.html">Sign Up</a>
            </button>
        </div>
        <div class="photoholder"><img src="prof.jpg" id="prof2"></div>
    </nav>
    <div class="progress">
        <div class="user">
            <div class="photo"><img src="prof.jpg" class="prof"/></div>
        </div>
        <div class="user1"><p class="editname">Username</p></div>
        <div class="main-bar">
            <div class="main-bar-progress"></div>
        </div>
        <div class="maintext">Total Progress</div>
    </div>
    <div class="box">

        <a href="htmlcourse.html" class="courselink" >
            <div id="htmlc" class="course">
                <div class="boxboxbox">
                    <div class="htmlcard">HTML</div>
                    <div class="boxbox">
                        <div id="html-beginner">Beginner</div>
                        <div id="html-beginner-bar">
                            <div id="html-beginner-bar-progress"></div>
                        </div>
                        <div id="html-intermediate">Intermediate</div>
                        <div id="html-intermediate-bar">
                            <div id="html-intermediate-bar-progress"></div>
                        </div>
                        <div id="html-advanced">Advanced</div>
                        <div id="html-advanced-bar">
                            <div id="html-advanced-bar-progress"></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="csscourse.html" class="courselink">
            <div id="cssc" class="course">
                <div class="boxboxbox">
                    <div class="csscard">CSS</div>
                    <div class="boxbox">
                        <div id="css-beginner">Beginner</div>
                        <div id="css-beginner-bar">
                            <div id="css-beginner-bar-progress"></div>
                        </div>
                        <div id="css-intermediate">Intermediate</div>
                        <div id="css-intermediate-bar">
                            <div id="css-intermediate-bar-progress"></div>
                        </div>
                        <div id="css-advanced">Advanced</div>
                        <div id="css-advanced-bar">
                            <div id="css-advanced-bar-progress"></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="jscourse.html" class="courselink">
        <div id="jsc" class="course">
            <div class="boxboxbox">
                <div class="jscard">JS</div>
                <div class="boxbox">
                    <div id="js-beginner">Beginner</div>
                    <div id="js-beginner-bar">
                        <div id="js-beginner-bar-progress"></div>
                    </div>
                    <div id="js-intermediate">Intermediate</div>
                    <div id="js-intermediate-bar">
                        <div id="js-intermediate-bar-progress"></div>
                    </div>
                    <div id="js-advanced">Advanced</div>
                    <div id="js-advanced-bar">
                        <div id="js-advanced-bar-progress"></div>
                    </div>
                </div>
            </div>
        </div>
        </a>

    </div>
    <script src="index.js"></script>
    <img src="htmllogo.png" id="htmllogo2">
    <img src="csslogo.png" id="csslogo2">
    <img src="jslogo.png" id="jslogo2">
</body>
</html>