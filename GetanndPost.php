


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h2>Input Mahasiswa Baru</h2>
    <form action="hasilGP.php" method="get">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama"> 
            <!-- diinput ahmad -->
        </div>
        <div>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan">
            <!-- diinput ekonomi -->
        </div>
        <div>
            <input type="submit" value="kirim" name="submit">
        </div>
    </form>
    <?php
        // echo $_GET["nama"];//hasilnya ahmad
        // echo "<br>";
        // echo $_GET["jurusan"]; //hasilnya ekonomi
        // if(isset($_GET["submit"])){
        //     $nama = $_GET["nama"];
            
        //     $jurusan = $_GET["jurusan"]; 
        //     echo $nama;
        //     echo "<br>";
        //     echo $jurusan;
        // }
    ?>
</body>
</html>