<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="kasus2.php">
        <label>Masukkan angka pertama</label><br/>
		<input type="text" name="a"><br/>
        <label>Masukkan angka kedua</label><br/>
		<input type="text" name="b"><br/>
        <label>Masukkan angka ketiga</label><br/>
		<input type="text" name="c"><br/>
        <input type="submit" value="hasil"><br/>
    </form>
</body>
</html>
<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a > $b && $a > $c){
        $nilai = $a;
    }
    elseif ($b > $a && $b > $c){
        $nilai = $b;
    }
    else{
        $nilai = $c;
    }
    echo "Nilai yang paling besar adalah $nilai";
?>