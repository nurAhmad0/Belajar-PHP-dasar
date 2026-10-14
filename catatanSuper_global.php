<?php
/**
 * =========================================================================
 * CATATAN LENGKAP: PHP SUPERGLOBALS (VARIABEL GLOBAL)
 * =========================================================================
 * Superglobals adalah variabel bawaan PHP yang otomatis bisa diakses 
 * dari bagian mana pun di dalam program tanpa perlu keyword global atau use.
 * 
 * Daftar Superglobals yang dibahas:
 * 1. $GLOBALS
 * 2. $_SERVER
 * 3. $_GET
 * 4. $_POST
 * 5. $_REQUEST
 * 6. $_FILES
 * 7. $_COOKIE
 * 8. $_SESSION
 * 9. $_ENV
 * =========================================================================
 */


/*
 * =========================================================================
 * 1. $GLOBALS
 * =========================================================================
 * Penjelasan: Array besar yang menampung semua variabel global skrip.
 * Status: Jarang/dihindari di PHP modern karena melanggar enkapsulasi.
 */
$namaAplikasi = "Sistem Toko Online";

function cekGlobal() {
    // Mengakses variabel luar langsung menggunakan array $GLOBALS
    echo "1. \$GLOBALS: Selamat datang di " . $GLOBALS['namaAplikasi'] . PHP_EOL;
}
cekGlobal();
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 2. $_SERVER
 * =========================================================================
 * Penjelasan: Menyimpan informasi server, jalur file, IP, dan metode HTTP.
 * Status: Sangat sering digunakan.
 */
// Mengetahui file yang sedang diakses dan metode request-nya
echo "2. \$_SERVER:" . PHP_EOL;
echo "File Script Saat Ini : " . $_SERVER['PHP_SELF'] . PHP_EOL;
echo "Metode HTTP Request  : " . $_SERVER['REQUEST_METHOD'] . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 3. $_GET
 * =========================================================================
 * Penjelasan: Menangkap data yang dikirim melalui URL (parameter ?key=value).
 * Status: Sangat sering digunakan (pencarian, pagination, filter).
 */
// Contoh simulasi URL: halaman.php?nama=Budi&role=admin
// Jika dijalankan di browser dengan parameter tersebut, kodenya membaca:
// $namaUser = $_GET['nama'] ?? 'Tamu';
echo "3. \$_GET:" . PHP_EOL;
echo "Digunakan untuk menangkap data dari URL (contoh: ?nama=Budi)." . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 4. $_POST
 * =========================================================================
 * Penjelasan: Menangkap data dari form HTML dengan method="POST" (aman/rahasia).
 * Status: Sangat sering digunakan (form login, registrasi, input data).
 */
echo "4. \$_POST:" . PHP_EOL;
echo "Digunakan untuk menangkap data form tersembunyi (seperti password/registrasi)." . PHP_EOL;
echo "Contoh penangkapan: \$username = \$_POST['username'] ?? '';" . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 5. $_REQUEST
 * =========================================================================
 * Penjelasan: Wadah gabungan yang bisa menampung data dari $_GET, $_POST, & $_COOKIE.
 * Status: Jarang digunakan / dihindari demi keamanan dan kejelasan sumber data.
 */
echo "5. \$_REQUEST:" . PHP_EOL;
echo "Menampung data GET, POST, sekaligus COOKIE secara bersamaan." . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 6. $_FILES
 * =========================================================================
 * Penjelasan: Menangkap informasi file yang di-upload melalui form POST 
 *             dengan atribut enctype='multipart/form-data'.
 * Status: Wajib dan sering digunakan untuk fitur upload file/gambar.
 */
