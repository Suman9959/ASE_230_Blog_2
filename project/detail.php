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

// Function to retrieve a single post by its ID
function getPost($posts, $post_id) {
    return isset($posts[$post_id]) ? $posts[$post_id] : null;
}

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $post = getPost($posts, $post_id);

    if ($post) {
        $title = $post['title'];
        $content = $post['content'];
        $author = $post['author'];
        $date = $post['date'];
    } else {
        $error = "Post not found.";
    }
} else {
    $error = "No post specified.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">
            <?php echo isset($title) ? $title : "Error"; ?>
        </h1>
        
        <?php if (isset($post)) { ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text"><?php echo $content; ?></p>
                    <p class="text-muted">By <?php echo $author; ?> on <?php echo $date; ?></p>
                </div>
            </div>
        <?php } else { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        
        <a href="index.php" class="btn btn-primary mt-3">Back to Blog Index</a>
    </div>
</body>
</html>
