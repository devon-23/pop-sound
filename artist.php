<?php 
    require 'includes/script.php';
    $lastfm = new LastFM("092d316884d8385f35ad8b84f5f42ef8");

    error_reporting(E_ALL ^ E_WARNING);
    $artist = $_GET['artist'];
    if ($artist != null):
        $artistInfo = $lastfm->getArtistInfo(str_replace(' ','+', $artist));
    endif;
?>

<!-- Loads a different artist based on what was clicked from the index page -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <title><?= $artist ?></title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <div class="artist-title">
            <?php if ($artist === null): ?>
                <h1>artist not found.</h1>
            <?php else: ?>
                <br>
                <div id="track-name"><?= $artist ?></div>
                <br>
            <?php endif; ?>
        </div>

        <div class="information">
            <div class="album-picture">
                <?php foreach($artistInfo->artist as $k=>$v): ?>
                    <img src="<?php echo $v->image[3]; ?>" alt="unable to load" style="bottom:720px; border: 5px solid #000; float:right;">
                <?php endforeach; ?>
            </div>
            <div class="album-information">
                <?php foreach($artistInfo->artist as $k=>$v):
                    foreach($v->bio as $f=>$g): 
                        $string = substr($g->summary, 0, strpos($g->summary, "<a"))?>
                        <?= $string; ?>
                    <?php endforeach;
                endforeach; ?>
            </div>
        </div>
    </body>
</html>