echo "6. \$_FILES:" . PHP_EOL;
/*
CONTOH IMPLEMENTASI FORM & PHP UPLOAD:

-- FILE 1 (HTML Form):
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="berkas_foto">
    <button type="submit">Upload</button>
</form>

-- FILE 2 (PHP Pemroses - upload.php):
if (isset($_FILES['berkas_foto'])) {
    $namaFile   = $_FILES['berkas_foto']['name'];
    $ukuranFile = $_FILES['berkas_foto']['size'];
    $tmpName    = $_FILES['berkas_foto']['tmp_name'];
    
    // Pindahkan file dari folder sementara ke folder permanen
    move_uploaded_file($tmpName, "uploads/" . $namaFile);
}
*/
echo "Digunakan untuk manajemen file upload (lihat contoh kode di komentar)." . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 7. $_COOKIE
 * =========================================================================
 * Penjelasan: Menyimpan data di sisi browser pengguna dalam jangka waktu tertentu,
 *             meskipun browser ditutup.
 * Status: Masih sering digunakan untuk preferensi (dark mode, remember me).
 */
echo "7. \$_COOKIE:" . PHP_EOL;

// Cara Membuat Cookie (Harus dipanggil sebelum ada teks/HTML yang dicetak):
// setcookie("user_theme", "dark", time() + 3600, "/");

// Cara Membaca Cookie:
if (isset($_COOKIE['user_theme'])) {
    echo "Tema cookie terbaca: " . $_COOKIE['user_theme'] . PHP_EOL;
} else {
    echo "Cookie 'user_theme' belum diset atau sudah kedaluwarsa." . PHP_EOL;
}
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 8. $_SESSION
 * =========================================================================
 * Penjelasan: Menyimpan data sementara di server selama sesi aktif pengguna.
 *             Akan otomatis hilang jika tab/browser ditutup.
 * Status: Sangat vital dan paling sering digunakan untuk sistem Login.
 */
echo "8. \$_SESSION:" . PHP_EOL;

// Wajib jalankan session_start() di baris paling atas sebelum ada output apapun
session_start();

// Menyimpan data ke session (misal setelah user berhasil login)
$_SESSION['user_login'] = "Osama Nur";

// Membaca session
if (isset($_SESSION['user_login'])) {
    echo "Session aktif! Pengguna yang login: " . $_SESSION['user_login'] . PHP_EOL;
}
echo "--------------------------------------------------" . PHP_EOL;


/*
 * =========================================================================
 * 9. $_ENV
 * =========================================================================
 * Penjelasan: Menyimpan variabel lingkungan (environment variables).
 * Status: Jarang dipakai langsung di PHP murni; dalam framework modern 
 *         seperti Laravel, dikelola lewat file .env dan fungsi config().
 */
echo "9. \$_ENV:" . PHP_EOL;
echo "Menyimpan environment variables sistem / konfigurasi rahasia." . PHP_EOL;
echo "==========================================================" . PHP_EOL;








































//===================================================================_SERVER=================================================================


/**
 * =========================================================================
 * CATATAN LENGKAP: PHP $_SERVER ARRAY ATTRIBUTES
 * =========================================================================
 * Array $_SERVER adalah superglobal yang menyimpan informasi tentang header, 
 * jalur (path), dan lokasi skrip dari web server.
 * 
 * Di bawah ini adalah daftar lengkap seluruh atribut $_SERVER yang diterjemahkan 
 * ke dalam bahasa Indonesia beserta penjelasan dan perbedaannya.
 * =========================================================================
 */

/*
 * TABEL REFERENSI $_SERVER DALAM FORMAT STRUKTUR DATA PHP:
 * 
 * Untuk melihat output dari masing-masing atribut di bawah, kamu bisa 
 * menjalankan skrip ini di server lokal/browser. Beberapa atribut mungkin 
 * kosong jika dijalankan melalui terminal (CLI).
 */

