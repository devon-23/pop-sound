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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <script src="https://unpkg.com/vue@3.0.5"></script>
        <title>Pop-Sound</title>
    </head>
    <body>
        <header>
            <h1 class="title">Pop-Sound</h1>
            <nav class="navigation">
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
                </div>
            </div>
        </main>
        <footer>
            
        </footer>
    </body>
    <script src="./includes/app.js"></script>
</html>