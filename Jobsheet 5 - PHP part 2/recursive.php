<?php
function printHelloWorld(int $jumlah, int $index = 1)
{
    echo "Perulangan ke-{$index} <br>";
    if ($index < $jumlah) {
        printHelloWorld($jumlah, $index + 1);
    }
}
printHelloWorld(20);