<?php
  include('config.php');
  unset($_SESSION['usuario']);
  header('Location: login.php');
?>