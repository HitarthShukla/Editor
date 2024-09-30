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
    <style>
        body{
            height: 700px;
        }
    </style>
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
        <div class="container">
            <div class="left">
                <label>
                    <a onclick="ochtml()"><img src = "htmllogo.png" id = "html-logo"/></a>
                    <div class="label-text">HTML</div>
                    <div class="link-wrapper">
                        <a href="#" class="copy-link" data-target="html-code">Copy</a>
                    </div>
                </label>
                <textarea id="html-code" onkeyup="run()"></textarea>
                
                <label>
                    <a onclick="occss()"><img src = "csslogo.png" id = "css-logo"/></a>
                    <span class="label-text">CSS</span>
                    <div class="link-wrapper">
                        <a href="#" class="copy-link" data-target="css-code">Copy</a>
                    </div>
                </label>
                <textarea id="css-code" onkeyup="run()"></textarea>
                
                <label>
                    <a onclick="ocjs()"><img src = "jslogo.png" id = "js-logo"/></a>
                    <span class="label-text">JavaScript</span>
                    <div class="link-wrapper">
                        <a href="#" class="copy-link" data-target="js-code">Copy</a>
                    </div>
                </label>
                <textarea id="js-code" onkeyup="run()"></textarea>
            </div>
            <div class="right">
                <label><svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m3 4.60441299v10.68046321c0 .9664983.78350169 1.75 1.75 1.75.30213089 0 .5991154-.0782213.86204688-.2270505l10.10829552-5.7216767c.8411018-.4760954 1.136998-1.54389461.6609027-2.38499639-.1736118-.30671412-.4357881-.55386079-.7522058-.70908458l-10.10829556-4.95878651c-.86771195-.42567001-1.91620519-.06732422-2.34187521.80038773-.11768194.23989013-.17886853.50354286-.17886853.77074374z" fill="#212121"/></svg>Output</label>
                <iframe id="output">
                </iframe>
            </div>
        </div>
    </main>
    <script src="index.js"></script>
</body>
</html>
