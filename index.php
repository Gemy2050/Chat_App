<?php 
// session_start();
// if(isset($_SESSION['unique_id'])) {
//   header("location: users.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Chat App</title>
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat App</header>
      <form action="" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" placeholder="First Name" name="fname" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" name="lname" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" placeholder="Enter Your Email" name="email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" placeholder="Enter Password" class="passInput" name="password" required>
          <i class="fas fa-eye eyeIcon"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" required>
        </div>
        <div class="field button">
          <input type="submit" value="Continue To Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
  <script src="js/pass_show_hide.js"></script>
  <script src="js/signup.js"></script>
</body>

</html>