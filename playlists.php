<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Playlists</title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>
        <h1 class="title">Playlists</h1>
        <nav class="navigation">
            <p id="year-title">by year</p>
            <ul class="year">
                <li><a href="#">2019</a></li>
                <li><a href="#">2020</a></li>
                <li><a href="#">2021</a></li>
                <li><a href="#">2022</a></li>
            </ul>
        </nav>
        <div class="playlists">
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="400" style="width:100%;max-width:610px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/best-songs-of-all-time/pl.u-8aAVVZbToPpaBED"></iframe>
            <iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" frameborder="0" height="400" style="width:100%;max-width:610px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/its-2-12-and-schools-out-for-the-day/pl.u-xlyNjv2Fk32pbZl"></iframe>
        </div>
    </body>
    <script src="./includes/script.js"></script>
</html>