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
		<input type="text" name="a"><br/>
        <label>Masukkan angka kedua</label><br/>
		<input type="text" name="b"><br/>
        <input type="submit" value="hasil"><br/>
    </form>
</body>
</html>
<?php
    for ($a = $_POST['a']; $a <= $_POST['b']; $a++){
        echo $a."<br>";
    }
?>
