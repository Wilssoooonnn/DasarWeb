<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileError = $_FILES['files']['error'][$i];
        $fileType = $_FILES['files']['type'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if ($fileError !== 0) {
            $errors[] = "Error uploading file: $fileName (Error code: $fileError)";
            continue;
        }

        if ($fileSize > 2097152) {
            $errors[] = "File $fileName melebihi batas ukuran";
            continue;
        }

        if (!in_array($fileExt, $allowedExtensions)) {
            $errors[] = "Hanya file gambar (jpg, jpeg, png, gif) yang diizinkan untuk upload file: $fileName";
            continue;
        }

        $targetFile = "images/" . $fileName;
        if (move_uploaded_file($fileTmpName, $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            $errors[] = "Gagal mengunggah file: $fileName";
        }
    }

    if (!empty($errors)) {
        echo "<b>Terdapat kesalahan saat mengunggah file:</b><br>";
        echo implode("<br>", $errors);
    }
}
