<?php
    $a = 3;
    $b = 5;


    $c = $a + $b; //+, -, *, %, **
    echo $c;




    //asigment operator
    //(a-=b), (a+=b), (a=b), (a*=b), (a/=b), (a%=b)
    echo "<br>";
    echo $a*=$b; 
    echo "<br>";
    
    $d = $a-=$b;
    echo $d; 
    
    
    
    //comparison operator 
    // (==), (===), (!= atau bisa juga dengan <>), (!==), (a>b),(a<b),(a>=b),(a<=b)
    
    
    echo "<br>";
    var_dump ($a == $b);
    echo "<br>";
    echo $a > $b; //ini jika flase maka akan diubah menajdi string kosong "" kalau true maka akan muncul 1
    echo "<br>";
    echo ($a == $b) ? 'true' : 'false'; // Output: false
    
    
    
    
    
    //inrement dan decrement\
    //(++$a ini ditambah stau dulu baru di return), ($a++ ini direturn dulu baru ditambah)(ada juga yang pakai -)
    
    //b saat ini 5
    
    echo "<br>";
    echo "<br>";
    echo $b; //HASIL 5
    echo "<br>";
    echo $b++; //HASIL 5
    echo "<br>";
    echo $b; //HASIL 6
    echo "<br>";
    echo ++$b;// HASIL 7
    echo "<br>";
    echo $b;//HASIL 7
    echo "<br>";
    
    
    
    //logical operator
    // 1. ($a <10 and $b > 10) atau bisa juga pakai yang seperti ini and($a <10 && $b > 10)
    // 1. ($a <10 or $b > 10) atau bisa juga pakai yang seperti ini ($a <10 || $b > 10)
    // 1. ($a <10 xor $b > 10) return true jika salah stau benar dan false jika keduanya benar atau jika keduanya salah maka false
    
    echo "<br>";
    echo $a; //hasil 10
    echo "<br>";
    echo $b;//HASIL 7
    echo "<br>";
    var_dump($a > 20 xor $b < 10);
    
    
    //string operator
    echo "<br>";
    echo "<br>";
    $x = "hello";
    $y = " World";
    echo $x.$y; //ini menggabungkan saja tanpa perlu mengubah nilai dari salah satunya
    echo "<br>";
    echo $x.=$y; //ini mengambil nilai dari y lalu dimgabbungkan dengan x 
    echo "<br>";
    echo $x; // ini hasilnya = hello world
    echo "<br>";
    echo $y;// hasilnya = world
    
    
    //condotional operator
    //ternary ($a = gettype(5) == 'integer'? 'integer'??'bukan integer') //jadi hasil integer itu true dan 'bukan integer' itu false
    //null coalescing ($x = $namaLengkap??$namaSaja); jika variabel nama lengkap ada maka pakai nama lengkap saja kalau null pakai isi dari variabel namaSaja

    
    echo "<br>";
    echo "<br>";
    $j = 7;
    echo gettype($j);
    echo "<br>";
    echo "<br>";
    $p = gettype(5) == 'integer'? 'tipe integer':'bukan integer';
    echo $p;
    echo "<br>";
    echo "<br>";
    $namaLengkap = "ahmad";
    $i = $namaLengkap??'nama saat ini budi';
    echo $i;


