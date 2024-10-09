<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="input" id="input" placeholder="Nama">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

<?php
if (isset($_POST["input"])) {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
} else {
    $input = '';
}

if (isset($_POST['emmail'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = htmlspecialchars($email, ENT_QUOTES, '');
    } else {
        $email = '';
    }
}
if (empty($input)) {
    echo 'Masukkan Nama <br>';
}
if (empty($email)) {
    echo 'Masukkan Email';
}
?>

</html>