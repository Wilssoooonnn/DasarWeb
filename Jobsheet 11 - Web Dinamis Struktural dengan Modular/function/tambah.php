<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../function/anti_injection.php';
    require '../function/pesan_kilat.php';
    if (!empty($_GET['jabatan'])) {
        $jabatan = anti_injection($koneksi, $_GET['jabatan']);
        $keterangan = anti_injection($koneksi, $_GET['keterangan']);
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', 'Jabatan berhasil ditambahkan');
        } else {
            pesan('danger', 'Jabatan gagal ditambahkan karena:' . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }
}
