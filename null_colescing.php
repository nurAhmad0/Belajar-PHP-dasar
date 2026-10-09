<?php

    //ini tanpa pakai null coalescing
    $data = [];

    if (isset($data['action'])) { //Apakah variabel/kunci ini ada dan nilainya tidak null? --> ini kegunaan dari isset()
        $action = $data['action'];
    } else {
        $action = 'nothing';
    }

    echo $action;
    
    echo "<br>";


    // ini pakai null coalescing
    $data1 = [];
    $action1 = $data['action'] ?? 'nothing';

    echo $action1;