$catatanServer = [
    // --- KELOMPOK INFORMASI SKRIP & JALUR (PATH) ---
    'PHP_SELF' => 'Mengembalikan nama file dari skrip yang sedang dieksekusi saat ini.',
    'SCRIPT_NAME' => 'Mengembalikan path (jalur relatif) dari skrip yang sedang berjalan.',
    'SCRIPT_FILENAME' => 'Mengembalikan path absolut (jalur lengkap dari root komputer) dari skrip yang sedang dieksekusi.',
    'PATH_TRANSLATED' => 'Mengembalikan path berbasis sistem file (berdasarkan direktori virtual server) ke skrip saat ini.',
    'SCRIPT_URI' => 'Mengembalikan URI lengkap dari halaman yang sedang diakses saat ini.',
    'QUERY_STRING' => 'Mengembalikan string kueri (query string) jika halaman diakses melalui parameter URL (setelah tanda ?).',

    // --- KELOMPOK INFORMASI SERVER & HOST ---
    'SERVER_NAME' => 'Mengembalikan nama host dari server (contoh: www.w3schools.com atau localhost).',
    'SERVER_ADDR' => 'Mengembalikan alamat IP dari server tempat host berada.',
    'SERVER_SOFTWARE' => 'Mengembalikan string identifikasi perangkat lunak server (contoh: Apache/2.2.24 atau nginx).',
    'SERVER_PROTOCOL' => 'Mengembalikan nama dan revisi protokol informasi (contoh: HTTP/1.1 atau HTTP/2).',
    'SERVER_ADMIN' => 'Mengembalikan nilai yang diberikan pada direktif SERVER_ADMIN di file konfigurasi server (contoh: email admin).',
    'SERVER_PORT' => 'Mengembalikan port pada mesin server yang digunakan oleh web server untuk komunikasi (contoh: 80 atau 443).',
    'SERVER_SIGNATURE' => 'Mengembalikan versi server dan nama virtual host yang ditambahkan ke halaman yang dibuat oleh server.',
    'GATEWAY_INTERFACE' => 'Mengembalikan versi Common Gateway Interface (CGI) yang digunakan oleh server.',

    // --- KELOMPOK INFORMASI REQUEST & PENGGUNA (CLIENT) ---
    'REQUEST_METHOD' => 'Mengembalikan metode HTTP request yang digunakan untuk mengakses halaman (contoh: GET, POST).',
    'REQUEST_TIME' => 'Mengembalikan timestamp (waktu dalam detik) dari awal request dimulai (contoh: 1377687496).',
    'REMOTE_ADDR' => 'Mengembalikan alamat IP dari mana pengguna (client) melihat halaman saat ini.',
    'REMOTE_HOST' => 'Mengembalikan nama host dari mana pengguna melihat halaman saat ini.',
    'REMOTE_PORT' => 'Mengembalikan port yang digunakan pada mesin pengguna untuk berkomunikasi dengan web server.',
    'HTTPS' => 'Mengecek apakah skrip dikueri melalui protokol HTTP yang aman (mengembalikan bernilai jika HTTPS aktif).',

    // --- KELOMPOK HTTP HEADER ---
    'HTTP_HOST' => 'Mengembalikan header Host dari request saat ini.',
    'HTTP_ACCEPT' => 'Mengembalikan header Accept dari request saat ini (tipe konten yang diterima browser).',
    'HTTP_ACCEPT_CHARSET' => 'Mengembalikan header Accept_Charset dari request saat ini (contoh: utf-8, ISO-8859-1).',
    'HTTP_REFERER' => 'Mengembalikan URL lengkap dari halaman sebelumnya (tidak sepenuhnya diandalkan karena tidak semua browser mendukungnya).',
];

// Contoh cara mencetak salah satu atribut $_SERVER ke layar:
echo "Contoh Penggunaan SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . PHP_EOL;
echo "Contoh Penggunaan REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . PHP_EOL;





























//===================================================================_SERVER=================================================================

/**
 * =========================================================================
 * CATATAN LENGKAP: PHP COOKIES (BERDASARKAN W3SCHOOLS)
 * =========================================================================
 * 
 * 1. APA ITU COOKIE?
 *    - Cookie adalah file teks kecil yang disimpan oleh server di dalam 
 *      web browser pengguna.
 *    - Cookie akan dikirim secara otomatis bersama dengan setiap HTTP request 
 *      ke server.
 *    - Ideal untuk menyimpan informasi yang dapat diambil kembali nanti, seperti:
 *      * Username
 *      * Mempertahankan status login (Maintain login status)
 *      * Isi keranjang belanja (Shopping cart contents)
 *      * Preferensi bahasa (Language preferences)
 *      * Melacak aktivitas pengguna (Track user activity)
 * 
 * 2. ATURAN UTAMA PEMBUATAN COOKIE
 *    - Fungsi setcookie() WAJIB diculik/dipanggil SEBELUM tag <html>, 
 *      karena cookie merupakan bagian dari HTTP header.
 *    - Nilai cookie secara otomatis di-URLencode saat dikirim dan otomatis 
 *      didecode saat diterima (gunakan setrawcookie() jika ingin mencegahnya).
 * =========================================================================
 */


