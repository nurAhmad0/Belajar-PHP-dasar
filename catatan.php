<?php
    //gettype itu digunakan untuk mencari type data jadi pure mencari type data
    $j = 7;
    echo gettype($j); ini hasilnya integer

    //kalau var_dump
    echo var_dump($j) ini hasilnya integer(7)




    ==========================================================================



    $buah = ["bahlil", "apel", "pisang"];

    echo implode(", ", $buah);//menampilkan isinya dipisahkan tanda koma tanpa kurung siku:
    //hasilnya bahlil, apel, pisang



    ===========================================================================



    $buah = ["bahlil", "apel", "pisang"];

    // Mengubah array jadi teks berformat JSON
    echo json_encode($buah); 

    