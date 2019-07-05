<?php 
session_start();
// require_once('dbconnect.php');

if(isset($_POST['admin_login'])){
  extract($_POST);

  $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ";
  $result = mysqli_query($connection, $query);

  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);

    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $email;
    $_SESSION['role_type'] = 'admin';

    echo '<span style="color: #155724;">Login Successfull, Redirecting....</span>';
    echo "<script>setTimeout(function(){ window.location.assign('dashboard.php'); }, 2000);</script>";
  }
  else{
    echo '<span style="color: #721c24;">Email or Password is Incorrect</span>';
  }
}

 ?>