<?php
  @session_start();
  if($_SESSION["GirisBasarili"] <> 1) die("Yetkili değilsiniz...");
?>
