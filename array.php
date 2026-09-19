<?php
    //ada dua cara 

    // 1.
    $siswa = array("budi", "agus", "dono");
    $buah = ["bahlil", "apel", "pisang"];
    var_dump($buah);
    echo "<br>";
    // echo $siswa[3]; //ini akan eror
    echo count($siswa);//ini akan memunculkan angka 3
    
    echo "<br>";
    echo "<br>";
    $buah = ["bahlil"=>9, "apel"=>5, "pisang"=>6]; //JADI YANG KIRI ITU KEY YANG KANAN ITU VALUE JADI ARRAY IN ITU BISA ADA DUA TYPE UNTUK ISINYA
    // echo $siswa[3];//INI AKAN EROR KARENA PAKAI KEY BUKAN INDEX LAGI
    echo $buah["bahlil"];
    echo "<br>";
    echo "<br>";



    $siswaBaru = [
        ["nama" => "ahmad", "kelas" => "XLLL"],
        ["nama" => "ahmad2", "kelas" => "XLLL"],
        ["nama" => "budi", "kelas" => "xXLLL"],
        ["nama" => "joko", "kelas" => "XxLLL"]
    ];
    echo $siswaBaru[1]["nama"];//hasilnya ahmad2
    echo "<br>";
    

    // jenis jenis array

    // 1. Indexed array
    // 2. Association array
    // 3. multidimension array