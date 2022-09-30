<?php
    require 'includes/script.php';
    require 'includes/database.php';
    
    $lastfm = new LastFM("092d316884d8385f35ad8b84f5f42ef8");
    $topartists = $lastfm->getTopArtists();
    $conn = getDB();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sound Pop</title>
    </head>
    <body>
        <header></header>
        <main></main>
        <footer></footer>
    </body>
</html>