<?php

    //declare variabel
    $angka = 4;

    //declare constant
    define('constant1', 8);// ada dua paramter yang satu nama constant seperti nama variabel yang parameter dua itu nilainya
    //tidak bisa di ubah untuk constant nilainya

    function contohConctant() {
        echo constant1;//ini bisa jadi constant itu tidak dipengaruhi oleh scope
    }
    echo $angka;
    echo "<br>";
    echo constant1;
    echo "<br>";
    contohConctant();