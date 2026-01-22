<?php

// membuat array
$barang = array("Buku Tulis", "Penghapus", "Spidol", "Serutan", "Capek ah");

// menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}
echo "<hr>";
// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}

echo "<hr>";

// menampilkan isi array dengan perulangan while
$i = 1;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
	}
?>