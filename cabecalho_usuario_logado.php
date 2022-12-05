<?php
  include_once('config.php');

  // Se o usuario já está logado, redireciona para o home
  if (!isset($_SESSION['usuario'])) {
    header('Location: /login.php');
    die;
  }
?>