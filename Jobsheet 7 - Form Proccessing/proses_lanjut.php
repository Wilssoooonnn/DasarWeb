<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buah = $_POST['buah'];
    if (isset($_POST['warna'])) {
        $warna = $_POST['warna'];
    } else {
        $warna = [];
    }
    $jk = $_POST['jk'];

    echo 'Anda memilih buah: ' . $buah;
    echo '<br>';

    if (!empty($warna)) {
        echo "Warna favorit anda: " . implode(",", $warna) . "<br>";
    } else {
        echo "Anda tida memilih warna fav <br>";
    }
    echo "Jenis kelamin anda: " . $jk;
}
