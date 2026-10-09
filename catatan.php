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





    ==============================================================================



    <?php
/**
 * ==============================================================================
 * CATATAN BELAJAR PHP: DIFFERENCE OF INCLUDE, REQUIRE, INCLUDE_ONCE, REQUIRE_ONCE
 * ==============================================================================
 * 
 * RANGKUMAN ATURAN EMAS:
 * 1. require vs include  : Menentukan tingkat keparahan saat file HILANG/ERROR.
 *    - require  => File KRUSIAL. Jika hilang, program FATAL ERROR (Mati Total).
 *    - include  => File OPSIONAL/UI. Jika hilang, program WARNING (Lanjut Jalan).
 * 
 * 2. _once vs biasa      : Menentukan apakah file boleh dipanggil BERKALI-KALI.
 *    - _once    => Digunakan untuk file Logika/Fungsi/DB/Class (Mencegah Redeclare Error).
 *    - Biasa    => Digunakan untuk Komponen HTML yang mau di-looping (Dipanggil Berulang).
 */

// ==============================================================================
// 1. require_once 'nama_file.php'
// ==============================================================================
/**
 * ALASAN & KONDISI PENGGUNAAN:
 * - Gunakan untuk file KONFIGURASI UTAMA, KONEKSI DATABASE, dan KUMPULAN FUNGSI (Helper).
 * - Kenapa require? Karena jika koneksi DB atau fungsi hilang, aplikasi tidak bisa bekerja.
 * - Kenapa _once? Karena jika dipanggil lebih dari 1x, PHP akan error "Cannot redeclare function".
 * 
 * CONHO KASUS NYATA:
 */
require_once 'koneksi_database.php';
require_once 'fungsi_helpers.php';


// ==============================================================================
// 2. include_once 'nama_file.php'
// ==============================================================================
/**
 * ALASAN & KONDISI PENGGUNAAN:
 * - Gunakan untuk LAYOUT / STRUKTUR HALAMAN UTAMA (misal: Header, Navbar, Footer).
 * - Kenapa include? Jika file header/footer tidak sengaja terhapus, konten utama web 
 *   sebaiknya tetap bisa dibaca oleh pengguna (tidak mati total).
 * - Kenapa _once? Karena Header atau Footer cukup ditampilkan 1 KALI saja di bagian atas/bawah.
 * 
 * CONTOH KASUS NYATA:
 */
include_once 'templates/header.php';
include_once 'templates/navbar.php';


// ==============================================================================
// 3. include 'nama_file.php' (Tanpa _once)
// ==============================================================================
/**
 * ALASAN & KONDISI PENGGUNAAN:
 * - Gunakan untuk KOMPONEN TAMPILAN (UI) BERULANG di dalam LOOPING (for/foreach).
 * - Kenapa include? Karena ini murni elemen visual/tampilan HTML.
 * - Kenapa BUKAN _once? Jika menggunakan _once di dalam looping, PHP akan MENOLAK 
 *   memuat file tersebut untuk kedua kalinya. Akibatnya, elemen hanya muncul 1 biji.
 * 
 * CONTOH KASUS NYATA:
 */
$daftar_produk = ['Laptop ASUS TUF', 'Mouse Gaming', 'Keyboard Mechanical'];

echo '<div class="katalog-produk">';
foreach ($daftar_produk as $produk) {
    // Dipanggil BERKALI-KALI sesuai jumlah item di dalam array
    include 'components/kartu_produk.php'; 
}
echo '</div>';


// ==============================================================================
// 4. require 'nama_file.php' (Tanpa _once)
// ==============================================================================
/**
 * ALASAN & KONDISI PENGGUNAAN:
 * - Sangat jarang digunakan di project modern.
 * - Digunakan jika kamu punya potongan LOGIKA SCRIPT KRUSIAL yang WAJIB dijalankan 
 *   BERKALI-KALI di tempat berbeda dan akan bahaya jika file-nya tidak ditemukan.
 * 
 * CONTOH KASUS NYATA:
 * Menjalankan script validasi formulir berulang untuk beberapa input field terpisah.
 */
// require 'validasi_input.php';


