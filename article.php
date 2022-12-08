<?php 
    require 'includes/database.php';
    $conn = getDB();

    if(isset($_GET['id'])) {
        $article = getArticle($conn, $_GET['id']);
    } else {
        $article = null;
    }
    $date = date_create($article['published_at']);
    $playlists = explode(',', $article['playlist']);
    $text = str_replace('?end ', '</h2>', str_replace('?start ', '<h2 class="fw-bolder mb-4 mt-5">', $article['content']));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $article['title'] ?></title>
        <link rel="stylesheet" type="text/css" href="includes/included-styles.css">
        <!-- <link rel="stylesheet" type="text/css" href="includes/style.css"> -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1"><?= $article['title'] ?></h1>
                            <div class="text-muted fst-italic mb-2">Published on <?= $article['published_at']; ?></div>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#">Book</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#">Playlist</a>
                        </header>
                        <figure class="mb-4"><img class="img-fluid rounded" src="<?= $article['image_link'] ?>" alt="..." /></figure>
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?= $text; ?></p>
                        </section>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="card-mb-4">
                        <div class="card-header">Inspired Playlist:</div>
                        <div class="card-body">
                            <?php foreach ($playlists as $playlist) { ?>
                                <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="<?= $playlist ?>"></iframe>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>