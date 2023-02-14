<?php
  session_start();
  Session_destroy();
  header('location:login.php');
?>