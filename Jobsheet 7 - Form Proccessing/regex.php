<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo 'Huruf Kecil Ditemukan!';
} else {
    echo 'Tidak Ada Huruf Kecil';
}
echo "<br>";
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan : ' . $matches[0];;
} else {
    echo 'Tidak Ada Angka Yang Cocok';
}
echo '<br>';

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apples.';
$newText = preg_replace($pattern, $replacement, $text);
echo $newText;

echo '<br>';

$pattern = '/go*d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan : ' . $matches[0];
}else{
    echo 'Tidak ada yang cocok!';   
}
echo '<br>';

$pattern = '/go?d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan : ' . $matches[0];
}else{
    echo 'Tidak ada yang cocok!';   
}

echo '<br>';

$pattern = '/go{2,2}d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan : ' . $matches[0];
}else{
    echo 'Tidak ada yang cocok!';   
}
