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
                <li><a href="#tabs-2">apple replay</a></li>
                <li><a href="#tabs-3">melancholy</a></li>
                <li><a href="#tabs-4">upbeat</a></li>
                <li><a href="#tabs-5">media</a></li>
            </ul>
            <div id="tabs-1">
                <nav class="navigation" id="default-nav">
                    <ul class="year">
                        <li><a href="#">2019</a></li>
                        <li><a href="#">2020</a></li>
                        <li><a href="#">2021</a></li>
                        <li><a href="#">2022</a></li>
                    </ul>
                </nav>
                <div class="playlists-container" id="playlist-container">
                    <div id="playlist">
                        <!-- playlists -->
                    </div>
                </div>
            </div>
            <div id="tabs-2">
                <nav class="navigation">
                    <ul class="replay-year" id="default-nav">
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
                <div class="playlists-container" id="replay-playlist-container">
                    <div id="playlist">
                        <!-- playlists -->
                    </div>
                </div>
            </div>
            <div id="tabs-3">
                <div class="playlists-container" id="holiday-playlist-container">
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/abosulty-gut-wrenching/pl.u-KVXB04BuZ26mapX"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/cleaning-out-my-childhood-bedroom-is-one-of-the/pl.u-oZylj2lsRZk08md"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/doing-130-in-the-amg-off-the-walt-whitman-bridge/pl.u-gxblNvms5DpMN2k"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/dont-mind-me-im-just-cryin/pl.u-8aAVrbaCoPpaBED"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/rainy-day-vibes/pl.u-oZyl50guRZk08md"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/remember/pl.u-kv9l4amC79oWBMN"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/sad-vibe/pl.u-oZyllYlTRZk08md"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/the-silence-is-so-loud/pl.u-WabZPjYTdrMvBzx"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/another-cw-playlist/pl.u-8aAVMYaHoPpaBED"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/whered-i-go/pl.u-oZylYzZuRZk08md"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/youre-not-gonna-slow-it-heaven-knows-you-tried/pl.u-2aoqGVyFNJPL4jl"></iframe></div>
                </div>
            </div>
            <div id="tabs-4">
                <div class="playlists-container">
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/tunnel-songs/pl.u-kv9lqGLT79oWBMN"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/we-swimmin/pl.u-2aoqEZbcNJPL4jl"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/we-yellin-in-this-b/pl.u-GgA50VBUZR58Jvj"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/dance-like-its-the-1960s/pl.u-kv9lqllT79oWBMN"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/devons-guilty-pleasure-songs/pl.u-KVXB6RWtZ26mapX"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/if-you-look-around-its-a-beautiful-day/pl.u-xlyN6ZWuk32pbZl"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/marvel-bops/pl.u-KVXB2qWuZ26mapX"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/pov-were-best-friends/pl.u-8aAVMJ6UoPpaBED"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/reminders-that-im-here-and-im-alive/pl.u-oZyl4JetRZk08md"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/road-trip-bangers/pl.u-gxblYqGF5DpMN2k"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/songs-everyone-knows/pl.u-kv9l4MaC79oWBMN"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/straight-up-killer-vibes/pl.u-jV8968Vsdv4qrPM"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/summer-feels/pl.u-oZylKdlIRZk08md"></iframe></div>
                </div>
            </div>
            <div id="tabs-5">
                <p>From tv shows, movies, and books, all the playlists are inspired by soundtracks or vibes from them!</p>
                <div class="playlists-container">
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/aristotle-and-dante/pl.u-GgA5xXRcZR58Jvj"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/batmobile/pl.u-kv9lKBat79oWBMN"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/flowers-from-1970/pl.u-WabZ5BPIdrMvBzx"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/marvel-bops/pl.u-KVXB2qWuZ26mapX"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/minecraft-music-discs/pl.u-jV896xWIdv4qrPM"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/moonknight/pl.u-2aoqEyLINJPL4jl"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/murdock/pl.u-NpXmoz7tm1Ep2Jk"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/paddys-pub/pl.u-2aoqEADFNJPL4jl"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/star-lords-milano/pl.u-KVXBv63uZ26mapX"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/tony-starks-workshop/pl.u-kv9lDqvF79oWBMN"></iframe></div>
                    <div id="playlist"><iframe id="scaled-frame" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/we-are-the-ants/pl.u-8aAVM69hoPpaBED"></iframe></div>
                </div>
            </div>
        </div>
    </body>
    <script src="./includes/script.js"></script>
</html>