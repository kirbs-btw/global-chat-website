<?php
  $today = date("Y-m-d");
  $time = date("H:i:s");
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $content = mysqli_real_escape_string($conn, $_POST['message']);

  $host = "";
  $dbUsername = "";
  $dbPassword = "";
  $dbName = "";

  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

  if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else{
    $sql = "INSERT INTO comment VALUES('$username' , '$content', DATE '$today', '$time');";
    mysqli_query($conn, $sql);
  }

  header("Location:../index.html");
?>