/*
 * =========================================================================
 * 3. SINTAKS DAN PENJELASAN PARAMETER setcookie()
 * =========================================================================
 * Sintaks dasar:
 * setcookie(name, value, expire, path, domain, secure, httponly);
 * 
 * Penjelasan Parameter:
 * - name      : (Wajib) Menentukan nama dari cookie.
 * - value     : (Opsional) Menentukan nilai/isi dari cookie.
 * - expire    : (Opsional) Menentukan kapan cookie kedaluwarsa (timestamp).
 * - path      : (Opsional) Menentukan path server tempat cookie tersedia.
 * - domain    : (Opsional) Menentukan nama domain dari cookie.
 * - secure    : (Opsional) Menentukan apakah cookie hanya dikirim via HTTPS.
 * - httponly  : (Opsional) Jika diatur TRUE, cookie hanya bisa diakses lewat 
 *               protokol HTTP (tidak bisa via JavaScript demi keamanan).
 */


/*
 * =========================================================================
 * 4. CONTOH 1: MEMBUAT DAN MENGECEK/MENERIMA COOKIE
 * =========================================================================
 * Contoh ini membuat cookie bernama "username" dengan nilai "John Doe" 
 * yang berlaku selama 30 hari (86400 detik * 30 hari), dan tersedia 
 * di seluruh website dengan path "/".
 */

$cookie_name = "username";
$cookie_value = "John Doe";

// Membuat cookie (pastikan ini dieksekusi sebelum ada tag HTML)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>

<html>
<body>
<?php
// Mengambil dan mengecek nilai cookie menggunakan superglobal $_COOKIE dan isset()
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' sudah diset!<br>";
    echo "Nilainya adalah: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie bernama '" . $cookie_name . "' belum diset!";
}
?>
</body>
</html>


<?php
/*
 * =========================================================================
 * 5. CONTOH 2: MEMODIFIKASI NILAI COOKIE
 * =========================================================================
 * Untuk memodifikasi/mengubah nilai cookie, cukup buat (timpa) kembali cookie 
 * tersebut menggunakan fungsi setcookie() dengan nama yang sama namun nilai baru.
 */

$cookie_name = "username";
$cookie_value = "Alex Porter"; // Nilai diubah dari John Doe

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
<body>
<?php
// Mengecek hasil modifikasi cookie
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' telah dimodifikasi!<br>";
    echo "Nilai barunya adalah: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>
</body>
</html>


<?php
/*
 * =========================================================================
 * 6. CONTOH 3: MENGHAPUS COOKIE
 * =========================================================================
 * Untuk menghapus cookie, gunakan fungsi setcookie() dengan mengatur waktu 
 * kedaluwarsa (expire) ke waktu di masa lampau (misalnya dikurangi 3600 detik / 1 jam lalu).
 */

// Mengatur tanggal kedaluwarsa ke satu jam yang lalu
setcookie("username", "", time() - 3600, "/");
?>
<html>
<body>
<?php
echo "Cookie 'username' berhasil dihapus.";
?>
</body>
</html>


<?php
/*
 * =========================================================================
 * 7. CONTOH 4: MENGECEK APAKAH COOKIE DI-ENABLE (AKTIF) DI BROWSER
 * =========================================================================
 * Cara kerjanya: Coba buat cookie uji coba dengan setcookie(), 
 * kemudian hitung jumlah array $_COOKIE menggunakan fungsi count().
 */

// Membuat cookie uji coba
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
<?php
// Mengecek apakah ada cookie yang berhasil terekam
if(count($_COOKIE) > 0) {
    echo "Cookies di browser aktif (enabled).";
} else {
    echo "Cookies di browser non-aktif (disabled).";
}
?>
</body>
</html>




