// ==============================================================================
// TABEL PERBANDINGAN RINGKAS (CHEAT SHEET)
// ==============================================================================
/*
+------------------+-------------------+--------------------+------------------------+
| Perintah         | Jika File Hilang  | Boleh Dipanggil 2x | Cocok Untuk File       |
+------------------+-------------------+--------------------+------------------------+
| require_once     | Fatal Error (Stop)| TIDAK (Diabaikan)  | DB, Config, Fungsi     |
| include_once     | Warning (Lanjut)  | TIDAK (Diabaikan)  | Header, Footer, Navbar |
| include          | Warning (Lanjut)  | YA (Dipanggil lagi)| Kartu UI dalam Looping |
| require          | Fatal Error (Stop)| YA (Dipanggil lagi)| Script Krusial Berulang|
+------------------+-------------------+--------------------+------------------------+
*/

include_once 'templates/footer.php';
?>

















======================================================================================================
<?php
/*
=============================================================================
  CATATAN PEMBELAJARAN PHP: DIFFERENCE BETWEEN INCLUDE & REQUIRE
=============================================================================

  1. PERBEDAAN UTAMA (Mati vs Peringatan)
     - require  : Wajib ada. Jika file hilang, PHP bakal FATAL ERROR & berhenti.
     - include  : Opsional/UI. Jika file hilang, PHP cuma ngeluarin WARNING,
                  program di bawahnya tetap jalan.

  2. PERBEDAAN VARIATION (_once vs Biasa)
     - _once    : Dipanggil TEPAT 1 KALI saja. Jika dipanggil ulang, PHP abaikan.
                  Cegah error "Cannot redeclare function".
     - Biasa    : Bisa dipanggil BERKALI-KALI. Wajib dipakai kalau mau nempel 
                  potongan HTML di dalam looping (foreach/for).

=============================================================================
  STUDI KASUS PROYEK: TOKO ONLINE
=============================================================================
  Bayangkan struktur foldernya seperti ini:
  
  toko-online/
  ├── config.php          <-- Isinya koneksi DB & fungsi backend
  ├── header.php          <-- Isinya navigasi / menu atas (HTML)
  ├── produk_card.php     <-- Isinya tampilan 1 kotak produk (HTML)
  ├── iklan_sidebar.php   <-- Isinya banner promo opsional (HTML)
  └── index.php           <-- File utama
=============================================================================
*/

// --------------------------------------------------------------------------
// 1. REQUIRE_ONCE
// --------------------------------------------------------------------------
// Digunakan untuk: Config, DB, & Kumpulan Fungsi Backend.
//
// Alasan require : Kalau DB / fungsi hilang, web mati total (tidak bisa transaksi).
// Alasan _once   : Di dalamnya ada fungsi. Kalau dipanggil 2x bakal error redeclare.

require_once 'config.php'; // Contoh pemanggilan aktual

// Simulasi data dari DB
$daftar_produk = ["Sepatu Sneakers", "Baju Kaos", "Celana Jeans"];


