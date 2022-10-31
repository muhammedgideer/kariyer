<?php 
session_start();

session_destroy();

Header("Location:index.php?ilan_tur=0");

 ?>