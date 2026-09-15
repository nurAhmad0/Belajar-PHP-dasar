<?php
    //string
    var_dump("hello world");
    echo '<br>';
    var_dump("10");
    
    //perbedaan dari " dan '
    $PetikDua = "bebek";
    echo '<br>';
    var_dump("10 $PetikDua goreng");// hasil = string(15) "10 bebek goreng"
    
    echo '<br>';
    $nama = "Osama";

    // Variabel $nama langsung terbaca nilainya
    echo "Halo $nama!"; 

    // Output di browser/layar: 
    // Halo Osama!
    $PetikSatu = "bebek";
    echo '<br>';
    var_dump('10 $PetikSatu goreng'); //hasil = string(20) "10 $PetikSatu goreng"
    
    
    
    //integer
    echo '<br>';
    echo '<br>';
    echo '<br>';
    $angka = 10;
    var_dump($angka);
    echo '<br>';
    $angka = -210;
    var_dump($angka);
    
    
    //float
    echo '<br>';
    $angkaFloat = 1.5;
    var_dump($angkaFloat);
    echo '<br>';
    $angkaFloat = -1.5;
    var_dump($angkaFloat);
    
    
    
    //boolean
    echo '<br>';
    $AngkaAsli = 67;
    var_dump(is_int($AngkaAsli));
    
    
    
    //array
    $dataArray1 = array("jeruk", "apel", "pisang");//ini sama seperti yang bawah
    echo '<br>';
    var_dump($dataArray1);
    $dataArray2 = ["jeruk", "apel", "pisang"];
    echo '<br>';
    var_dump($dataArray2);
    
    
    
    //null
    $dataNull = null;
    echo '<br>';
    var_dump($dataNull);

    

