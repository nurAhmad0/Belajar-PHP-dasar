<?php

    session_start();    

    if(isset($_SESSION["login"])) {
        echo 'anda berhak melihat halaman ini';
    }
    else{
        header("location:sesion.php");
    }
    echo "<br>";
    echo $_SESSION["nama"];
    echo "<br>";
    echo $_SESSION["umur"];
