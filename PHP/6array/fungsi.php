<?php
//Count
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
echo 'Ditemukan data sebanyak ' .  count($kendaraan) . ' data';
echo"<br>";
echo"<br>";

//Implode atau menggabung array jadi string
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode(", ",$arr_kata);
echo $kalimat;
echo"<br>";
echo"<br>";

//Mengubah semua value/item pada array
function toUpper($array_value) {
	return strtoupper($array_value);
}
$vehicle 	= ['Mobil', 'Motor', 'Sepeda'];
$upper 		= array_map('toUpper', $vehicle);
print_r($upper);
echo"<br>";
echo"<br>";

//in_array, adakah value tertentu pada array
$beh = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
if (in_array('Motor', $beh))
{
	echo 'OK';
}
echo"<br>";
echo"<br>";

//key_exists, apakah array punya key tertentu
$mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
if (key_exists('type', $mobil))
{
	echo $mobil['type'];
}
echo"<br>";
echo"<br>";

//urutkan dari terkecil ke terbesar atau sebaliknya
$pew = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
asort($pew); //terkecil ke terbesar
print_r($pew);

$nilai 		= [90, 70, 85, 65];
arsort($nilai); //sebaliknya
print_r($nilai);
echo"<br>";
echo"<br>";

//array_merge, menyambungkan 2 array
$kendaraan 		= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$mobil 			= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$merge			= array_merge ($kendaraan, $mobil);
print_r($merge);
echo"<br>";
echo"<br>";

//mencari index pada value tertentu
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$key = array_search('Sepeda', $kendaraan);
unset($kendaraan[$key]);
print_r($kendaraan);
echo"<br>";
echo"<br>";
//array shift, hapus elemen pertama
$mobil 	= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$key 	= array_shift($mobil);
print_r($mobil);
echo"<br>";
echo"<br>";
//array unshift, tambah elemen pertama
// Indexed Array
$kendaraan 		= ['Mobil', 'Motor', 'Sepeda'];
array_unshift ($kendaraan, 'Becak',  'Delman');
print_r($kendaraan);
echo "<br />";
// Associative array
$mobil 		= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
array_unshift ($mobil, 'Sedan');
print_r($mobil);
echo"<br>";
echo"<br>";
//array_push menambah elemen terakhir
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
array_push ($kendaraan, 'Becak', 'Delman');
print_r($kendaraan);

echo "<br />";

$mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
array_push ($mobil, 'Sedan');
print_r($mobil);
echo"<br>";
echo"<br>";

//array_pop menghapus elemen terakhir
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
$pop 		= array_pop($kendaraan);
print_r($kendaraan);
echo"<br>";
echo"<br>";

//membalik urutan array
$judul 		= ['Judul 3', 'Judul 2', 'Judul 1'];
$reverse	= array_reverse($judul);
print_r($reverse);
echo"<br>";
echo"<br>";

//mencari nilai maksimal dan minimum
$nilai 	= [90, 70, 85, 65, 80];
$max 	= max($nilai);
$min 	= min($nilai);
echo $max;
echo "<br>";
echo $min;
echo"<br>";
echo"<br>";

//array_splice hapus dan ganti elemen dengan yang baru
$a1=array("red","green","blue","yellow");
$a2=array("purple","orange");
array_splice($a1,0,2,$a2);
print_r($a1);
?>