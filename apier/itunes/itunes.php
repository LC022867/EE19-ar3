<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sök låy på iTunes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
        <div class="kontainer">
            <h1>Sök låter på iTunes</h1>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="artistE">Ange artistens förnamn:</label>
                    <input type="text" id="artistE" name="fnamn" required>
                </div>
                <div class="mb-3">
                    <label for="artistA">Ange artistens efternamn:</label>
                    <input type="text" id="artistA" name="enamn" required>
                </div>
                <button type="submit" class="btn btn-primary">Sök</button>
            </form>

            <?php
            $fnamn = filter_input(INPUT_POST, "fnamn");
            $enamn = filter_input(INPUT_POST, "enamn");

            if ($fnamn && $enamn) {
                // Url:en
                $url = "https://itunes.apple.com/search?term=$fnamn+$enamn&limit=10";
                //var_dump($url);

                //1. Anropa api:et med 2 parametrar
                $json = file_get_contents($url);

                //2. Avkoda json-svaret
                $data = json_decode($json);

                //3. plocka data vi vill ha
                // - resultCount
                // - results
                $resultCount = $data->resultCount;
                $results = $data->results; //Array med svar (10st)

                // Loppa igenom arrayen 
                echo "<table class=\"table\">";
                echo "<theader>";
                echo "<tr>";
                echo "<th>Artist</th>";
                echo "<th>Album</th>";
                echo "<th>Spår</th>";
                echo "<th>Bild</th>";
                echo "<th>Längd</th>";
                echo "<th>Genre</th>";
                echo "</tr>";
                echo "</theader>";
                foreach ($results as $track) {
                    //artistName 
                    $artistName = $track->artistName;
                    //collectionName
                    $collectionName = $track->collectionName;
                    //trackName
                    $trackName = $track->trackName;
                    //artworkUrl100
                    $artworkUrl100 = $track->artworkUrl100;
                    //trackTimeMillis
                    $trackTime = $track->trackTimeMillis / 1000;
                    //primaryGenreName
                    $primaryGenreName = $track->primaryGenreName;
                    //Skriv ut på webbsidan
                    echo "<tr>";
                    echo "<td>$artistName</td>";
                    echo "<td>$collectionName</td>";
                    echo "<td>$trackName</td>";
                    echo "<td><img class=\"img-fluid\" src=\"$artworkUrl100\"></td>";
                    echo "<td>$trackTime</td>";
                    echo "<td>$primaryGenreName</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </div>
    </body>
</html>