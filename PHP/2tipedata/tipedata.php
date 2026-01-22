<?php
    $str1 = 'Contoh string 1';
    $str2 = 'Variabel string 2';

    echo $str1; echo "<br>";
    echo $str2; echo "<br>";

    $b = "30" . "20.25";
	$c = "30" + "20.25";
	$d = 10 + "20.5";
	
	echo "b = $b"; echo "<br>";
	echo "c = $c"; echo "<br>";
	echo "d = $d"; echo "<br>";

    $e = "10 rumah";
    $e = (int) $e;
    $e = (bool) $e;

    $f = 100;
    $f = (string) $f;

    echo "e = $e"; echo "<br>";
    echo "f = $f"; echo "<br>";
?>