<?php
ob_start();
session_start();
if (isset($_POST['formsubmitted'])) {

  $error = '';

  if (empty($_POST['username'])) {
    $error = 'You forgot to enter  your Email ';
  }
  else {
    $username = $_POST['username'];
  }

  if (empty($_POST['password'])) {
    $error = 'Please Enter Your password ';
  } else {
    $password = $_POST['password'];
  }

  if (empty($error)){
    if(($username == 'thapar') &&  ($password ==  'thapar')){
      $_SESSION['username'] = $username;
      header("Location: http://bookfox.in/panel/student/index.php");
      exit();
    } else {
      header("Location: http://bookfox.in/panel/login.php?e=wp");
      exit();
    }
  }else {
    header("Location: http://bookfox.in/panel/login.php?e=" . $error);
    exit();
  }
}
?>