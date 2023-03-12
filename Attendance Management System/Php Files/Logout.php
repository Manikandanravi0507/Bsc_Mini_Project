<?php
  session_start();
  
  Session_destroy();
  header('location:login.php');
  echo"<script>alert('Sorry.....!Username Passoword are Incorrect')</script>"
  
?>