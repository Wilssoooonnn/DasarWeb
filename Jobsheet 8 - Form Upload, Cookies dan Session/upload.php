<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxSize = 5 * 1024 * 1024;



    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxSize) {

        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File uploaded successfully";
            echo "<br>";
            echo '<img width="200" src="' . $targetfile . '"alt="thumbnail">';
        } else {
            echo "Error uploading file";
        }
    } else {
        echo "Invalid file type or size";
    }
}
