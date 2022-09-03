<?php 
session_start();
$outgoing_id = $_SESSION['unique_id'];

  include_once("config.php");

  $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

  $sql = mysqli_query($conn, "select * from users where fname like '%$searchTerm%' or lname like '%$searchTerm%'");
  $output = "";

  if(mysqli_num_rows($sql) > 0) {
    include("data.php");
  } else {
    $output .= "No Results Found"; 
  }

  echo $output;
?>