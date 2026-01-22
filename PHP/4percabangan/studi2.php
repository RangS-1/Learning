<?php
    $nilai = 90;
    echo"Nilai ulangan anda adalah = {$nilai}<br>";

    if ($nilai >= 90){
        echo"Peringkat A";
    }elseif($nilai >= 80){
        echo"Peringkat B";
    }elseif($nilai >= 70){
        echo"Peringkat C";
    }else{
        echo"Peringkat D";
    }
?>