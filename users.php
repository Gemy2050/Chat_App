<?php 
  session_start();
  if(!isset($_SESSION['unique_id'])) {
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Users Page</title>
</head>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <?php 
          include_once("php/config.php");
          $sql = mysqli_query($conn, "select * from users where unique_id='$_SESSION[unique_id]'");
          if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <div class="content">
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']." ".$row['lname']; ?></span>
            <p><?php echo $row['user_status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">

      </div>
    </section>
  </div>

  <script src="js/users.js"></script>
</body>

</html>