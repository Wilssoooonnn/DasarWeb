<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Form</h2>
    <form action="proses_lanjut.php" method="POST">
        <label for="buah">Buah :</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <br>
        <label for="">Pilih warna fav</label><br>
        <input type="checkbox" name="warna[]" value="merah">Merah <br>
        <input type="checkbox" name="warna[]" value="biru">Biru <br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau <br>
        <br>
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jk" value="laki-laki">Laki-laki <br>
        <input type="radio" name="jk" value="perempuan">Perempuan <br>
        <br>
        <input type="submit" value="Sumbit" id="">
</body>

</html>