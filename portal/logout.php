<?php ob_start();
    session_start();if(isset($_SESSION['email'])){
         session_destroy();}
               header("Location: http://bookfox.in/panel/portal/login.php");
                     exit();?>