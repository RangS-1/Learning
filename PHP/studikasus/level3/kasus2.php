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
		<input type="number" name="a"><br/>
        <label>Masukkan angka kedua</label><br/>
		<input type="number" name="b"><br/>
        <label>Masukkan angka ketiga</label><br/>
		<input type="number" name="c"><br/>
        <input type="submit" value="Cek"><br/>
    </form>
</body>
</html>
<?php
    if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        
        $nilai = [$a, $b, $c];
        sort($nilai); 
        $tengah = $nilai[1];
        echo"Nilai tengahnya adalah ". $tengah;
    }
    else{
        echo "Masukkin nilai gak bisa?";
    }
?>