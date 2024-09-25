<!-- Metode Pertama -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Tanggal Hari ini: <?php echo date("d-m-Y"); ?></p>
</body>

</html>

<!-- Metode Kedua -->
<?php
echo "<html>";
echo "<body>";
echo "<p>Tanggal Hari ini: " . date("d-m-Y") . "</p>";
echo "</body>";
echo "</html>";
?>