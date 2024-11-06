<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../function/pesan_kilat.php';
    require '../function/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = anti_injection($koneksi, $_POST['id']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', 'Jabatan berhasil diubah');
        } else {
            pesan('danger', 'Jabatan gagal diubah karena:' . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }
}
