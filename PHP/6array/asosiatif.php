<?php
// membuat array asosiatif
$student = [
    "nama" => "Rangga Wijaya",
    "rombel" => "PPLG X-2",
    "usia" => 16
];
$student["nama"];

// mencetak isi array assosiatif
echo "<h2>".$student["nama"]."</h2>";
echo "<p>Rombel: ".$student["rombel"]."</p>";
echo "<p>Usia: ".$student["usia"]."</p>";