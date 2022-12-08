<?php
    require 'includes/script.php';
    require 'includes/database.php';
    
    error_reporting(E_ALL ^ E_WARNING);
    $user = $_GET["user"];
    if ($_GET["user"] == NULL) {
        $user = 'devonbarks';
    }

    $lastfm = new LastFM("092d316884d8385f35ad8b84f5f42ef8");
    $tracks = $lastfm->getRecentTracks($user);
    $weeklyAlbums = $lastfm->getWeeklyAlbums($user);
    $weeklyArtists = $lastfm->getWeeklyArtists($user);
    $weeklyTracks = $lastfm->getWeeklyTracks($user);
    $userInfo = $lastfm->getUserInfo($user);

    $conn = getDB();

    date_default_timezone_set("America/New_York");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/x-icon" href="/~barcla29/pop-sound/includes/images/vinyl2.ico">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,700&amp;family=Lato:ital,wght@0,700;1,700&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://unpkg.com/vue@3.0.5"></script>
        <title>Pop-Sound</title>
    </head>
    <body>
        <header class="main-header">
            <h1 class="title" id="title-card">POP-SOUND</h1>
            <nav class="navigation" id="default-nav">
                <ul>
                    <li><a href="/~barcla29/pop-sound/playlists.php">Playlists</a></li>
                    <li><a href="/~barcla29/pop-sound/recentlyPlayed.php">Recently Played</a></li>
                    <li><a href="/~barcla29/pop-sound/articles.php">Articles</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div id="app">
                <h1>Now playing:</h1>
                <div id="player">
                    <a :href="link">
                    <div class="album">
                        <img :src="picture">
                    </div>
                    <div class="info">
                        <div class="progress-bar">
                            <div class="time-current">{{countMin}}:{{(this.countSec<10?'0':'') + this.countSec }}</div>
                            <div class="time-total">{{ songMin }}:{{ (this.songSec<10?'0':'') + this.songSec }}</div>
                            <div class="fill" :style="{width: Math.floor((songCount/(songLength/ 1000))*100) + '%'}"></div>
                        </div>
                        <div class="currently-playing">
                            <h2 class="song-name">{{ songName }}</h2>
                            <h3 class="artist-name">{{ artistName }}</h3>
                        </div>
                    </div>
                    </a>
                </div>
                <h6 class="last-seen">Last seen: 
                <?php $i = 0;
                foreach($tracks->track as $k=>$v):
                    if (!empty($v->date)) { 
                        $date = date_create($v->date, timezone_open('Etc/GMT+0')); //convert to EST
                        date_timezone_set($date, timezone_open('America/New_York'));
                        echo $date->format('F j g:i a');
                    } else { ?>
                        <?= date('F j g:i a'); //currently playing music
                    }
                    $i++;
                    if ($i == 1) break;
                endforeach; ?>
                </h6>
            </div>
            <div class="charts">
                <h1>Weekly Charts</h1>
                <div class="charts-container">
                    <div class="chart" id="top-tracks">
                        <p id="top-title">Top Tracks</p>
                        <?php foreach($weeklyTracks->weeklytrackchart as $k=>$v): 
                            foreach($v->track as $q=>$w): ?>
                                <br><a href="song.php?track=<?= $w->name; ?>&artist=<?= $w->artist; ?>&user=<?=$user?>">
                                    <?= $w->name ?>
                                    </a>
                            <?php endforeach;
                        endforeach; ?>
                    </div>
                    <div class="chart" id="top-albums">
                        <p id="top-title">Top Albums</p>
                        <?php foreach($weeklyAlbums->weeklyalbumchart as $k=>$v): 
                            foreach($v->album as $q=>$w): ?>
                                <br> <a href="album.php?album=<?= $w->name; ?>&artist=<?= $w->artist?>&user=<?=$user?>">
                                 <?= $w->name ?>
                                </a>
                            <?php endforeach;
                        endforeach; ?>
                    </div>
                    <div class="chart" id="top-artists">
                        <p id="top-title">Top Artists</p>
                        <?php foreach($weeklyArtists->weeklyartistchart as $k=>$v): 
                            foreach($v->artist as $q=>$w): ?>
                                <br> <a href="artist.php?artist=<?= $w->name; ?>&user=<?=$user?>"> 
                                    <?= $w->name ?> 
                                </a>
                            <?php endforeach;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        </footer>
    </body>
    <script src="./includes/app.js"></script>
</html>