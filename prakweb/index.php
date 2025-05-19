<?php
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location:home.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Halaman Login</h2>

<!-- Tampilkan pesan error di sini -->
<?php
if (isset($_SESSION['error'])) {
    echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>

<form action="process_login.php" method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
