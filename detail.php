<?php

include 'utils.php'; 


$posts = readPostsFromJSON('data/posts.json');


// Function to display all blog post titles

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    $post = getPost($posts, $post_id);

    if ($post) {
        $title = $post['title'];
        $content = $post['content'];
        $author = $post['author'];
        $date = $post['date'];

        // Update visitor count
        updateVisitorCount('visitors.csv', $post_id);

        // Get updated visitor count
        $visitor_count = getVisitorCount('visitors.csv', $post_id);
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
