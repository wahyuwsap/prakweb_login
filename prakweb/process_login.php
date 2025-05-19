<?php
session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

// Periksa apakah username ada dan password cocok
if ($user && $user['password'] === $password) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: home.php");
    exit();
} else {
    $_SESSION['error'] = "Username atau password salah!";
    header("Location: index.php");
    exit();
}
?>
