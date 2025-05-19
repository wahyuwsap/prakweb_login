<?php
session_start();
$username = "";
if(isset($_SESSION['username'])){
    // sudah login ,set variable username dengan data yang sudah ada di session
    $username = $_SESSION['username'];
}else{
    // belum login ,maka redirect ke halaman login
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="flex w-screen h-screen bg-white flex-col">
    <nav class="w-full bg-sky-500 justify-between">
        <a class="px-2 py-2 bg-blue-500 h-fit" href="logout.php">KLIK UNTUK LOGOUT</a>
        
        
    </nav>
    
    <h1 class="text-7xl text-bold">Hallo <?=$username?></h1>

</body>
</html>