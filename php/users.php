<?php 
session_start();
include_once("config.php");
$outgoing_id = $_SESSION['unique_id'];

$sql = mysqli_query($conn, "select * from users where unique_id <> '$_SESSION[unique_id]'");
$output = "";

if( mysqli_num_rows($sql) > 0) {
  include("data.php");
} elseif(mysqli_num_rows($sql) == 1) {
  $output .= "No users are available to chat";
}

  echo $output;

?>
