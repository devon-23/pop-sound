<?php 
    require 'includes/script.php';
    $lastfm = new LastFM("092d316884d8385f35ad8b84f5f42ef8");

    error_reporting(E_ALL ^ E_WARNING);
    $track = $_GET['track'];
    $artist = $_GET['artist'];
    $track = str_replace('’', '\'', $track);
    if ($track != null && $artist != null):
        $trackInfo = $lastfm->getTrackInfo(str_replace(' ','+', $artist), str_replace(' ', '+', $track), $_GET["user"]);
    endif;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href='style.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">

        <title><?= $track ?> | <?= $artist ?></title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <div class="artist-title">
            <?php if ($artist === null || $track === null): ?>
                <h3>song not found.</h3>
            <?php else: ?>
                <div id="artist-name"><?= $artist ?></div>
                <div id="track-name"><?= $track ?></div>
            <?php endif; 
            foreach($trackInfo->track as $k=>$v): ?>
                <div id="play-count"><?=$_GET["user"]?> has listened to this song <?= $v->userplaycount; ?> times</div>
            <?php endforeach; ?>
        </div>

        <div class="information">
            <div class="album-picture">
                <?php foreach($trackInfo->track as $k=>$v): 
                        foreach($v->album as $f=>$g):?>
                            <img src="<?= $g->image[3]; ?>" alt="unable to load">
                    <?php endforeach; 
                endforeach; ?>
            </div>
            <div class="album-information">
                <?php foreach($trackInfo->track as $k=>$v):
                    foreach($v->wiki as $f=>$g): 
                        $string = substr($g->summary, 0, strpos($g->summary, "<a"))?>
                        <?= $string . "test"; ?>
                    <?php endforeach;
                endforeach; ?>
            </div>
        </div>
    </body>
</html>