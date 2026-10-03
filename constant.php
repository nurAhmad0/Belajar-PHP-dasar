<?php

    //declare variabel
    $angka = 4;

    //declare constant
    define('constant1', 8);// ada dua paramter yang satu nama constant seperti nama variabel yang parameter dua itu nilainya
    //tidak bisa di ubah untuk constant nilainya

    function contohConctant() {
        echo constant1;//ini bisa jadi constant itu tidak dipengaruhi oleh scope
    }
    echo $angka;
    echo "<br>";
    echo constant1;
    echo "<br>";
    contohConctant();


    //===================================catatam===================================================================
    // Fitur / Perbedaan                   define()                                    const

    // Waktu Diproses                      Runtime (Saat program jalan)                Compile-time (Saat kompilasi)  
    // Bisa di dalam if / function?        Ya                                          Tidak
    // Bisa di dalam Class (OOP)?          Tidak                                       Ya
    // Nama Konstanta Dinamis?             Ya                                          Tidak
    // Kecepatan Performa                  Sedikit lebih lambat                        Sedikit lebih cepat





    // ❌ ERROR / INVALID (Tidak bisa jika pakai const)
    if ($environment === 'development') {
        const DB_NAME = 'db_dev';
    } else {
        const DB_NAME = 'db_production';
    }

    // ✅ BERHASIL (Harus pakai define)
    if ($environment === 'development') {
        define('DB_NAME', 'db_dev');
    } else {
        define('DB_NAME', 'db_production');
    }


    function inisialisasiApp() {
    // ❌ ERROR (const tidak boleh di dalam fungsi)
    // const IS_READY = true; 

    // ✅ BERHASIL
    define('IS_READY', true);
    }

    inisialisasiApp();






    /**
     * ==============================================================================
     * CATATAN LENGKAP: CONST VS DEFINE() DALAM PHP
     * ==============================================================================
     * 
     * Pengertian Singkat:
     * Baik 'const' maupun 'define()' digunakan untuk membuat KONSTANTA (constant),
     * yaitu tempat penyimpanan nilai yang sifatnya tetap/permanen dan nilainya 
     * TIDAK BISA diubah atau dihapus selama program berjalan.
     */

    // ==============================================================================
    // 1. PENGERTIAN & CONTOH DASAR
    // ==============================================================================

    // Menggunakan define() -> Diproses saat RUNTIME (saat program mengeksekusi baris ini)
    define("NAMA_APLIKASI", "Portal Mahasiswa UNEJ");
    define("VERSI_APP", "1.0.0");

    // Menggunakan const -> Diproses saat COMPILE-TIME (sebelum program dieksekusi)
    const NAMA_KAMPUS = "Universitas Jember";
    const TAHUN_BERDIRI = 1964;

    // Menampilkan Nilai Konstanta (Diakses tanpa tanda dollar '$')
    echo "App Name: " . NAMA_APLIKASI . "<br>";
    echo "Kampus: " . NAMA_KAMPUS . "<br>";


    // ==============================================================================
    // 2. LINGKUP (SCOPE) KONSTANTA
    // ==============================================================================
    // Berbeda dengan variabel biasa, konstanta bersifat GLOBAL SECARA OTOMATIS.
    // Kamu bisa memanggilnya di dalam fungsi tanpa perlu kata kunci 'global'.

    $variabelBiasa = 10;

    function tesScope() {
        // echo $variabelBiasa; // ❌ Error: Undefined variable
        
        echo "Panggil di dalam fungsi: " . NAMA_APLIKASI . "<br>"; // ✅ BERHASIL
    }
    tesScope();


    // ==============================================================================
    // 3. KAPAN GUNAKAN DEFINE() ?
    // ==============================================================================
    // Gunakan define() jika kamu butuh fleksibilitas tingkat lanjut:

    // A. Di Dalam Pengkondisian (if / else)
    $modeDevelopment = true;

    if ($modeDevelopment) {
        define("DB_HOST", "localhost");
        define("DB_NAME", "db_belajar_dev");
    } else {
        define("DB_HOST", "192.168.1.100");
        define("DB_NAME", "db_belajar_prod");
    }

    // B. Di Dalam Fungsi
    function initConfig() {
        define("CONFIG_LOADED", true);
    }
    initConfig();

    // C. Nama Konstanta Dinamis (Memakai Variabel/Penggabungan String)
    $prefix = "AKSES_";
    define($prefix . "ADMIN", 1); // Menghasilkan konstanta AKSES_ADMIN
    echo "Akses Admin ID: " . AKSES_ADMIN . "<br>";


    // ==============================================================================
    // 4. KAPAN GUNAKAN CONST ?
    // ==============================================================================
    // Gunakan const sebagai PILIHAN UTAMA untuk penulisan PHP Modern:

    // A. Di Tingkat Atas File (Top-Level Configuration)
    const MAX_FILE_SIZE = 5000000; // 5MB
    const ALLOWED_EXTENSIONS = ['jpg', 'png', 'pdf']; // PHP 7+ mendukung Array di const

    // B. Di Dalam Pemrograman Berorientasi Objek (Class / OOP)
    class Database {
        // const WAJIB digunakan untuk konstanta di dalam class. define() TIDAK BISA di sini.
        const DRIVER = "mysql";
        const PORT = 3306;

        public function getInfo() {
            // Mengakses konstanta di dalam class memakai self::
            return "Menggunakan driver: " . self::DRIVER;
        }
    }

    $db = new Database();
    echo $db->getInfo() . "<br>";
    echo "Port DB: " . Database::PORT . "<br>"; // Mengakses langsung dari luar class


    // ==============================================================================
    // 5. FITUR TAMBAHAN & MATRIKS PERBANDINGAN
    // ==============================================================================
    /*
    +---------------------------------+---------------------------------+---------------------------------+
    | Fitur / Perilaku                | define()                        | const                           |
    +---------------------------------+---------------------------------+---------------------------------+
    | Waktu Diproses                  | Runtime (Saat program jalan)    | Compile-time (Saat kompilasi)   |
    | Performa                        | Sedikit lebih lambat            | Sedikit lebih cepat             |
    | Bisa di dalam Class (OOP)?      | TIDAK BISA                      | BISA                            |
    | Bisa di dalam if / function?    | BISA                            | TIDAK BISA                      |
    | Nama Dinamis (Pakai Variabel)?  | BISA                            | TIDAK BISA                      |
    | Tipe Data Array                 | Ya (PHP 7.0+)                   | Ya (PHP 5.6+)                   |
    | Case-Insensitive Name           | Opsional (PHP < 8.0), Hapus(8+) | Tidak Pernah                    |
    +---------------------------------+---------------------------------+---------------------------------+
    */


    // ==============================================================================
    // 6. KESIMPULAN / RULE OF THUMB
    // ==============================================================================
    /*
    1. Default Utama: Pakai 'const' untuk 90% kebutuhan penulisan kode PHP modern,
        terutama di dalam Class (OOP) atau konfigurasi statis di bagian paling atas file.
    2. Gunakan 'define()' HANYA jika kamu terpaksa harus mendefinisikan konstanta di dalam
        blok 'if/else', di dalam fungsi, atau butuh nama konstanta yang dinamis.
    */
