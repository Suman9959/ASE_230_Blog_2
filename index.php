<?php
// Blog posts array
$posts = [
    [
        'title' => 'First Blog Post',
        'content' => 'This is the content of the first blog post.',
        'author' => 'Author 1',
        'date' => '2024-09-17'
    ],
    [
        'title' => 'Second Blog Post',
        'content' => 'This is the content of the second blog post.',
        'author' => 'Author 2',
        'date' => '2024-09-16'
    ],
    [
        'title' => 'Third Blog Post',
        'content' => 'This is the content of the third blog post.',
        'author' => 'Author 3',
        'date' => '2024-09-15'
    ]
];

// Function to display all blog post titles as links
function displayPosts($posts) {
    foreach ($posts as $index => $post) {
        echo "<div class='card my-3'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'><a href='detail.php?post_id=$index'>{$post['title']}</a></h5>";
        echo "<p class='card-text'>By {$post['author']} on {$post['date']}</p>";
        echo "</div>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Index</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Blog Posts</h1>
        <?php displayPosts($posts); ?>
    </div>
</body>
</html>
