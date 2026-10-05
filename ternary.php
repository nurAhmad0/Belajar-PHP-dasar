<?php
    $gender = "PRIA";

    $hi = null;

    if ($gender == "PRIA") {
        $hi = "Hi bro";
    } else {
        $hi= "Hi nona";
    }
    echo $hi . PHP_EOL;




    // atau bisa pakai yang ini 
    echo "<br>";
    echo '===============================================';
    echo "<br>";
    $gender = "PRIA";
    $hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";

    echo $hi . PHP_EOL;