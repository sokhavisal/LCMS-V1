<?php
session_start();


 session_destroy();
 $_SESSION['timeout']=time();
 header('Location:/LCMS/login.php');
?>
