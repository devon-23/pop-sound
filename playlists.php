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
        <div id="playlist-container">
            <div id="playlist">
                <!-- playlists -->
            </div>
        </div>
    </body>
    <script src="./includes/script.js"></script>
</html>