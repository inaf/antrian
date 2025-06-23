<?php
  session_start();
  include "sambungan/Jx4CtnGzNFhXfKff.php";

  if(!isset($_SESSION['idpengguna'])) {
    header("Location: login.html");
  }
  else {
    header("Location: home.html");
  }
?>