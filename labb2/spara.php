<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Inloggning</h1>
        <?php
        // Ta emot data som skickas
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);

        // Kolla om användarnamn och lösenord stämmer
        // Finns data?
        if ($rubrik && $meddelande && $namn) {
            // Namn filen som sparas
            $filnamn = "gastbok.txt";

            // Sätt samman texten
            $texten = "$rubrik\n" .
                "$meddelande\n" .
                "$namn";

            file_put_contents($filnamn, $texten);
            // Berätta för användaren att texten har sparats
            echo "<p class=\"alert alert-success\">Din meddelande har sparats!</p>";
        }
        ?>
    </div>
</body>
</html>