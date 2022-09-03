<?php
// try {
//   // session_start();
//   if (!session_start()) 
//   throw new Exception("session error");

//   if (isset($_SESSION['unique_id'])) {
//     header("location: users.php");
//   }
  
// }catch(Exception $e) {
//   echo "Error";
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
    <section class="form login">
      <header>Chat App</header>
      <form action="">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" placeholder="Enter Your Email" name="email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" placeholder="Enter Password" class="passInput" name="password">
          <i class="fas fa-eye eyeIcon"></i>
        </div>
        <div class="field button">
          <input type="submit" value="Continue To Chat">
        </div>
      </form>
      <div class="link">Not signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  <script src="js/pass_show_hide.js"></script>
  <script src="js/login.js"></script>
</body>

</html>