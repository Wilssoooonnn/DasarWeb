<?php

$menu = [
    [
        "nama" => "Home"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function printMenu(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li> {$item['nama']}";
        if (!empty($item['subMenu'])) {
            printMenu($item['subMenu']);
        }
        // echo "</li>";
    }
    echo "</ul>";
}
printMenu($menu);
