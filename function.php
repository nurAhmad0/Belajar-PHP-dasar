<?php
    hai();
    hai();

    function hai () {
        echo 'hai semuanya';
        echo "<br>";
        }
        
        
    hai();
    hai();
    hai();
        
        
        
    function ulangTahun($nama, $umur=1)  {
        echo 'Selamat Ualng Tahun '.$nama." kamu saat ini berumur ".$umur;
        echo "<br>";    
    }


    ulangTahun("agus",17);
    ulangTahun("budi", 16);
    ulangTahun("tono", 20);
    ulangTahun("bahlil");



    function hitungLuas($angka1, $angka2) {
        return ($angka1 * $angka2);
        echo "<br>";
    }



    echo hitungLuas(2000, 5000);


    function buatProfil($nama = "Anonim", $umur = 18, $kota = "Jakarta") {
        return "Nama: $nama, Umur: $umur, Kota: $kota";
    }


    // Cuma mau mengisi parameter $kota:
    echo buatProfil(kota: "Surabaya");
    // Output: Nama: Anonim, Umur: 18, Kota: Surabaya

    // Cuma mau mengisi parameter $umur:
    echo buatProfil(umur: 25);
    // Output: Nama: Anonim, Umur: 25, Kota: Jakarta

    // Mengisi $nama dan $kota (umur tetap default):
    echo buatProfil(nama: "Osama", kota: "Jember");
    // Output: Nama: Osama, Umur: 18, Kota: Jember


    //===================================================variabel function=======================================================
    echo "<br>";
    // 1. Mendefinisikan dua fungsi biasa
    function foo() {
        echo "Fungsi FOO dijalankan<br>";
    }
    echo "<br>";
    function bar() {
        echo "Fungsi BAR dijalankan<br>";  
    }
    echo "<br>";
    // 2. Menggunakan Variable Function
    $functionName = "foo"; // Variabel berisi string "foo"
    $functionName();       // PHP akan mengeksekusi fungsi foo() karena isi variabel adalah "foo"
    
    $functionName = "bar"; // Nilai variabel diubah menjadi "bar"
    $functionName();       // PHP sekarang akan mengeksekusi fungsi bar()
    
    
    function sayHello(string $name, $filter){//filter ini berisi tentang function yang dimasukkan sebagai parameter atau function callback 
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
    }
    
    
    sayHello("Eko", "strtoupper");
    sayHello("Eko", "strtolower");
    
    
    
    //jadi variabel function itu digunakan saat mau membuat sebuh sistem yang dinamis karena dalam variabel bisa diganti mau isinya dari function 1 ke function 2
    
    
    //===================================================anonymous function=======================================================
    // Menyimpan anonymous function ke dalam variabel $sapa
    $sapa = function(string $nama): string {
        return "Halo, " . $nama . "!";
    };

    // Cara memanggilnya menggunakan nama variabelnya
    echo $sapa("Ahmad"); // Output: Halo, Ahmad!



    $angka = [1, 2, 3, 4];

    // Menggunakan anonymous function langsung di dalam parameter array_map
    $angkaBaru = array_map(function($n) {
        return $n * 2;
    }, $angka);

    print_r($angkaBaru); // Output: [2, 4, 6, 8]
    // sebagai Argumen dalam Fungsi Lain (Callback)
    // Jika kamu menggunakan fungsi biasa untuk kasus ini, kamu harus mendefinisikan fungsi bernama di tempat terpisah, 
    // yang membuat kodenya menjadi jauh lebih panjang dan terpecah-pecah.




    $pengali = 5;

    $kali = function($n) use ($pengali) {
        return $n * $pengali;
    };

    echo $kali(10); // Output: 50
    // Anonymous function di PHP memiliki kemampuan khusus untuk "membawa" atau mengakses variabel yang berada di luar 
    // cakupannya menggunakan kata kunci use

