<?php
    require 'includes/script.php';
    $user = $_GET["user"];
    if ($_GET["user"] == NULL) {
        $user = 'devonbarks';
    }

    $lastfm = new LastFM("092d316884d8385f35ad8b84f5f42ef8");
    $tracks = $lastfm->getRecentTracks($user);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <title>Recently Played</title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <div class="title">Recently played songs</div>
        <div class="playlist">
            <ol>
                <?php foreach($tracks->track as $k=>$v): ?>
                    <li class="recent-song">
                        <a href="album.php?album=<?= $v->album; ?>&artist=<?php foreach($v->artist as $q=>$t): echo $v->artist; ?>&user=<?=$user?>">
                            <img id="album-picture" src="<?= $v->image[2]; ?>" alt="<?= $t->image[2]; ?>">
                            <?php endforeach; ?>
                        </a>
                        <br><br>
                        <a href="song.php?track=<?= $v->name; ?>&artist=<?php foreach($v->artist as $q=>$t):echo $v->artist; ?>&user=<?=$user?>">
                            <?= $v->name; ?>
                            <?php endforeach; ?>
                        </a>
                        <br><br>
                        <a href="artist.php?artist=<?php foreach($v->artist as $q=>$t):echo $v->artist; ?>&user=<?=$user?>">
                            by <?= $v->artist; ?>
                            <?php endforeach; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </body>
</html>