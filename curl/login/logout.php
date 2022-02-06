<?php
session_start();
session_destroy();
// unset($_SESSION['kullanici_ad'])
Header("Location:index.php?logout");
?>