<?php
session_start();

include('conn.php');
$emailerr = $passworderr = "";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        $emailerr = 'please fill the name';
    }
    if (empty($password)) {
        $passworderr = 'please fill the password';
    } else {
        $sql = "SELECT email,password,status FROM Record WHERE email='$email' AND password='$password'";

        $result = $con->query($sql);

        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $status = $row['status'];
            if ($status == 'approved') {

                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];

                header('Location: user.php');
            } elseif ($status == 'admin') {

                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];

                header('Location: admin.php');
            }
        } else {
            echo "<script>alert('Not Approved');location.href='login.php';</script>";
        }
    }
}
