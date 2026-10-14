<?php
/**
 * =========================================================================
 * CATATAN LENGKAP: PHP FILESYSTEM FUNCTIONS (TERJEMAHAN & PENJELASAN)
 * =========================================================================
 * File ini berisi daftar lengkap fungsi filesystem PHP dalam bentuk tabel 
 * yang diterjemahkan ke dalam bahasa Indonesia beserta penjelasan tambahan 
 * untuk setiap fungsinya.
 * =========================================================================
 */

$filesystemFunctions = [
    [
        'name' => 'basename()', 
        'desc' => 'Mengembalikan komponen nama file dari sebuah path (jalur). Berguna untuk mengambil nama file paling akhir dari sebuah URL atau direktori lengkap.'
    ],
    [
        'name' => 'chgrp()', 
        'desc' => 'Mengubah grup kepemilikan dari sebuah file.'
    ],
    [
        'name' => 'chmod()', 
        'desc' => 'Mengubah izin (mode/permissions) akses dari sebuah file atau direktori.'
    ],
    [
        'name' => 'chown()', 
        'desc' => 'Mengubah pemilik (owner) dari sebuah file.'
    ],
    [
        'name' => 'clearstatcache()', 
        'desc' => 'Membersihkan cache status file yang disimpan oleh PHP (seperti informasi ukuran file atau waktu modifikasi).'
    ],
    [
        'name' => 'copy()', 
        'desc' => 'Menyalin file dari satu lokasi direktori ke lokasi tujuan baru.'
    ],
    [
        'name' => 'delete()', 
        'desc' => 'Fungsi alternatif yang merujuk atau sama kegunaannya dengan unlink() untuk menghapus file.'
    ],
    [
        'name' => 'dirname()', 
        'desc' => 'Mengembalikan komponen nama direktori dari sebuah path (kebalikan dari fungsi basename).'
    ],
    [
        'name' => 'disk_free_space()', 
        'desc' => 'Mengembalikan kapasitas ruang kosong yang tersedia pada filesystem atau disk.'
    ],
    [
        'name' => 'disk_total_space()', 
        'desc' => 'Mengembalikan total kapasitas ukuran keseluruhan dari sebuah filesystem atau disk.'
    ],
    [
        'name' => 'diskfreespace()', 
        'desc' => 'Merupakan fungsi alias (nama lain yang identik dan menghasilkan fungsi yang sama) dari disk_free_space().'
    ],
    [
        'name' => 'fclose()', 
        'desc' => 'Menutup file yang sebelumnya telah dibuka menggunakan fungsi fopen().'
    ],
    [
        'name' => 'feof()', 
        'desc' => 'Mengecek apakah penunjuk file (pointer) telah mencapai akhir file ("end-of-file" / EOF).'
    ],
    [
        'name' => 'fflush()', 
        'desc' => 'Mengosongkan buffer output dan menuliskannya secara paksa ke file yang sedang terbuka.'
    ],
    [
        'name' => 'fgetc()', 
        'desc' => 'Mengembalikan satu karakter tunggal dari posisi pointer file yang sedang terbuka.'
    ],
    [
        'name' => 'fgetcsv()', 
        'desc' => 'Mengembalikan satu baris dari file berformat CSV yang sedang terbuka dan mengurainya menjadi array.'
    ],
    [
        'name' => 'fgets()', 
        'desc' => 'Mengembalikan satu baris dari file yang sedang terbuka.'
    ],
    [
        'name' => 'fgetss()', 
        'desc' => 'Telah dihapus secara resmi di PHP 8.0. Sebelumnya digunakan untuk mengembalikan baris dari file sambil membersihkan tag HTML dan PHP.'
    ],
    [
        'name' => 'file()', 
        'desc' => 'Membaca seluruh isi file dan memasukkannya ke dalam sebuah array (di mana setiap baris file menjadi elemen array).'
    ],
    [
        'name' => 'file_exists()', 
        'desc' => 'Mengecek apakah sebuah file atau direktori benar-benar ada di dalam sistem.'
    ],
    [
        'name' => 'file_get_contents()', 
        'desc' => 'Membaca seluruh isi file dan mengubahnya menjadi bentuk string secara langsung.'
    ],
    [
        'name' => 'file_put_contents()', 
        'desc' => 'Menulis data atau string langsung ke dalam sebuah file.'
    ],
    [
        'name' => 'fileatime()', 
        'desc' => 'Mengembalikan informasi waktu akses terakhir (last access time) dari sebuah file.'
    ],
    [
        'name' => 'filectime()', 
        'desc' => 'Mengembalikan informasi waktu perubahan terakhir inode (last change time) dari sebuah file.'
    ],
    [
        'name' => 'filegroup()', 
        'desc' => 'Mengembalikan ID grup pemilik dari sebuah file.'
    ],
    [
        'name' => 'fileinode()', 
        'desc' => 'Mengembalikan nomor inode dari sebuah file.'
    ],
    [
        'name' => 'filemtime()', 
        'desc' => 'Mengembalikan waktu modifikasi terakhir isi file (last modification time).'
    ],
    [
        'name' => 'fileowner()', 
        'desc' => 'Mengembalikan ID pengguna (owner ID) pemilik dari sebuah file.'
    ],
    [
        'name' => 'fileperms()', 
        'desc' => 'Mengembalikan informasi izin akses (permissions) dari sebuah file.'
    ],
    [
        'name' => 'filesize()', 
        'desc' => 'Mengembalikan ukuran besar file dalam satuan bytes.'
    ],
    [
        'name' => 'filetype()', 
        'desc' => 'Mengembalikan tipe dari file (misalnya file, direktori, dll).'
    ],
    [
        'name' => 'flock()', 
        'desc' => 'Mengunci (lock) atau melepaskan kunci (release) pada file untuk mencegah bentrok akses bersamaan.'
    ],
    [
        'name' => 'fnmatch()', 
        'desc' => 'Mencocokkan nama file atau string terhadap pola (pattern) tertentu.'
    ],
    [
        'name' => 'fopen()', 
        'desc' => 'Membuka file atau URL untuk melakukan operasi baca/tulis.'
    ],
    [
        'name' => 'fpassthru()', 
        'desc' => 'Membaca data dari posisi pointer saat ini hingga akhir file (EOF), lalu menuliskan hasilnya langsung ke buffer output.'
    ],
    [
        'name' => 'fputcsv()', 
        'desc' => 'Memformat data array menjadi baris berformat CSV dan menulisnya ke file yang terbuka.'
    ],
    [
        'name' => 'fputs()', 
        'desc' => 'Merupakan fungsi alias (nama lain yang identik) dari fwrite().'
    ],
    [
        'name' => 'fread()', 
        'desc' => 'Membaca data dari file yang terbuka dengan metode yang aman biner (binary-safe).'
    ],
    [
        'name' => 'fscanf()', 
        'desc' => 'Mengurai input dari file yang terbuka berdasarkan format string tertentu.'
    ],
    [
        'name' => 'fseek()', 
        'desc' => 'Memindahkan posisi pointer (penunjuk) di dalam file yang sedang terbuka.'
    ],
    [
        'name' => 'fstat()', 
        'desc' => 'Mengembalikan informasi statistik lengkap mengenai file yang sedang terbuka berdasarkan resource handle.'
    ],
    [
        'name' => 'ftell()', 
        'desc' => 'Mengembalikan posisi pointer saat ini di dalam file yang terbuka.'
    ],
    [
        'name' => 'ftruncate()', 
        'desc' => 'Memotong atau mengubah ukuran file yang sedang terbuka hingga panjang tertentu.'
    ],
    [
        'name' => 'fwrite()', 
        'desc' => 'Menulis data ke file yang terbuka secara aman biner (binary-safe).'
    ],
    [
        'name' => 'glob()', 
        'desc' => 'Mengembalikan array yang berisi daftar nama file atau direktori yang cocok dengan pola tertentu.'
    ],
    [
        'name' => 'is_dir()', 
        'desc' => 'Mengecek apakah jalur yang ditentukan adalah sebuah direktori (folder).'
    ],
    [
        'name' => 'is_executable()', 
        'desc' => 'Mengecek apakah sebuah file dapat dieksekusi sebagai program.'
    ],
    [
        'name' => 'is_file()', 
        'desc' => 'Mengecek apakah jalur yang ditentukan adalah file biasa (bukan direktori).'
    ],
    [
        'name' => 'is_link()', 
        'desc' => 'Mengecek apakah file merupakan sebuah symbolic link.'
    ],
    [
        'name' => 'is_readable()', 
        'desc' => 'Mengecek apakah sebuah file dapat dibaca.'
    ],
    [
        'name' => 'is_uploaded_file()', 
        'desc' => 'Mengecek apakah file diunggah melalui metode HTTP POST (biasanya untuk keamanan upload).'
    ],
    [
        'name' => 'is_writable()', 
        'desc' => 'Mengecek apakah sebuah file dapat ditulisi (writable).'
    ],
    [
        'name' => 'is_writeable()', 
        'desc' => 'Merupakan fungsi alias (nama lain yang identik) dari is_writable().'
    ],
    [
        'name' => 'lchgrp()', 
        'desc' => 'Mengubah kepemilikan grup dari sebuah symbolic link.'
    ],
    [
        'name' => 'lchown()', 
        'desc' => 'Mengubah kepemilikan pengguna (owner) dari sebuah symbolic link.'
    ],
    [
        'name' => 'link()', 
        'desc' => 'Membuat hard link baru ke file yang sudah ada.'
    ],
    [
        'name' => 'linkinfo()', 
        'desc' => 'Mengembalikan informasi tentang keberadaan atau status sebuah hard link.'
    ],
    [
        'name' => 'lstat()', 
        'desc' => 'Mengembalikan informasi statistik tentang sebuah file atau symbolic link (tanpa mengikuti link utamanya).'
    ],
    [
        'name' => 'mkdir()', 
        'desc' => 'Membuat direktori atau folder baru.'
    ],
    [
        'name' => 'move_uploaded_file()', 
        'desc' => 'Memindahkan file yang baru saja diunggah (upload) ke lokasi tujuan permanen di server.'
    ],
    [
        'name' => 'parse_ini_file()', 
        'desc' => 'Mengurai file konfigurasi berformat .ini dan mengembalikannya sebagai array.'
    ],
    [
        'name' => 'parse_ini_string()', 
        'desc' => 'Mengurai string konfigurasi berformat .ini dan mengembalikannya sebagai array.'
    ],
    [
        'name' => 'pathinfo()', 
        'desc' => 'Mengembalikan informasi lengkap mengenai path file (seperti dirname, basename, extension, filename).'
    ],
    [
        'name' => 'pclose()', 
        'desc' => 'Menutup proses pipe yang dibuka oleh fungsi popen().'
    ],
    [
        'name' => 'popen()', 
        'desc' => 'Membuka proses command line pipe.'
    ],
    [
        'name' => 'readfile()', 
        'desc' => 'Membaca sebuah file dan langsung menuliskan isinya ke buffer output (browser/layar).'
    ],
    [
        'name' => 'readlink()', 
        'desc' => 'Mengembalikan target tujuan dari sebuah symbolic link.'
    ],
    [
        'name' => 'realpath()', 
        'desc' => 'Mengembalikan path absolut kanonik yang bersih dari sebuah path relatif.'
    ],
    [
        'name' => 'realpath_cache_get()', 
        'desc' => 'Mengembalikan entri-entri yang tersimpan di dalam realpath cache.'
    ],
    [
        'name' => 'realpath_cache_size()', 
        'desc' => 'Mengembalikan ukuran penggunaan memori dari realpath cache.'
    ],
    [
        'name' => 'rename()', 
        'desc' => 'Mengganti nama atau memindahkan file maupun direktori ke lokasi baru.'
    ],
    [
        'name' => 'rewind()', 
        'desc' => 'Mengembalikan posisi pointer file ke awal (byte 0) dari file yang terbuka.'
    ],
    [
        'name' => 'rmdir()', 
        'desc' => 'Menghapus sebuah direktori atau folder (pastikan folder dalam keadaan kosong).'
    ],
    [
        'name' => 'set_file_buffer()', 
        'desc' => 'Merupakan fungsi alias untuk stream_set_write_buffer(), mengatur ukuran buffer tulis file.'
    ],
    [
        'name' => 'stat()', 
        'desc' => 'Mengembalikan informasi statistik lengkap tentang sebuah file.'
    ],
    [
        'name' => 'symlink()', 
        'desc' => 'Membuat symbolic link ke target file yang ditentukan.'
    ],
    [
        'name' => 'tempnam()', 
        'desc' => 'Membuat file sementara (temporary file) dengan nama unik di direktori tertentu.'
    ],
    [
        'name' => 'tmpfile()', 
        'desc' => 'Membuat file sementara yang terbuka secara otomatis dan akan terhapus saat ditutup.'
    ],
    [
        'name' => 'touch()', 
        'desc' => 'Mengatur waktu akses dan modifikasi dari sebuah file (jika file belum ada, file kosong baru akan dibuat).'
    ],
    [
        'name' => 'umask()', 
        'desc' => 'Mengubah umask (izin default pembuatan file) saat ini.'
    ],
    [
        'name' => 'unlink()', 
        'desc' => 'Menghapus file dari sistem server.'
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Catatan PHP Filesystem Functions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f9; color: #333; }
        h1 { color: #2c3e50; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px 15px; border: 1px solid #ddd; text-align: left; vertical-align: top; }
        th { background-color: #3498db; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        code { background: #eef; padding: 2px 6px; border-radius: 4px; color: #c7254e; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Catatan Referensi Fungsi Filesystem PHP</h1>
    <p>Berikut adalah tabel lengkap fungsi-fungsi pengelolaan file dan direktori di PHP beserta terjemahan dan penjelasannya.</p>
    <table>
        <thead>
            <tr>
                <th style="width: 30%;">Nama Fungsi</th>
                <th style="width: 70%;">Penjelasan & Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filesystemFunctions as $func): ?>
            <tr>
                <td><code><?php echo $func['name']; ?></code></td>
                <td><?php echo $func['desc']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>