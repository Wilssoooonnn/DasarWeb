<?php

$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
