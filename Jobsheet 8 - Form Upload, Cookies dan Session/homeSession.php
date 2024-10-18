<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <?php
        session_start();
        
        // meriksa apakah sesi status sudah diatur
        if (isset($_SESSION["status"]) && $_SESSION["status"] == "login") {
            echo "Selamat datang, " . $_SESSION["username"] . "<br>";
            echo '<a href="sessionLogout.php">Logout</a>'; // Menggunakan echo untuk menampilkan link
        } else {
            echo "Anda harus login dulu <br>";
            echo "<a href='sessionLoginForm.php'>Login</a>";  
        }
    ?>
</body>
</html>