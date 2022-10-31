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
        <h1 class="title">Recently played songs</h1>
        <ol class="playlist">
            <?php foreach($tracks->track as $k=>$v): ?>
                <li>
                    <a href="albumPage.php?album=<?= $v->album; ?>&artist=<?php foreach($v->artist as $q=>$t):echo $v->artist; ?>&user=<?=$user?>">
                        <img src="<?= $v->image[2]; ?>" alt="<?= $t->image[2]; ?>">
                        <?php endforeach; ?>
                    </a>
                    <br><br>
                    <a href="songPage.php?track=<?= $v->name; ?>&artist=<?php foreach($v->artist as $q=>$t):echo $v->artist; ?>&user=<?=$user?>">
                        <?= $v->name; ?> 
                        <?php endforeach; ?>
                    </a>
                    <br><br>
                    <a href="artistPage.php?artist=<?php foreach($v->artist as $q=>$t):echo $v->artist; ?>&user=<?=$user?>">
                        by <?= $v->artist; ?>
                        <?php endforeach; ?>
                    </a>
                    <br><br><br>
                </li>
            <?php endforeach; ?>
        </ol>
    </body>
</html>