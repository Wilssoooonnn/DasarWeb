<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $err = array();

    // Validasi nama
    if (empty($nama)) {
        $err[] = 'Nama harus diisi';
    }

    // Validasi email
    if (empty($email)) {
        $err[] = 'Email harus diisi';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err[] = 'Format email salah';
    }

    // Tampilkan error jika ada
    if (!empty($err)) {
        foreach ($err as $error) {
            echo $error . "<br>";
        }
    } else {
        // Jika tidak ada error, lakukan proses lebih lanjut
        echo "Data berhasil dikirim!";
        echo "<br>";
        echo "Nama : " . $nama, " Email : " . $email, "";
    }
}
