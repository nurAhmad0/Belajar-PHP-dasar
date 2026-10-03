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
    
    echo '<br>';
    $angkaGaris = 2_010;//ini hanya unutk mudah di baca jadi untuk membagi ribuan tapi nanti akan di ignore
    var_dump($angkaGaris);//hasilnya int(2010)


    
    
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
    
    
    echo '<br>';
    echo '<br>';
    $nilaiFloat = 12.85;
    $nilaiString = "150 buah";
    $nilaiBool = true;
    
    $castInt1 = (int) $nilaiFloat;   // Hasil: 12 (angka di belakang koma dibuang)
    echo '<br>';
    $castInt2 = (int) $nilaiString;  // Hasil: 150 (mengambil angka di awal teks)
    echo '<br>';
    $castInt3 = (int) $nilaiBool;    // Hasil: 1 (true jadi 1, false jadi 0)
    echo '<br>';
    $nilaiInt = 50;
    $nilaiString = "45.75";
    
    $castFloat1 = (float) $nilaiInt;    // Hasil: 50.0 (atau 50)
    echo '<br>';
    $castFloat2 = (float) $nilaiString; // Hasil: 45.75
    echo '<br>';
    
    
    $angka = 250;
    $status = true;
    
    echo '<br>';
    $castString1 = (string) $angka;  // Hasil: "250"
    echo '<br>';
    $castString2 = (string) $status; // Hasil: "1" (false jadi string kosong "")
    echo '<br>';
    
    
    $angkaAda = 10;
    $angkaNol = 0;
    $textKosong = "";
    
    echo '<br>';
    $castBool1 = (bool) $angkaAda;   // Hasil: true (angka selain 0 adalah true)
    echo '<br>';
    $castBool2 = (bool) $angkaNol;   // Hasil: false
    echo '<br>';
    $castBool3 = (bool) $textKosong; // Hasil: false (string kosong adalah false)
    echo '<br>';
    
    
    
    $nama = "Osama";
    $angka = 99;
    
    echo '<br>';
    $castArray1 = (array) $nama;  // Hasil: ["Osama"] (array dengan 1 elemen di indeks 0)
    echo '<br>';
    $castArray2 = (array) $angka; // Hasil: [99]
    echo '<br>';
    
    // Mengubah Array Assoc ke Object
    $userArray = ['nama' => 'Osama', 'umur' => 20];
    $userObj = (object) $userArray;
    
    // Sekarang bisa diakses pakai panah ->
    echo '<br>';
    echo $userObj->nama; // Hasil: Osama



