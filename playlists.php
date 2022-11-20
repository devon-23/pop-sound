<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="includes/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <title>Playlists</title>
        <form>
            <input id="back" type="button" value="back" onclick="history.go(-1)">
        </form>
    </head>
    <body>

        <h1 class="title">Playlists</h1>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">by year</a></li>
                <li><a href="#tabs-2">Apple Replay</a></li>
                <li><a href="#tabs-3">Aenean lacinia</a></li>
            </ul>
            <div id="tabs-1">
                <nav class="navigation">
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
            </div>
            <div id="tabs-2">
            <nav class="navigation">
                    <ul class="year">
                        <li><a href="#">2015</a></li>
                        <li><a href="#">2016</a></li>
                        <li><a href="#">2017</a></li>
                        <li><a href="#">2018</a></li>
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
            </div>
            <div id="tabs-3">
                <p></p>
                <p>sdfdfsadf</p>
            </div>
        </div>
        
        
    </body>
    <script src="./includes/script.js"></script>
</html>