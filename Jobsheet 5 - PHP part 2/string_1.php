<?php

$lorem = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque eveniet id, voluptate saepe laboriosam quam, aliquid exercitationem cupiditate molestias illo placeat cumque voluptatibus nobis. Voluptates cum quae magni in corrupti?
          Accusantium doloremque quasi reiciendis commodi veritatis laboriosam cumque quia mollitia ut ipsum perferendis aut assumenda nobis, necessitatibus illum earum delectus dolorum facilis laborum non! Qui maxime nisi quos aspernatur quae.
          Quas saepe aliquid eaque totam accusantium quia! Sint itaque perspiciatis deleniti praesentium mollitia quisquam, accusantium iusto nisi harum sed suscipit inventore rerum corporis dignissimos magni ratione voluptas laudantium consequuntur consequatur?
          Unde perferendis voluptatum reiciendis fugit illum facilis exercitationem! Quasi impedit doloremque similique veniam veritatis eligendi, quia voluptas perspiciatis ex eius non soluta maiores quos alias tempora deserunt temporibus voluptatem hic.";

echo "<p>" . $lorem . "</p>";
echo "Panjang Karakter: " . strlen($lorem) . "<br>";
echo "Panjang Kata: " . str_word_count($lorem) . "<br>";
echo "<p>" . strtoupper($lorem) . "</p>";
echo "<p>" . strtolower($lorem) . "</p>";
