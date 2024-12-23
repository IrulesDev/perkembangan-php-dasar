<?php
    if(isset($_POST["login"])) {
        // ini
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username . ' ' . $password; //<--textnya di beri nilai dengan $'nilainya'//
        // untuk menampilkan pada suatu tulisan yang di ketik di kolom username di halaman web
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman Login</title>
</head>
<body>

    <?php
        include "layout/header.html";
    ?>

    <form action="login.php" method="POST">
        <h2>Login akun</h2>
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login">Login</button>
    </form>

    <?php
        include "layout/footer.html";
    ?>
</body>
</html>