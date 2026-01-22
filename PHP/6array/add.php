<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog",
    "Pret"
];

$hobi[4] = "Coding";

$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>