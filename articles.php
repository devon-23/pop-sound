<?php
    require 'includes/database.php';
    $conn = getDB();

    $sql = "SELECT *
        FROM article
        ORDER BY published_at;";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <title>Articles</title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <h1 class="title">Articles</h1>
        <div class="articles">
            <?php if (empty($articles)): ?>
                    <p>No articles found. =(</p>
                <?php else: ?>
                <ul>
                    <?php foreach ($articles as $article): ?>
                    <li>
                        <article>
                            <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
                            <p><?= htmlspecialchars($article['content']); ?></p>
                        </article>
                    </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </body>
</html>