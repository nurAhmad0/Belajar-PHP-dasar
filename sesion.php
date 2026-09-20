<?php

    //ini berhubungan dengan file /profile.php
    // session_start(); => Menghancurkan file fisik sesi di server. Data di halaman berjalan masih ada sedikit "sisa", tapi sesi mati total untuk halaman berikutnya (profile.php) atau saat di-refresh.

    // $_SESSION["nama"] = "ahmad"; => membuat variabel nama dengan nilainya ahmad
    
    // $_SESSION["nama"]; => memanggil variabel nama

    // $_SESSION["nama"] = "joko"; => mengubah nilai session dari ahmad menjadi joko

    // session_unset(); => menghapus semua nilai session yang telah dibuat jadi jika di jalankan $_SESSION["nama"] akan menghasilkan eror

    // session_destroy(); => menghapsu session syntax dari session_start()




    session_start();
    var_dump($_SESSION);
    echo "<br>";
    $_SESSION["nama"] = "ahmad";
    echo $_SESSION["nama"];
    echo "<br>";

    $_SESSION["umur"] = 67;
    echo $_SESSION["umur"];
    echo "<br>";
    $_SESSION["umur"] = 99;
    echo $_SESSION["umur"];
    echo "<br>";
    
    // session_unset()://ini akan menyebabkan tidak adapaa memnaggil lagi 
    // echo $_SESSION["umur"]; //ini pasti eror
    
    // session_destroy();//Menghancurkan file fisik sesi di server. Data di halaman berjalan masih ada sedikit "sisa", tapi sesi mati total untuk halaman berikutnya (profile.php) atau saat di-refresh.
    // echo $_SESSION["umur"];
    // echo "<br>";
    // $_SESSION["angka"] = 45;
    // echo $_SESSION["angka"];
    // echo "<br>";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="login" name="loginBtn">
    </form>
    <?php
        
        if(isset($_POST["loginBtn"])) {
            $username = $_POST["username"];
            
            $_SESSION["username"] = $username;
            $_SESSION["login"] = true;

            header("location:profile.php");
        }
    ?>
</body>
</html>