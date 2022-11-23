<?php 
    require 'includes/database.php';
    $conn = getDB();

    if(isset($_GET['id'])) {
        $article = getArticle($conn, $_GET['id']);
    } else {
        $article = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <title><?= $article['title'] ?></title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <div class="article-container">
            <?php if ($article === null): ?>
                <p>Article not found. =(</p>
            <?php else: ?>
                <div class="sing-article">
                    <h2 id="article-title"><?= htmlspecialchars($article['title']); ?></h2>
                    <p id="article-content"><?= htmlspecialchars($article['content']); ?></p>
                </div>
            <?php endif ?>
        </div>
    </body>
</html>