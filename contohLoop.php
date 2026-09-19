<?php
    $siswa = [
        ["nama" => "budi", "kelas" => "XII"],
        ["nama" => "yono", "kelas" => "XI"],
        ["nama" => "agus", "kelas" => "X"]
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <table border=1>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php 
            $a = 0;
            while ($a < count($siswa)) {
                echo "<tr>";
                echo "<td>".$siswa[$a]["nama"]."</td>";
                echo "<td>".$siswa[$a]["kelas"]."</td>";
                echo "</tr>";
                $a++;
            }
        ?>
    </table>
</body>
</html>