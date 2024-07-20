<?php
require_once('conn.php');
$nameerr = $emailerr = $passworderr = "";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($name)) {
    $nameerr = 'Please fill the name';
  }
  if (empty($email)) {
    $emailerr = 'Please fill the email';
  }
  if (empty($password)) {
    $passworderr = 'Please fill the password';
  } else {
    $sql = "SELECT email,password,name FROM Record WHERE email='$email' AND password='$password'";

    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      echo "<script>alert('You Already Registered');location.href='login.php';</script>";
    } else {
      mysqli_query($con, "INSERT INTO `Record` ( `name`,`email`,`password`,`status`) 
        VALUES('$name','$email','$password','panding')");
      echo "<script>alert('successfully saved');location.href='login.php';</script>";
    }
  }
}
