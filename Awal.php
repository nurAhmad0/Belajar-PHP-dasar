<?php
  // 1. Membuat Variabel (Menyimpan Data)
  $nama_siswa = "Osama";     // Tipe Data String (Teks)
  $umur       = 20;          // Tipe Data Integer (Angka)
  $ipk        = 3.85;        // Tipe Data Float (Desimal)

  // 2. Menampilkan Data ke Layar Browser
  echo "<h1>Selamat Datang di Pembelajaran PHP!</h1>";
  echo "Nama: " . $nama_siswa;
  echo "<br>"; // Tag HTML untuk ganti baris (Enter)
  
  // Menggabungkan variabel langsung di dalam tanda petik dua
  echo "Umur: $umur tahun";
  echo "<br>";

  echo "IPK Semester ini: $ipk";

?>





<!-- catatan ============================================== -->


<!-- tanda didalam <? (php ini isi dari kode terserah)   ?> -->