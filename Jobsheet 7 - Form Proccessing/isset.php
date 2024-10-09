<?php
$data = array(
    "nama" => "Jane",
    "usia" => 25
);
// var_dump($umur);
if (isset($data["nama"])) {
    echo "Nama  : " . $data["nama"];
} else {
    echo "variabel 'nama' tidak ditemukan.";
}
