<?php
$posts = json_decode(file_get_contents('data/posts.json'), true);
$file = fopen('data/visitors.csv', 'w');
foreach ($posts as $index => $post) {
    fputcsv($file, [$index, 0]); // Assuming index corresponds to post_id
}
fclose($file);
?>
