<?php
if(isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])){
    setcookie("beliNovel", $_POST["beliNovel"]);
    setcookie("beliBuku", $_POST["beliBuku"]);
    header("Location: keranjang_belanja.php");
}