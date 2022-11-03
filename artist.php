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
        <link rel="stylesheet" href='style.css'>
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
                <div id="track-name"><?= $artist ?></div>
            <?php endif;
            foreach($artistInfo->artist as $k=>$v):
                foreach($v->bio as $f=>$g): 
                    $string = substr($g->summary, 0, strpos($g->summary, "<a"))?>
                    <p style="padding-left: 4%; width: 60%"><?= $string; ?></p>
                <?php endforeach;
            endforeach; ?>
        </div>
        <div class="container">
            <div class="container-column left">
                
            </div>
            <div class="container-column right; box-sizing: border-box;">
                <?php foreach($artistInfo->artist as $k=>$v): ?>
                    <img src="<?php echo $v->image[3]; ?>" alt="unable to load" style="bottom:720px; border: 5px solid #000; float:right;">
                <?php endforeach; ?>
                <br>
            </div>
                
        </div>
    </body>
</html>