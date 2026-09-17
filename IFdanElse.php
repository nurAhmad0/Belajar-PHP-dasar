<?php
    $umur = 24;

    if (45 > $umur and  $umur >= 15) {
        echo 'kamu sudah dewasa';
    }
    else if (15 > $umur and  $umur > 0){
        echo 'kamu masih kecil';
    }
    else {
        echo 'tidak termasuk kriteria';
    }