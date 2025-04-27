<?php
// Membuat string JSON
$jsonString = '{"nama":"Muhammad Naufal","usia":21,"hobi":["Traveling","Gaming"]}';

// Decode JSON ke dalam bentuk PHP Object
$phpObject = json_decode($jsonString);

// Decode JSON ke dalam bentuk PHP Array (parameter kedua true)
$phpArray = json_decode($jsonString, true);

echo "\n\n";
echo "Data dari PHP Object:\n";
echo "Nama: " . $phpObject->nama . "\n";
echo "Usia: " . $phpObject->usia . "\n";
echo "Hobi: " . implode(", ", $phpObject->hobi) . "\n";

echo "-------------------------------------\n";

echo "\n";
echo "Data dari PHP Array:\n";
echo "Nama: " . $phpArray['nama'] . "\n";
echo "Usia: " . $phpArray['usia'] . "\n";
echo "Hobi: " . implode(", ", $phpArray['hobi']) . "\n";

?>
