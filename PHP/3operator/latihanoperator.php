<?php
    $sisi = 4;

    $luas = $sisi ** 2;
    echo"Luas persegi adalah {$luas}<br>";
    
    $jari = 8;

    $lingkaran = pi() * $jari * 2;
    echo"Luas lingkaran adalah {$lingkaran}<br>";

    $a = 19;
    $b = 20;
    if ($a < $b){
        echo"{$a} Kurang dari {$b}";
    }elseif ($a > $b){
        echo"{$a} Lebih dari {$b}";
    }else{
        echo"{$a} Sama dengan {$b}";
    }
?>