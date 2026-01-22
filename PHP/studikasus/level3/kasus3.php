<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="kasus3.php">
        <label>Masukkan sisi pertama</label><br/>
		<input type="number" name="a"><br/>
        <label>Masukkan sisi kedua</label><br/>
		<input type="number" name="b"><br/>
        <label>Masukkan sisi ketiga</label><br/>
		<input type="number" name="c"><br/>
        <input type="submit" value="Cek"><br/>
    </form>
</body>
</html>
<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    
    if ($a == $b && $a == $c) {
        echo "SAMA SISI";
    }
    elseif ($a == $b){
        echo "SAMA KAKI";
    }
    elseif ($b == $c){
        echo "SAMA KAKI";
    }
    elseif ($a == $c){
        echo "SAMA KAKI";
    }
    else{
        echo "SEMBARANG";
    }
?>