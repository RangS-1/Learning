<?php
// ini adalah array dua dimensi
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

$array = [
	[
		"nama" => "Fema",
		"rombel" => "PPLG X-1",
		"nilai" => [10,20,30]
	],
	[
		"nama" => "Fe",
		"rombel" => "PPLG X-1",
		"nilai" => [10,20,30]
	],
	[
		"nama" => "F",
		"rombel" => "PPLG X-1",
		"nilai" => [10,40,30]
	]
];

// cara mengakses isinya
echo $array[2]["nilai"][1];

foreach ($array as $index => $item) {
		echo $item["nilai"][0];
}
?>