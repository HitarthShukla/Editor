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
        <div class="head">
            <h1>About Us</h1>
        </div>
        <div class="def">
            <p>CodynLrn is an innovative live coding platform designed to create an engaging and dynamic learning experience for aspiring web developers. The platform offers a comprehensive Web Development course that takes learners through the fundamentals of HTML, CSS, and JavaScript, all the way from beginner to advanced levels. Whether you’re just starting out or looking to deepen your skills, CodynLrn provides a structured path to mastery.

                What sets CodynLrn apart is its personalized approach to learning. Along with the core lessons, the platform integrates interactive practice sessions tailored to your skill level, ensuring that you grasp each concept thoroughly. To make learning more engaging, CodynLrn offers game-like quizzes, where learners can test their knowledge in a fun, competitive way. These quizzes aren’t just for review—they fuel a sense of competition, enabling you to engage in quiz battles, compete with peers, and climb the ranks on leaderboards, adding an exciting layer of motivation.</p>
                
                <p>Hands-on experience is essential for any web developer, and CodynLrn ensures you get plenty of it. The platform includes a series of practical exercises and real-world projects, spanning from beginner-friendly tasks to more advanced challenges. These projects are not only designed to reinforce what you’ve learned but also to push you further as you apply your knowledge to build real solutions, making your learning journey highly immersive.
                To keep you motivated and informed, CodynLrn provides detailed progress tracking. You’ll have access to a comprehensive progress bar that allows you to monitor both your overall advancement through the course and your individual progress in HTML, CSS, and JavaScript. This clear visualization of your learning path helps you stay on track and celebrate your achievements as you move forward.</p>
                
                <p>A unique aspect of CodynLrn is its vibrant social community. The platform encourages collaboration by allowing users to connect with like-minded learners. You can form communities, share learning goals, and support one another on your web development journey. This social feature fosters a sense of belonging and enhances your motivation through peer interaction.
                
                In summary, CodynLrn offers a holistic and immersive approach to learning web development, combining structured lessons, personalized practice, competitive quizzes, hands-on projects, progress tracking, and a supportive community. It’s not just a course; it’s a platform that adapts to your pace, challenges you to grow, and celebrates your progress every step of the way.
                 </p>
        </div>
        <div class="contact">
            <h1>Contact Us</h1>
            <div class="msg">You can reach us through email id mentioned below</div>
            <div class="id">
                <a href="/">codynlrn@gmail.com</a>
            </div>
        </div>
    </main>
    <script src="index.js"></script>
</body>
</html>
