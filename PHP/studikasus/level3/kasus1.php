<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="kasus1.php">
        <label>Masukkan angka pertama</label><br/>
		<input type="number" name="angka1"><br/>
        <label>Masukkan angka kedua</label><br/>
		<input type="number" name="angka2"><br/>
        <label>Masukkan angka ketiga</label><br/>
		<input type="number" name="angka3"><br/>
        <input type="submit" value="hasil"><br/>
    </form>
</body>
</html>
<?php
    $nilai = [ @$_POST["angka1"],
                @$_POST["angka2"],
                @$_POST["angka3"],
    ];
    sort($nilai);

    echo "Jika di urutkan maka hasilnya sebagai berikut:<br> ";
    foreach ($nilai as $n) {
        echo $n ."<br>";
    }
    
?>