// --------------------------------------------------------------------------
// MULAI TAMPILAN HTML / FRONTEND
// --------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Studi Kasus Include & Require</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .katalog { display: flex; gap: 10px; margin: 20px 0; }
        .card { border: 1px solid #ccc; padding: 15px; border-radius: 8px; }
    </style>
</head>
<body>

    <!-- 
    -------------------------------------------------------------------------
    2. INCLUDE_ONCE
    -------------------------------------------------------------------------
    Digunakan untuk: Template UI utama yang cuma tampil 1x (Header, Footer, Navbar).
    
    Alasan include : Kalau header hilang, minimal konten produk masih kelihatan.
    Alasan _once   : Menu navigasi cukup dipanggil 1x di paling atas halaman.
    -->
    <?php include_once 'header.php'; ?>


    <main>
        <h2>Daftar Produk Kami</h2>
        
        <div class="katalog">
            <!-- 
            -----------------------------------------------------------------
            3. INCLUDE (Biasa / Tanpa _once)
            -----------------------------------------------------------------
            Digunakan untuk: Komponen UI yang dirender berulang kali di dalam looping.
            
            Alasan include    : Ini cuma potongan HTML biasa.
            Alasan TANPA _once: Kalau pakai _once, produk ke-2 dan ke-3 GAGAL
                                muncul karena PHP mengira file sudah pernah dimuat.
            -->
            <?php foreach ($daftar_produk as $item) : ?>
                
                <?php include 'produk_card.php'; ?>

            <?php endforeach; ?>
        </div>
    </main>


    <aside>
        <!-- 
        ---------------------------------------------------------------------
        4. INCLUDE (Untuk Widget Opsional)
        ---------------------------------------------------------------------
        Digunakan untuk: Banner iklan, widget cuaca, komponen sampingan.
        
        Alasan include : Ini elemen bonus. Kalau filenya hilang/salah ketik, 
                         toko online tetap harus bisa diakses tanpa error fatal.
        -->
        <?php include 'iklan_sidebar.php'; ?>
    </aside>

</body>
</html>












===============================================================================================================
$nama = "Osama";
$panggilan = "Bro";
$umur = 20;

// Mengambil banyak variabel sekaligus
$sapa = function() use ($nama, $panggilan, $umur) {
    echo "Halo $panggilan $nama, umur kamu $umur tahun!";
    };
    
    $sapa(); // Output: Halo Bro Osama, umur kamu 20 tahun!
    
    ===============================================================================================================



    $diskon = 10;

$hitung = function($harga) use ($diskon) {
    return $harga - $diskon;
};






$diskon = 10;

// Lebih ringkas: Pakai 'fn', tanpa 'use', tanpa kata 'return', tanpa kurung kurawal
$hitung = fn($harga) => $harga - $diskon;

echo $hitung(100); // Output: 90






==========================================================================================================================


<?php
/*
=============================================================================
  CATATAN PEMBELAJARAN PHP: FUNCTION TYPES & PARAMETER VS USE
=============================================================================

  RINGKASAN MATERI:
  1. Jenis-jenis Function di PHP (Named, Anonymous/Closure, Arrow Function)
  2. Kapan Harus Menggunakan Masing-Masing Jenis Function
  3. Konsep Parameter vs 'use ()' pada Anonymous Function
  4. Kenapa 'use ()' Lebih Baik daripada 'global'

=============================================================================
*/

// ==========================================================================
// BAGIAN 1: JENIS-JENIS FUNCTION & KAPAN DIGUNAKANNYA
// ==========================================================================

/*
  1. NAMED FUNCTION (Fungsi Biasa)
     - Syntax  : function namaFungsi() { ... }
     - Kapan   : Untuk logika utama aplikasi, helper global, atau Method Class (OOP).
     - Alasan  : Kodenya rapi, mudah di-debug, dan punya nama yang jelas.
     - Ciri    : Mengalami 'Hoisting' (bisa dipanggil sebelum dideklarasikan).
*/

function hitungDiskonUtama($totalBelanja, $persenDiskon) {
    if ($totalBelanja < 100000) {
        return 0;
    }
    return $totalBelanja * ($persenDiskon / 100);
}

// Dipanggil secara jelas sebagai fungsi utama
$diskon = hitungDiskonUtama(150000, 10);


/*
  2. ANONYMOUS FUNCTION IN VARIABLE (Closure)
     - Syntax  : $var = function() use ($ext) { ... }; (Wajib diakhiri ;)
     - Kapan   : Untuk callback lokal multi-baris yang butuh variabel luar ($use).
     - Alasan  : Mencegah 'Global Scope Pollution' (fungsi sekali pakai tidak perlu 
                 diberi nama global).
     - Ciri    : Harus dibuat DULU baru bisa dipanggil di bawahnya.
*/

$biayaLayanan = 2000;

$prosesHitungLokal = function($hargaItem) use ($biayaLayanan) {
    // Logika multi-baris
    $subtotal = $hargaItem * 2;
    return $subtotal + $biayaLayanan;
};

$totalLokal = $prosesHitungLokal(15000);


/*
  3. ARROW FUNCTION (PHP 7.4+)
     - Syntax  : fn($x) => $x * 2 (Wajib pakai 'fn', BUKAN 'function')
     - Kapan   : Untuk callback array singkat 1 baris (array_map, array_filter).
     - Alasan  : Sangat ringkas, otomatis bisa baca variabel luar TANPA 'use'.
*/

$batasMinimum = 50;
$daftarAngka = [20, 60, 30, 80, 100];

// Otomatis membaca $batasMinimum tanpa perlu diketik 'use ($batasMinimum)'
$angkaLolos = array_filter($daftarAngka, fn($angka) => $angka > $batasMinimum);


// ==========================================================================
// BAGIAN 2: PARAMETER VS USE ()
// ==========================================================================

/*
  PERBEDAAAN UTAMA:
  - PARAMETER ( ... ) :
    Data yang dikirim/disetir oleh SI PEMANGGIL FUNGSI saat fungsi dijalankan.
    Digunakan jika datanya berubah-ubah tiap kali dipanggil.

  - USE ( ... ) :
    Data / variabel yang "diculik" dari LINGKUNGAN LUAR saat fungsi DIBUAT.
    Digunakan jika data tersebut adalah konfigurasi tetap atau saat fungsinya 
    DIPANGGIL OTOMATIS oleh sistem/PHP (Callback) yang parameternya sudah baku.
*/

// --- SKENARIO NYATA PENGGUNAAN USE (CALLBACK ARRAY) ---
$pajakToko = 1000;
$listHarga = [10000, 20000, 30000];

/*
  Kenapa di bawah ini $harga pakai PARAMETER, tapi $pajakToko pakai USE?
  - $harga      : Diisi otomatis oleh array_map (elemen 10000, 20000, dst).
  - $pajakToko  : Ditarik dari luar via 'use' karena array_map bawaan PHP 
                  CUMA BISA mengirim 1 data ($harga) ke parameter callback.
*/
$hargaFinal = array_map(function($harga) use ($pajakToko) {
    return $harga + $pajakToko;
}, $listHarga);


// ==========================================================================
// BAGIAN 3: KENAPA USE LEBIH BAIK DARI 'global' ?
// ==========================================================================

/*
  1. Keamanan Data (Pass-by-Value):
     'use' secara default hanya MENGGANDAKAN (copy) nilai variabel. Jika nilai 
     di dalam fungsi diubah, variabel aslinya di luar TETAP AMAN (tidak rusak).
     Sedangkan 'global' akan merusak/mengubah variabel luar secara tidak sengaja.

  2. Scope Bertingkat:
     'global' HANYA bisa mengambil variabel dari root level paling luar.
     'use' bisa mengambil variabel dari parent scope (misal fungsi di dalam fungsi).
*/

$stokBarang = 10;

$transaksiAman = function() use ($stokBarang) {
    $stokBarang = $stokBarang - 1; // Hanya mengurangi salinan di DALAM fungsi
};

$transaksiAman();
// Nilai $stokBarang di luar TETAP 10 (Aman dari efek samping / side effects)


// ==========================================================================
// PENUTUP / DISPLAY TEST OUTPUT
// ==========================================================================
echo "--- HASIL UJI COBA KODE ---\n";
echo "1. Diskon Utama   : " . $diskon . "\n";
echo "2. Total Lokal    : " . $totalLokal . "\n";
echo "3. Angka Lolos    : " . implode(", ", $angkaLolos) . "\n";
echo "4. Harga Final[0] : " . $hargaFinal[0] . "\n";
echo "5. Stok Luar      : " . $stokBarang . " (Terbukti Aman)\n";




































===============================================================================================================




<?php
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
?>
























======================================================================================================


$teks = "belajar pemrograman php";
$hasil = strtoupper($teks);

echo $hasil; // Output: BELAJAR PEMROGRAMAN PHP







$teks = "SISTEM INFORMASI UNIVERSITAS JEMBER";
$hasil = strtolower($teks);

echo $hasil; // Output: sistem informasi universitas jember





$teks = "halo dunia";
echo ucfirst($teks); // Output: Halo dunia






$teks = "osama nur mohamad";
echo ucwords($teks); // Output: Osama Nur Mohamad







































========================================================================
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit(); // 🛑 BERHENTI KETAT! PHP langsung menyetop eksekusi saat itu juga.
}

// Kode di bawah ini dijamin 100% aman dan tidak akan disentuh oleh server.
hapusDataPentingDatabase();





if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    // Tanpa exit(), PHP AKAN TETAP MENJALANKAN KODE DI BAWAH INI sampai selesai di server!
}

// ⚠️ BAHAYA KEEAMANAN:
// Kode rahasia atau query database di bawah ini tetap dieksekusi di server
// sebelum browser benar-benar berpindah halaman.
hapusDataPentingDatabase(); 
echo "Data Rahasia Admin";