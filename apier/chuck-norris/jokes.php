<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris Skämt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens Chuck Norris Skärmt</h1>

        <?php
        // Adress till tjänsten 
        $url = "https://api.chucknorris.io/jokes/random";

        // Anrop till api:et
        $json = file_get_contents($url);

        //avkoda json-svaret
        $data = json_decode($json);

        //plocka ut skämtet, dvs "value"
        $skämt = $data->value;

        //plocka ut skämtet, dvs "value"
        $bildUrl = $data->icon_url;

        // Skriv skämtet och bilden
        echo "<p>$skämt</p>";
        echo "<img src=\"$bildUrl\">";
        ?>
    </div>
</body>
</html>