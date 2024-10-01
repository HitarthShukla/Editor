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
    <link rel="stylesheet" href="style_profile.css">
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
                            <li><a onclick="neon()">Neon</a></li>
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
    <div class="profile">
        <div class="user">
            <div class="details">Personal Details</div>
            <div class="photo"><img src="prof.jpg" class="prof"/></div>
            <div class="name">Username</div>
            <div class="share">
                <a href="/">Share Profile</a>
            </div>
            <div class="update">
                <a href="/">Update Profile</a>
            </div>
        </div>
        <div class="progress">Overall Progress
            <div class="main-bar">
                <div class="main-bar-progress"></div>
            </div>
            <div class="sub">
                <div class="html">
                    HTML Progress
                    <div class="html-titles">
                        <div id="html-beginner">Beginner</div>
                        <div id="html-intermediate">Intermediate</div>
                        <div id="html-advanced">Advanced</div>
                    </div>
                    <div class="html-bars">
                        <div id="html-beginner-bar">
                            <div id="html-beginner-bar-progress"></div>
                        </div>
                        <div id="html-intermediate-bar">
                            <div id="html-intermediate-bar-progress"></div>
                        </div>
                        <div id="html-advanced-bar">
                            <div id="html-advanced-bar-progress"></div>
                        </div>
                    </div>
                </div>
                <div class="css">
                    CSS Progress
                    <div class="css-titles">
                        <div id="css-beginner">Beginner</div>
                        <div id="css-intermediate">Intermediate</div>
                        <div id="css-advanced">Advanced</div>
                    </div>
                    <div class="css-bars">
                        <div id="css-beginner-bar">
                            <div id="css-beginner-bar-progress"></div>
                        </div>
                        <div id="css-intermediate-bar">
                            <div id="css-intermediate-bar-progress"></div>
                        </div>
                        <div id="css-advanced-bar">
                            <div id="css-advanced-bar-progress"></div>
                        </div>
                    </div>
                </div>
                <div class="js">
                    JavaScript Progress
                    <div class="js-titles">
                        <div id="js-beginner">Beginner</div>
                        <div id="js-intermediate">Intermediate</div>
                        <div id="js-advanced">Advanced</div>
                    </div>
                    <div class="js-bars">
                        <div id="js-beginner-bar">
                            <div id="js-beginner-bar-progress"></div>
                        </div>
                        <div id="js-intermediate-bar">
                            <div id="js-intermediate-bar-progress"></div>
                        </div>
                        <div id="js-advanced-bar">
                            <div id="js-advanced-bar-progress"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="photos"></div>
    </main>
    <script src="index.js"></script>
</body>
</html>
