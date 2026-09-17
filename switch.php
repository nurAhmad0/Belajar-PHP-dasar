<?php
    $umur = 30;

    switch ($umur) {
        case '15':
            echo 'umur kamu 15 tahun';
            break;
        
        case '20':
            echo 'umur kamu 20 tahun';
            break;
            
        case (45 > $umur and  $umur >= 15):
            echo 'antara 45 sampai 15 tahunn ';
            break;
            
        default:
            echo 'umur kamu tidak termasuk kriteria';
            break;
    }