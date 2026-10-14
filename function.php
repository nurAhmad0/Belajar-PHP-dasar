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
    echo "<br>";
    sayHello("Eko", "strtolower");
    
    
    
    //jadi variabel function itu digunakan saat mau membuat sebuh sistem yang dinamis karena dalam variabel bisa diganti mau isinya dari function 1 ke function 2
    
    
    //===================================================anonymous function=======================================================
    // Menyimpan anonymous function ke dalam variabel $sapa
    $sapa = function(string $nama): string {
        return "Halo, " . $nama . "!";
    };
        
    echo "<br>";
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

























    //======================================ARROW FUNCTION====================================================================
    $pengali = 10;
    // Langsung bisa pakai $pengali tanpa ribet tulis "use ($pengali)"
    $hasil = array_map(fn($n) => $n * $pengali, [1, 2, 3]);
    
    // 1. Ketika kamu membuat fungsi callback yang isinya hanya satu baris perintah pengembalian nilai (return). 
    // Arrow function secara otomatis menyertakan perintah return tanpa harus menuliskan kata return secara manual, 
    // sehingga kodenya menjadi sangat singkat.
    
    // 2. Fitur Automatic Variable Binding: Di arrow function, kamu bisa langsung mengakses variabel dari luar cakupan (scope)
    // tanpa perlu memakai kata kunci use seperti pada anonymous function biasa.
    
    
    
    
    
    
    
    
    
    
    
    //======================================callback FUNCTION====================================================================
    function sayHelloHello(string $name, callable $filter){
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }
    
    echo "<br>";
    sayHelloHello("Ahmad1", function ($name) { return strtoupper($name); });
    echo "<br>";
    sayHelloHello("Ahmad1", fn($name) => strtoupper($name));
    echo "<br>";
    sayHelloHello("Ahmad1", "strtoupper");
    echo "<br>";
    sayHelloHello("EkAhmad1", "strtolower");
    echo "<br>";
    
    
    
    
    
    
    //======================================callback FUNCTION====================================================================
    // join() / implode()                                                  Menggabungkan array menjadi string
    
    // explode()                                                           Memecah string menjadi array
    
    // strtolower()                                                        Mengubah string menjadi lowercase
    
    // strtoupper()                                                        Mengubah string menjadi uppercase
    
    // substr()                                                            Mengambil sebagian string    
    
    // trim()                                                              Menghapus whitespace di depan dan belakang string
    echo "<br>";
    var_dump(join(",", [1, 2, 3, 4, 5]));
    echo "<br>";
    var_dump(explode(" ", "Belajar Php sat"));
    echo "<br>";
    var_dump(strtolower("BELAJAR PHP GUYS"));
    echo "<br>";
    var_dump(strtoupper("Ahmad Agus Asu"));
    echo "<br>";
    var_dump(trim("      Ahmad        "));
    echo "<br>";
    var_dump(substr("apaa kao?", 0, 3));
    echo "<br>";
    
    // https://www.w3schools.com/php/func_string_addcslashes.asp
    //lihat link diatas biar lebih paham karena banyak bet
    
    
    
    
    //======================================String FUNCTION====================================================================











































































    // ==================================================================================array funtion=================================================================
    /**
    * Daftar Lengkap Fungsi Manipulasi Array PHP
    * Diterjemahkan dan dirangkum untuk catatan belajar.
    */



    // https://www.w3schools.com/php/php_ref_array.asp
    // ini link biar lebih paham lihat brok

    $tabelFungsiArray = [
        [
            'nama' => 'array()',
            'kegunaan' => 'Membuat sebuah array.',
            'penjelasan' => 'Digunakan untuk menginisialisasi atau mendeklarasikan data bertipe array baru.'
        ],
        [
            'nama' => 'array_change_key_case()',
            'kegunaan' => 'Mengubah semua kunci (key) array menjadi huruf kecil atau huruf besar.',
            'penjelasan' => 'Berguna untuk menyeragamkan penulisan key array agar konsisten (lowercase/uppercase).'
        ],
        [
            'nama' => 'array_chunk()',
            'kegunaan' => 'Memecah array menjadi beberapa bagian array yang lebih kecil.',
            'penjelasan' => 'Berguna untuk membagi data besar menjadi beberapa kelompok kecil per halaman (pagination).'
        ],
        [
            'nama' => 'array_column()',
            'kegunaan' => 'Mengambil nilai dari kolom tertentu dalam array multidimensi.',
            'penjelasan' => 'Sangat sering dipakai untuk mengambil satu kolom spesifik dari hasil query database.'
        ],
        [
            'nama' => 'array_combine()',
            'kegunaan' => 'Membuat array baru dengan menggabungkan satu array sebagai kunci dan satu array sebagai nilai.',
            'penjelasan' => 'Membutuhkan dua array dengan jumlah elemen yang harus persis sama.'
        ],
        [
            'nama' => 'array_count_values()',
            'kegunaan' => 'Menghitung kemunculan semua nilai di dalam array.',
            'penjelasan' => 'Menghasilkan array asosiatif di mana nilai lama menjadi kunci dan jumlah kemunculannya menjadi nilai baru.'
        ],
        [
            'nama' => 'array_diff()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya (berdasarkan nilai saja).',
            'penjelasan' => 'Perbedaan: Hanya mengecek perbedaan nilai (value), mengabaikan key-nya.'
        ],
        [
            'nama' => 'array_diff_assoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya (berdasarkan kunci dan nilai).',
            'penjelasan' => 'Perbedaan: Mengecek perbedaan secara ketat berdasarkan kunci DAN nilai sekaligus.'
        ],
        [
            'nama' => 'array_diff_key()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya (berdasarkan kunci saja).',
            'penjelasan' => 'Perbedaan: Hanya mengecek perbedaan pada kuncinya (key), mengabaikan nilai di dalamnya.'
        ],
        [
            'nama' => 'array_diff_uassoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya berdasarkan kunci dan nilai, menggunakan fungsi perbandingan kunci buatan pengguna.',
            'penjelasan' => 'Mirip array_diff_assoc, namun aturan perbandingan kuncinya diatur sendiri via callback.'
        ],
        [
            'nama' => 'array_diff_ukey()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya berdasarkan kunci saja, menggunakan fungsi perbandingan kunci buatan pengguna.',
            'penjelasan' => 'Mirip array_diff_key, namun aturan perbandingan kuncinya menggunakan fungsi kustom.'
        ],
        [
            'nama' => 'array_fill()',
            'kegunaan' => 'Mengisi array dengan nilai tertentu.',
            'penjelasan' => 'Berguna untuk membuat array baru dengan rentang indeks tertentu yang diisi data seragam.'
        ],
        [
            'nama' => 'array_fill_keys()',
            'kegunaan' => 'Mengisi array dengan nilai tertentu berdasarkan kunci yang sudah ditentukan.',
            'penjelasan' => 'Mirip array_fill, tetapi kuncinya ditentukan secara eksplisit dari array lain.'
        ],
        [
            'nama' => 'array_filter()',
            'kegunaan' => 'Menyaring nilai array menggunakan fungsi callback.',
            'penjelasan' => 'Menghapus elemen yang tidak memenuhi kondisi logika di dalam fungsi buatan pengguna.'
        ],
        [
            'nama' => 'array_flip()',
            'kegunaan' => 'Menukar semua kunci dengan nilai yang ada di dalam array.',
            'penjelasan' => 'Kunci lama menjadi nilai, dan nilai lama berubah menjadi kunci baru.'
        ],
        [
            'nama' => 'array_intersect()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya (berdasarkan nilai saja).',
            'penjelasan' => 'Perbedaan: Mencari nilai yang sama antar array, mengabaikan kuncinya.'
        ],
        [
            'nama' => 'array_intersect_assoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya (berdasarkan kunci dan nilai).',
            'penjelasan' => 'Perbedaan: Hanya mencocokkan elemen yang kunci DAN nilainya sama persis.'
        ],
        [
            'nama' => 'array_intersect_key()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya (berdasarkan kunci saja).',
            'penjelasan' => 'Perbedaan: Hanya mencocokkan kesamaan kuncinya saja, mengabaikan isinya.'
        ],
        [
            'nama' => 'array_intersect_uassoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya berdasarkan kunci dan nilai menggunakan fungsi perbandingan kunci buatan pengguna.',
            'penjelasan' => 'Mirip array_intersect_assoc, namun perbandingan kuncinya menggunakan fungsi kustom.'
        ],
        [
            'nama' => 'array_intersect_ukey()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya berdasarkan kunci saja menggunakan fungsi perbandingan kunci buatan pengguna.',
            'penjelasan' => 'Mirip array_intersect_key, namun perbandingan kuncinya menggunakan fungsi kustom.'
        ],
        [
            'nama' => 'array_key_exists()',
            'kegunaan' => 'Memeriksa apakah kunci tertentu ada di dalam array.',
            'penjelasan' => 'Mengembalikan nilai true jika kunci ditemukan dan false jika tidak.'
        ],
        [
            'nama' => 'array_keys()',
            'kegunaan' => 'Mengembalikan semua kunci dari sebuah array.',
            'penjelasan' => 'Mengubah seluruh kunci array menjadi array indeks baru yang berisi daftar kunci tersebut.'
        ],
        [
            'nama' => 'array_map()',
            'kegunaan' => 'Mengirim setiap nilai array ke fungsi buatan pengguna untuk menghasilkan nilai baru.',
            'penjelasan' => 'Memproses seluruh elemen array menggunakan fungsi kustom dan mengembalikan array baru.'
        ],
        [
            'nama' => 'array_merge()',
            'kegunaan' => 'Menggabungkan satu atau lebih array menjadi satu array.',
            'penjelasan' => 'Jika ada kunci string yang sama, nilai terakhir akan menimpa nilai sebelumnya.'
        ],
        [
            'nama' => 'array_merge_recursive()',
            'kegunaan' => 'Menggabungkan satu atau lebih array menjadi satu array secara rekursif.',
            'penjelasan' => 'Perbedaan dari array_merge: Jika ada kunci yang sama, nilainya tidak ditimpa, melainkan digabung menjadi sub-array baru.'
        ],
        [
            'nama' => 'array_multisort()',
            'kegunaan' => 'Mengurutkan beberapa array atau array multidimensi sekaligus.',
            'penjelasan' => 'Berguna untuk mengurutkan banyak array secara bersamaan agar tetap sinkron.'
        ],
        [
            'nama' => 'array_pad()',
            'kegunaan' => 'Memasukkan sejumlah item dengan nilai tertentu ke dalam array hingga mencapai ukuran tertentu.',
            'penjelasan' => 'Menambahkan elemen pengisi ke akhir array jika panjang array kurang dari yang ditentukan.'
        ],
        [
            'nama' => 'array_pop()',
            'kegunaan' => 'Menghapus elemen terakhir dari sebuah array.',
            'penjelasan' => 'Mengurangi ukuran array sekaligus mengembalikan nilai elemen yang dihapus tersebut.'
        ],
        [
            'nama' => 'array_product()',
            'kegunaan' => 'Menghitung hasil kali dari nilai-nilai di dalam array.',
            'penjelasan' => 'Mengalikan seluruh angka yang ada di dalam elemen array menjadi satu hasil akhir.'
        ],
        [
            'nama' => 'array_push()',
            'kegunaan' => 'Memasukkan satu atau lebih elemen ke akhir array.',
            'penjelasan' => 'Menambahkan data baru di posisi paling belakang dari array.'
        ],
        [
            'nama' => 'array_rand()',
            'kegunaan' => 'Mengembalikan satu atau lebih kunci acak dari sebuah array.',
            'penjelasan' => 'Berguna untuk mengambil sampel data secara acak dari dalam array.'
        ],
        [
            'nama' => 'array_reduce()',
            'kegunaan' => 'Mereduksi array menjadi satu nilai tunggal menggunakan fungsi buatan pengguna.',
            'penjelasan' => 'Menggabungkan seluruh elemen array secara beruntun (seperti akumulator penjumlahan/penggabungan teks).'
        ],
        [
            'nama' => 'array_replace()',
            'kegunaan' => 'Mengganti nilai array pertama dengan nilai dari array berikutnya.',
            'penjelasan' => 'Menimpa nilai array utama berdasarkan kunci yang cocok dari array pengganti.'
        ],
        [
            'nama' => 'array_replace_recursive()',
            'kegunaan' => 'Mengganti nilai array pertama dengan nilai dari array berikutnya secara rekursif.',
            'penjelasan' => 'Perbedaan dari array_replace: Berlaku juga untuk sub-array di dalamnya secara mendalam.'
        ],
        [
            'nama' => 'array_reverse()',
            'kegunaan' => 'Mengembalikan array dengan urutan yang dibalik.',
            'penjelasan' => 'Membalik posisi elemen (elemen terakhir menjadi yang pertama, dst.).'
        ],
        [
            'nama' => 'array_search()',
            'kegunaan' => 'Mencari nilai tertentu dalam array dan mengembalikan kuncinya.',
            'penjelasan' => 'Mencari letak posisi (kunci) dari sebuah nilai yang dicari.'
        ],
        [
            'nama' => 'array_shift()',
            'kegunaan' => 'Menghapus elemen pertama dari array, dan mengembalikan nilainya.',
            'penjelasan' => 'Menggeser seluruh indeks array ke depan setelah elemen pertama dihapus.'
        ],
        [
            'nama' => 'array_slice()',
            'kegunaan' => 'Mengambil bagian tertentu dari sebuah array.',
            'penjelasan' => 'Memotong array menjadi bagian kecil tanpa merusak array aslinya.'
        ],
        [
            'nama' => 'array_splice()',
            'kegunaan' => 'Menghapus dan mengganti elemen tertentu dari sebuah array.',
            'penjelasan' => 'Perbedaan dari array_slice: Mengubah/memotong array asli secara langsung dan bisa menyisipkan elemen baru di tempat yang dipotong.'
        ],
        [
            'nama' => 'array_sum()',
            'kegunaan' => 'Menghitung jumlah total dari nilai-nilai di dalam array.',
            'penjelasan' => 'Menjumlahkan seluruh elemen angka yang ada di dalam array.'
        ],
        [
            'nama' => 'array_udiff()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya berdasarkan nilai menggunakan fungsi perbandingan buatan pengguna.',
            'penjelasan' => 'Mirip array_diff, namun logika perbandingan nilainya diatur sendiri lewat fungsi kustom.'
        ],
        [
            'nama' => 'array_udiff_assoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya berdasarkan kunci dan nilai menggunakan fungsi kustom untuk nilai.',
            'penjelasan' => 'Menggunakan fungsi bawaan untuk kunci dan fungsi kustom untuk membandingkan nilai.'
        ],
        [
            'nama' => 'array_udiff_uassoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan perbedaannya berdasarkan kunci dan nilai menggunakan dua fungsi perbandingan buatan pengguna.',
            'penjelasan' => 'Menggunakan fungsi kustom terpisah untuk membandingkan kunci maupun nilainya.'
        ],
        [
            'nama' => 'array_uintersect()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya berdasarkan nilai menggunakan fungsi perbandingan buatan pengguna.',
            'penjelasan' => 'Mirip array_intersect, namun logika pencocokan nilainya menggunakan fungsi kustom.'
        ],
        [
            'nama' => 'array_uintersect_assoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya berdasarkan kunci dan nilai menggunakan fungsi kustom untuk nilai.',
            'penjelasan' => 'Memadukan perbandingan kunci standar dengan fungsi kustom untuk nilai.'
        ],
        [
            'nama' => 'array_uintersect_uassoc()',
            'kegunaan' => 'Membandingkan array dan mengembalikan persamaannya berdasarkan kunci dan nilai menggunakan dua fungsi perbandingan buatan pengguna.',
            'penjelasan' => 'Menggunakan dua fungsi kustom sekaligus untuk mencocokkan kunci dan nilai.'
        ],
        [
            'nama' => 'array_unique()',
            'kegunaan' => 'Menghapus nilai duplikat dari sebuah array.',
            'penjelasan' => 'Menyaring array agar hanya menyisipkan nilai yang unik/tidak kembar.'
        ],
        [
            'nama' => 'array_unshift()',
            'kegunaan' => 'Menambahkan satu atau lebih elemen ke awal array.',
            'penjelasan' => 'Menyelipkan data baru di posisi paling depan (menggeser indeks lainnya).'
        ],
        [
            'nama' => 'array_values()',
            'kegunaan' => 'Mengembalikan semua nilai dari sebuah array.',
            'penjelasan' => 'Mengambil seluruh value dan mereset kunci array menjadi indeks angka berurutan (0, 1, 2, dst.).'
        ],
        [
            'nama' => 'array_walk()',
            'kegunaan' => 'Menerapkan fungsi buatan pengguna ke setiap anggota array.',
            'penjelasan' => 'Memproses nilai array secara langsung (bisa menggunakan referensi untuk mengubah data aslinya).'
        ],
        [
            'nama' => 'array_walk_recursive()',
            'kegunaan' => 'Menerapkan fungsi buatan pengguna secara rekursif ke setiap anggota array.',
            'penjelasan' => 'Perbedaan dari array_walk: Masuk ke dalam sub-array (array di dalam array) secara mendalam.'
        ],
        [
            'nama' => 'arsort()',
            'kegunaan' => 'Mengurutkan array asosiatif secara menurun (descending) berdasarkan nilai.',
            'penjelasan' => 'Perbedaan dengan asort: Urutannya dari besar ke kecil, serta menjaga asosiasi kuncinya.'
        ],
        [
            'nama' => 'asort()',
            'kegunaan' => 'Mengurutkan array asosiatif secara menaik (ascending) berdasarkan nilai.',
            'penjelasan' => 'Perbedaan dengan arsort: Urutannya dari kecil ke besar, serta menjaga asosiasi kuncinya.'
        ],
        [
            'nama' => 'compact()',
            'kegunaan' => 'Membuat array yang berisi variabel dan nilai-nilainya.',
            'penjelasan' => 'Kebalikan dari extract(), mengubah sekumpulan variabel aktif menjadi bentuk array asosiatif.'
        ],
        [
            'nama' => 'count()',
            'kegunaan' => 'Mengembalikan jumlah elemen di dalam array.',
            'penjelasan' => 'Mengetahui total berapa banyak item yang tersimpan di dalam array.'
        ],
        [
            'nama' => 'sizeof()',
            'kegunaan' => 'Alias dari fungsi count().',
            'penjelasan' => 'Perbedaan: Fungsinya 100% sama persis dengan count(), hanya merupakan nama alternatif (alias).'
        ],
        [
            'nama' => 'current()',
            'kegunaan' => 'Mengembalikan elemen saat ini dalam penunjuk internal array.',
            'penjelasan' => 'Mengambil nilai dari posisi pointer array yang sedang aktif.'
        ],
        [
            'nama' => 'pos()',
            'kegunaan' => 'Alias dari fungsi current().',
            'penjelasan' => 'Perbedaan: Fungsinya sama persis dengan current(), merupakan nama alternatif lama.'
        ],
        [
            'nama' => 'each()',
            'kegunaan' => 'Mengembalikan pasangan kunci dan nilai saat ini dari array.',
            'penjelasan' => 'Catatan: Telah dihapus/dihentikan (deprecated) sejak PHP 7.2, tidak disarankan digunakan lagi.'
        ],
        [
            'nama' => 'end()',
            'kegunaan' => 'Mengatur penunjuk internal array ke elemen terakhirnya.',
            'penjelasan' => 'Memindahkan posisi pointer array ke data paling akhir.'
        ],
        [
            'nama' => 'extract()',
            'kegunaan' => 'Mengimpor variabel ke dalam tabel simbol saat ini dari sebuah array.',
            'penjelasan' => 'Mengubah kunci array asosiatif menjadi variabel-variabel mandiri di dalam program.'
        ],
        [
            'nama' => 'in_array()',
            'kegunaan' => 'Memeriksa apakah sebuah nilai spesifik ada di dalam array.',
            'penjelasan' => 'Mengembalikan true jika nilai ditemukan di dalam array, dan false jika tidak.'
        ],
        [
            'nama' => 'key()',
            'kegunaan' => 'Mengambil kunci dari elemen array saat ini.',
            'penjelasan' => 'Mengetahui nama kunci dari posisi pointer array yang sedang ditunjuk.'
        ],
        [
            'nama' => 'krsort()',
            'kegunaan' => 'Mengurutkan array asosiatif secara menurun (descending) berdasarkan kuncinya.',
            'penjelasan' => 'Perbedaan dengan ksort: Mengurutkan berdasarkan nama kunci dari Z ke A (terbalik).'
        ],
        [
            'nama' => 'ksort()',
            'kegunaan' => 'Mengurutkan array asosiatif secara menaik (ascending) berdasarkan kuncinya.',
            'penjelasan' => 'Perbedaan dengan krsort: Mengurutkan berdasarkan nama kunci dari A ke Z (berurutan).'
        ],
        [
            'nama' => 'list()',
            'kegunaan' => 'Menetapkan variabel seolah-olah itu adalah sebuah array.',
            'penjelasan' => 'Membuka bungkus isi array dan memasukkannya langsung ke beberapa variabel sekaligus.'
        ],
        [
            'nama' => 'natcasesort()',
            'kegunaan' => 'Mengurutkan array menggunakan algoritma "natural order" tanpa membedakan huruf besar/kecil.',
            'penjelasan' => 'Perbedaan dengan natsort: Bersifat case-insensitive (tidak peduli huruf kapital).'
        ],
        [
            'nama' => 'natsort()',
            'kegunaan' => 'Mengurutkan array menggunakan algoritma "natural order".',
            'penjelasan' => 'Mengurutkan string secara alami (contoh: "img12.png" berada setelah "img2.png").'
        ],
        [
            'nama' => 'next()',
            'kegunaan' => 'Memajukan penunjuk internal array satu langkah ke depan.',
            'penjelasan' => 'Memindahkan pointer array ke elemen berikutnya.'
        ],
        [
            'nama' => 'prev()',
            'kegunaan' => 'Memundurkan penunjuk internal array satu langkah ke belakang.',
            'penjelasan' => 'Memindahkan pointer array kembali ke elemen sebelumnya.'
        ],
        [
            'nama' => 'range()',
            'kegunaan' => 'Membuat array yang berisi rentang elemen angka atau huruf.',
            'penjelasan' => 'Berguna untuk membuat deret angka/huruf otomatis (misal dari 1 sampai 10).'
        ],
        [
            'nama' => 'reset()',
            'kegunaan' => 'Mengatur penunjuk internal array ke elemen pertamanya.',
            'penjelasan' => 'Mengembalikan posisi pointer array ke awal (elemen pertama).'
        ],
        [
            'nama' => 'rsort()',
            'kegunaan' => 'Mengurutkan array terindeks secara menurun (descending).',
            'penjelasan' => 'Perbedaan dengan sort: Mengurutkan array angka/string biasa dari nilai terbesar ke terkecil.'
        ],
        [
            'nama' => 'shuffle()',
            'kegunaan' => 'Mengacak urutan isi elemen di dalam array.',
            'penjelasan' => 'Mengubah posisi elemen di dalam array secara acak (random).'
        ],
        [
            'nama' => 'sort()',
            'kegunaan' => 'Mengurutkan array terindeks secara menaik (ascending).',
            'penjelasan' => 'Perbedaan dengan rsort: Mengurutkan array dari nilai terkecil ke terbesar.'
        ],
        [
            'nama' => 'uasort()',
            'kegunaan' => 'Mengurutkan array berdasarkan nilai menggunakan fungsi kustom dengan mempertahankan asosiasi kunci.',
            'penjelasan' => 'Mengurutkan dengan logika buatan sendiri tanpa merusak hubungan antara kunci dan nilainya.'
        ],
        [
            'nama' => 'uksort()',
            'kegunaan' => 'Mengurutkan array berdasarkan kunci menggunakan fungsi perbandingan buatan pengguna.',
            'penjelasan' => 'Mengurutkan berdasarkan kunci array menggunakan aturan logika perbandingan kustom.'
        ],
        [
            'nama' => 'usort()',
            'kegunaan' => 'Mengurutkan array berdasarkan nilai menggunakan fungsi perbandingan buatan pengguna.',
            'penjelasan' => 'Mengurutkan isi array berdasarkan nilai menggunakan fungsi kustom (indeks angka akan ditata ulang).'
        ]
    ];

    // Contoh cara menampilkan data di atas ke dalam bentuk tabel HTML lewat browser:
    /*
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nama Fungsi</th><th>Kegunaan</th><th>Penjelasan / Perbedaan</th></tr>";
    foreach ($tabelFungsiArray as $row) {
        echo "<tr>";
        echo "<td><strong>{$row['nama']}</strong></td>";
        echo "<td>{$row['kegunaan']}</td>";
        echo "<td>{$row['penjelasan']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    */