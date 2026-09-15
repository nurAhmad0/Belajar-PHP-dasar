<!-- ada global, local, static -->

<?php

    $panjang = "5"; //ini itu sudah termasuk global dan global variabel itu diluar function 
    $lebar = "5";
    
    // function myFunction() {
    //     // ini tidak aakan muncul karena mengambil global variabel
    //     echo 'panjangnya adalah '.$panjang; //ini concat menggabungkan string dengan variabel
    //     echo "<br>";//ini untuk enter
    //     echo 'lebarnya adalah '.$lebar;

    // }

    echo 'panjangnya adalah '.$panjang; //ini concat menggabungkan string dengan variabel
    echo "<br>";//ini untuk enter
    echo 'lebarnya adalah '.$lebar;

    // myFunction(); //ini akan eror



    // ini local variabel
    function localVariabel() {
        $panjang = 10;
        $lebar = 7;
        echo '<br>';
        echo '<br>';
        echo 'ini adalah panjang dan local variabel '.$panjang;
        echo '<br>';
        echo 'ini adalah lebar dan local variabel '.$lebar;

        //jadi local variable itu hanya bsia di akses didalam kurung kurrawal saja
        //jadi meskipun sama nama varibale untuk local dan global itu tidak akan eror
    }

    localVariabel();
    // echo $sisi; //ini akan eror karena mau mengakses local variabel




    $luasPersegi = 56;

    function luasP() {
        global $luasPersegi;

        echo '<br>';
        echo '<br>';
        echo 'luas dari persegi adalah '.$luasPersegi;

    }

    luasP();


    function tambahX() {
        $X = 1;
        echo 'X saat ini adalah '.$X; //X =2 dihapus lalu menjadi 1 lagi kalau tidak mau dihapus itu pakai static
        $X++;
    }

    echo '<br>';
    tambahX(); ///jadi setiap function yang dijalankan itu seharusnya 2 bukan 1 kan diakhir itu menambhakn X dengan 1 jadi seharunya kalau dipanggil itu menjadi 2
    echo '<br>';
    tambahX();


    function tambahXStatic() {
        static $X = 1;
        
        echo 'static X saat ini adalah '.$X; //X =2 dihapus lalu menjadi 1 lagi kalau tidak mau dihapus itu pakai static
        $X++;
    }

    echo '<br>';
    tambahXStatic(); ///jadi setiap function yang dijalankan itu seharusnya 2 bukan 1 kan diakhir itu menambhakn X dengan 1 jadi seharunya kalau dipanggil itu menjadi 2
    echo '<br>';
    tambahXStatic();


    //jadi static itu tidak akan hoilang ingatannya saat selesai menjalankan function 
