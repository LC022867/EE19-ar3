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
        <h1 class="display-4">Input Your Word Choices!</h1>
        <?php
        // Ta emot data som skickas
        $anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
        $liquid = filter_input(INPUT_POST, 'liquid', FILTER_SANITIZE_STRING);
        $job = filter_input(INPUT_POST, 'job', FILTER_SANITIZE_STRING);
        $game = filter_input(INPUT_POST, 'game', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);

        //Resultat
        echo "Hello! My name is $anamn and my favorite drink is $liquid. I'm working at $job, which inspire me a lot! In my lunch time I often watch a video game call $game with my favorite food $food. c:";
        ?>
    </div>
</body>
</html>