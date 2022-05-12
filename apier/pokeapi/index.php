<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Pokeapi</h1>
        <form action="#" method="POST">
            <select class="form-select" name="pokemon" aria-label="Default select example">
                <option selected>Välj en pokemon</option>
                <?php
                $url = "https://pokeapi.co/api/v2/pokemon";
                //Steg 1: hämta data
                $json = file_get_contents($url);
                //Steg 2: Avkoda 
                $dataJson = json_decode($json);

                //Steg 3: Plocka det som intresserar oss
                $results = $dataJson->results;

                //Tugga igenom en array
                foreach ($results as $item) {
                    $name = $item->name;
                    $bild = $item->url;
                    echo "<option value=\"$name\">$name</option>";
                }
                ?>
            </select>
            <button type="submit" class="btn btn-primary">Sök</button>
        </form>
        <main>
            <h4>Resultat</h4>
            <?php
            // Ta emot data som skickas från formuläret
            $pokemon = filter_input(INPUT_POST, "pokemon");
            //Kontrollera att vi har data
            if ($pokemon) {
                //Hämta bild
                $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";

                //Steg 1: hämta data
                $json = file_get_contents($url);
                //Steg 2: Avkoda 
                $dataJson = json_decode($json);

                $front_shiny = $dataJson->sprites->front_shiny;

                echo "<div class=\"alert alert-primary\" role=\"alert\">
                $pokemon
                </div>";
                echo "<img src=\"$front_shiny\" alt=\"$pokemon\">";
            }

            ?>
        </main>
    </div>
</body>

</html>