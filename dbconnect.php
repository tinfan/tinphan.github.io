<?php
  $con=mysqli_connect('localhost','root','','doanphp');
  if (!$con){
    die("Connection failed: ".mysqli_connect_error());
  }
    session_start();
?>