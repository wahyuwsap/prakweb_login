<?php
session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
} else {
    $_SESSION['error'] = "Username atau Password salah!";
    header("location:index.php");
}
?>
