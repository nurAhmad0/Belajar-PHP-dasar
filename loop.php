<?php
    for ($i=0; $i < 6; $i++) { 
        echo "saat ini i adalah $i";
        echo "<br>";
    }
        
    $a = 1;
    while ($a <= 10) {
        echo "saat ini a adalah $a";
        echo "<br>";
        $a++;
        
        }
        
    $p = 0;
    do {
        echo "saat ini p adalah $p";
        echo "<br>";
        $p++;
        } while ($p <= 10);
        
        
        
        
        
    $buah = ["mangga", "pisang", "anggur"];
    foreach ($buah as $key => $value) {
        
        echo "key saat ini adalah = $key dan value saat ini adalah $value";
        echo "<br>";
    }//jadi ley itu index dan value itu nilainya 

    // hasilnya 
    // key saat ini adalah = 0 dan value saat ini adalah mangga
    // key saat ini adalah = 1 dan value saat ini adalah pisang
    // key saat ini adalah = 2 dan value saat ini adalah anggur