<?php

    $nama = "Ahmad"; 
    // variable harus diawali dengan &
    // tidak boelh diawali dengan angka dan simbol

    
    echo $nama;




    function contohBiasa() {
        $angka = 1; // Dibuat baru setiap fungsi dipanggil
        echo $angka . "<br>";
        $angka++;
    }
    echo "<br>";
    contohBiasa(); // Output: 1
    echo "<br>";
    contohBiasa(); // Output: 1 (selalu 1 karena di-reset terus)
    echo "<br>";
    contohBiasa(); // Output: 1
    echo "<br>";
    
    
    
    function contohStatic() {
        static $angka = 1; // Hanya diset 1 di awal pemanggilan pertama
        echo $angka . "<br>";
        $angka++; // Nilainya ditambah dan disimpan untuk pemanggilan berikutnya
    }
    
    echo "<br>";
    contohStatic(); // Output: 1  (angka menjadi 2 setelah baris ini)
    echo "<br>";
    contohStatic(); // Output: 2  (angka menjadi 3 setelah baris ini)
    echo "<br>";
    contohStatic(); // Output: 3  (angka menjadi 4 setelah baris ini)
    echo "<br>";
    
    
    $name = "Bahlil";
    
    $otherName = &$name;
    $otherName = "Budi";
    
    echo "<br>";
    echo $name;
    
    
    
    
    
    
    
    
    
    $angka = 10;
    
    // Menambahkan simbol & di depan parameter $n
    function tambahSatu(&$n) {
        $n = $n + 1; // Mengubah nilai asli yang ditunjuk oleh $n
    }
    
    tambahSatu($angka);
    echo $angka; // Output: 11 (Variabel asli luar IKUT berubah!)
    
    echo "<br>";



    $daftarAngka = [1, 2, 3];

    // Menambahkan & pada $nilai agar bisa langsung mengubah isi array asli
    foreach ($daftarAngka as &$nilai) {
        $nilai = $nilai * 2;
    }

    echo "<br>";
    print_r($daftarAngka);
    // Output: Array ( [0] => 2, [1] => 4, [2] => 6 )