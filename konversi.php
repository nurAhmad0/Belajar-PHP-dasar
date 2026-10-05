<?php
    $valueString = (string)100;
    var_dump($valueString);
    echo "<br>";

    $valueInt = (int)"100";
    var_dump($valueInt);
    echo "<br>";
    
    $valueFloat = (float)"100.11";
    var_dump($valueFloat);
    echo "<br>";
    
    $umur = 20;
    echo "Umur saya " . $umur; // Otomatis dikonversi jadi string oleh PHP
    echo "<br>";

    $nilai = 1;
    $status = (bool) $nilai; // Hasilnya true