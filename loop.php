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













    // // init: $i = 1 | kondisi: $i <= 3 | post: $i++
    // for ($i = 1; $i <= 3; $i++) {
    //     echo "Perulangan ke-$i <br>";
    // }
    // // Output:
    // // Perulangan ke-1
    // // Perulangan ke-2
    // // Perulangan ke-3











    // $i = 1; // Inisialisasi di luar

    // for (; $i <= 3; $i++) {
    //     echo "Perulangan ke-$i <br>";
    // }















    // for ($i = 1; $i <= 3; ) {
    //     echo "Perulangan ke-$i <br>";
    //     $i++; // Increment di dalam block
    // }










    // $i = 1;

    // for (; $i <= 3; ) {
    //     echo "Perulangan ke-$i <br>";
    //     $i++;
    // }






    // $i = 1;

    // // Kondisi kosong = dianggap true terus-menerus
    // for (; ; ) {
    //     echo "Perulangan ke-$i <br>";
        
    //     if ($i >= 3) {
    //         break; // Menghentikan perulangan secara paksa
    //     }
        
    //     $i++;
    // }












    // ini tanpa for each
    $names = ["Ahmad", "agus", "bahlil"];

    for ($i = 0; $i < count($names); $i++) {
        echo "<br>";
        echo "Hello $names[$i]" . PHP_EOL;
        }
        
        
        
        
    foreach ($names as $name) { //ini name yang diipakai untuk variabel sementara
        echo "<br>";
        echo "Hello $name" . PHP_EOL;
    }
        
        
        
        
        
    echo "<br>";
    echo "<br>";
    $person = [
        "first_name" => "Ahmad",
        "middle_name" => "keren",
        "Last_name" => "sekali"
        ];
        
    foreach ($person as $key => $value) {
        echo "$key : $value" . PHP_EOL;
        echo "<br>";
    };