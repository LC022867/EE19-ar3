<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens Nasa Bild</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Sök Nasa Bilder</h1>
        <form action="#" method="POST">
            <label for="datum">Ange Datum:</label>
            <input type="date" name="datum" required>
            <button>Sök</button>
        </form>

        <?php
        //Ta emot data från forluläret
        $datum = filter_input(INPUT_POST, "datum");

        //Innehåller datum något 
        if ($datum) {

            // Vi kan inte söka i framtiden
            if ($datum > date("Y-M-D")) {
                echo "<div class=\"alert alert-warning\" role=\"alert\">
                <p>Datumet finns inte. Välj ett äldre datum..</p>
              </div>";
            } else {
                //Addressen till api:et
                $url = "https://api.nasa.gov/planetary/apod";

                //Vi behöver en api-key
                $apiKey = "krIeatOWVX8QjyxFHjyvZ8c4mLsg3xaiddXH7Xe7";

                //Anropa apiet
                $json = file_get_contents("$url?api_key=$apiKey&date=$datum");


                //Avkoda JSON
                $data = json_decode($json);

                //Plocka data vi vill ha
                //explanation
                $explanation = $data->explanation;
                // - title
                $title = $data->title;
                // - url
                $url = $data->url;

                //var_dump($url, $title, $explanation)
                echo "<img class=\"img-fluid\" src=\"$url\">";
                echo "<p>$explanation</p>";
                echo "<p>$title</p>";
            }
        }
        ?>
    </div>
</body>
</html>