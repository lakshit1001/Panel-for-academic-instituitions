<?php
ob_start();
session_start();

  $username = "bookfoxi_product";
  $password = "product@2015";
  $database = "bookfoxi_products";
  $hostname = "localhost";

  $dbc = mysqli_connect($hostname, $username, $password, $database);
if (isset($_POST['formsubmitted'])) {

  $error = '';

  if (empty($_POST['password'])) {
    $error = 'Please Enter Your password ';
  } else {
    $password = $_POST['password'];
  }
  if (empty($_POST['emailid'])) {
    $error = 'You forgot to enter your Email id';
  }
  else {
    $email = $_POST['emailid'];
  }


  if (empty($error)){
      $query_check_credentials = "SELECT * FROM students WHERE (eid ='$email' AND password='$password')";
      $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
    if($result_check_credentials){
    

      $_SESSION['email'] = $email;
      header("Location: http://bookfox.in/panel/portal/");
      exit();
    
    } 
    else {
    header("Location: http://bookfox.in/panel/portal/login.php?e=WrongCredentials");
    exit();
    }
 
  }else {
    header("Location: http://bookfox.in/panel/portal/login.php?e=" . $error);
    exit();
  }
}
?>
