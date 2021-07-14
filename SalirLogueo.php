<?php
  session_start();
  session_destroy();
  header("Location: Logueo.php");
?>
