<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Say Hello To the World</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
    <button class="editorback" onclick = "gotoeditor()">Return To Editor</button>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  <script>
    let backeditor = document.getElementsByClassName("editorback")[0];
    backeditor.style.transform = "translate(60%, -20px)";
    backeditor.style.border = "2px solid black";
    backeditor.style.height = "30px";
    backeditor.style.width = "200px";
    backeditor.style.background = "#fff";
    backeditor.style.borderRadius = "5px";
    backeditor.addEventListener('mouseover', function() {
      backeditor.style.transform = "translate(58%, -22px)";
      backeditor.style.boxShadow = "2px 4px 3px black";
      backeditor.style.background = "#3f3f3f";
      backeditor.style.color = "white";
      backeditor.style.transition = "transform 0.1s ease, box-shadow 0.1s ease, background 0.1s ease, color 0.1s ease";
    });
    backeditor.addEventListener('mouseout', function() {
      backeditor.style.boxShadow = "";
      backeditor.style.transform = "translate(60%, -20px)";
      backeditor.style.background = "#fff";
      backeditor.style.color = "black";
      backeditor.style.transition = "transform 0.1s ease, box-shadow 0.1s ease, background 0.1s ease, color 0.1s ease";
    });
    function gotoeditor() {
    window.location.href = "http://localhost/Editor/editor.php";
  }
  </script>
</body>
</html>
