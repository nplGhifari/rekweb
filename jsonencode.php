<?php

// Membuat sebuah array
$biodata = array(
    'Nama' => 'Muhammad Naufal',
    'Usia' => 21,
    'Hobi' => array('Traveling', 'Gaming')
);

// Mengencode array ke format JSON
$jsonData = json_encode($biodata);

// Menampilkan hasil JSON
echo "Data JSON: " . $jsonData;

?>