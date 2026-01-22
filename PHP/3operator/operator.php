<?php
    $x = 10;
    $y = 5;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    $z = $x ** $y;
    echo "$z<br>";

    //operator precedence
    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;
?>