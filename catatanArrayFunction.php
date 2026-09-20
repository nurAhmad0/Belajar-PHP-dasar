<?php
/*
=============================================================================
  CATATAN PEMBELAJARAN PHP: ARRAY CALLBACK FUNCTIONS
=============================================================================

  Fungsi-fungsi di bawah ini menggunakan 'callback function' untuk mengolah 
  data array secara efisien tanpa harus menulis perulangan (foreach) manual.

=============================================================================
*/

// ==========================================================================
// 1. ARRAY_MAP()
// ==========================================================================
/*
  CARA KERJA:
  - Menerima array, lalu MENGUBAH / TRANSFORMASI setiap elemennya satu per satu.
  - Menghasilkan ARRAY BARU.
  - Jumlah elemen array HASIL sama persis dengan jumlah elemen array ASLI.
  
  KAPAN DIPAKAI:
  Saat ingin mengubah format data (misal: format rupiah, kapitalisasi huruf, 
  atau mengambil field tertentu dari array multidimensi).
*/

$hargaAwal = [10000, 25000, 50000];

// Mengubah angka menjadi format mata uang Rupiah
$hargaRupiah = array_map(function($harga) {
    return "Rp " . number_format($harga, 0, ',', '.');
}, $hargaAwal);


// ==========================================================================
// 2. ARRAY_FILTER()
// ==========================================================================
/*
  CARA KERJA:
  - MENYARING elemen array berdasarkan kondisi boolean (true/false).
  - Jika callback mengembalikan 'true', elemen DIPERTAHANKAN.
  - Jika callback mengembalikan 'false', elemen DIBUANG.
  - Menghasilkan ARRAY BARU (jumlah elemen bisa berkurang).
  
  KAPAN DIPAKAI:
  Saat ingin membuang data yang tidak memenuhi kriteria (misal: menyaring 
  produk yang stoknya habis, atau mengambil angka genap saja).
*/

$produk = [
    ['nama' => 'Laptop', 'stok' => 5],
    ['nama' => 'Mouse',  'stok' => 0],
    ['nama' => 'Keyboard', 'stok' => 3]
];

// Hanya mengambil produk yang stoknya lebih dari 0 (menggunakan Arrow Function)
$produkTersedia = array_filter($produk, fn($p) => $p['stok'] > 0);


// ==========================================================================
// 3. ARRAY_REDUCE()
// ==========================================================================
/*
  CARA KERJA:
  - Mengolah seluruh elemen array secara bertahap hingga MENCIUT menjadi 
    SATU NILAI TUNGGAL (bukan array lagi).
  - Parameter callback menerima 2 hal: ($akumulator, $item_saat_ini).
  - Parameter ke-3 dari array_reduce adalah NILAI AWAL akumulator.
  
  KAPAN DIPAKAI:
  Saat ingin menghitung total belanjaan, total nilai, atau mengumpulkan 
  semua teks menjadi satu kalimat.
*/

$keranjang = [
    ['item' => 'Baju', 'harga' => 50000],
    ['item' => 'Celana', 'harga' => 100000],
    ['item' => 'Topi', 'harga' => 25000]
];

// Menghitung total seluruh harga (Nilai awal akumulator $total = 0)
$totalBayar = array_reduce($keranjang, function($total, $item) {
    return $total + $item['harga'];
}, 0);


// ==========================================================================
// 4. USORT() - User-defined Sort
// ==========================================================================
/*
  CARA KERJA:
  - MENGURUTKAN posisi elemen array berdasarkan logika kustom yang kita buat.
  - MENGUBAH ARRAY ASLI secara langsung (pass-by-reference).
  - Menggunakan Operator Spaceship (<=>):
    - Jika $a < $b  -> mengembalikan -1 (posisi $a di depan)
    - Jika $a == $b -> mengembalikan 0  (posisi tetap)
    - Jika $a > $b  -> mengembalikan 1  (posisi $b di depan)
  
  KAPAN DIPAKAI:
  Saat ingin mengurutkan data kompleks/multidimensi (misal: mengurutkan user 
  berdasarkan umur, atau produk berdasarkan harga termurah).
*/

$siswa = [
    ['nama' => 'Budi', 'umur' => 22],
    ['nama' => 'Andi', 'umur' => 18],
    ['nama' => 'Cici', 'umur' => 20]
];

// Mengurutkan siswa berdasarkan umur dari yang terkecil (Ascending)
usort($siswa, fn($a, $b) => $a['umur'] <=> $b['umur']);


// ==========================================================================
// 5. ARRAY_WALK()
// ==========================================================================
/*
  CARA KERJA:
  - Menjalankan fungsi callback pada SETIAP ELEMEN array tanpa mengembalikan 
    array baru.
  - Jika ingin MENGUBAH isi array aslinya, gunakan tanda '&' (reference) pada 
    parameter pertamanya.
  
  KAPAN DIPAKAI:
  Saat ingin memodifikasi data array asli secara langsung tanpa perlu membuat 
  variabel array baru penampung hasil.
*/

$kategori = ['elektronik', 'pakaian', 'makanan'];

// Mengubah semua teks menjadi huruf besar langsung pada array aslinya (&)
array_walk($kategori, function(&$val) {
    $val = strtoupper($val);
});


// ==========================================================================
// HASIL OUTPUT (UNTUK DIUJI COBA DI TERMINAL / BROWSER)
// ==========================================================================

echo "=== 1. HASIL ARRAY_MAP ===\n";
print_r($hargaRupiah);

echo "\n=== 2. HASIL ARRAY_FILTER ===\n";
print_r($produkTersedia);

echo "\n=== 3. HASIL ARRAY_REDUCE ===\n";
echo "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "\n";

echo "\n=== 4. HASIL USORT (Diurutkan berdasarkan Umur) ===\n";
print_r($siswa);

echo "\n=== 5. HASIL ARRAY_WALK (Ubah Array Asli) ===\n";
print_r($kategori);