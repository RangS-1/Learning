<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="kasus3.php">
        <label>Masukkan angka pertama</label><br/>
		<input type="text" name="a"><br/>
        <label>Masukkan angka kedua</label><br/>
		<input type="text" name="b"><br/>
        <label>Masukkan angka ketiga</label><br/>
		<input type="text" name="c"><br/>
        <label>Masukkan angka keempat</label><br/>
		<input type="text" name="d"><br/>
        <input type="submit" value="hasil"><br/>
    </form>
</body>
</html>
<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];

    if ($a > $b && $a > $c && $a > $d){
        $nilai = $a;
    }
    elseif ($b > $a && $b > $c && $b > $d){
        $nilai = $b;
    }
    elseif ($c > $a && $c > $b && $c > $d){
        $nilai = $c;
    }
    else{
        $nilai = $d;
    }
    echo "Nilai yang paling besar adalah $nilai";
?>