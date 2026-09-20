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

