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
        $verbing = filter_input(INPUT_POST, 'verb', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $bodypart = filter_input(INPUT_POST, 'bodypart', FILTER_SANITIZE_STRING);

        if ($anamn && $verbing && $noun && $number && $food && $bodypart) {
            //Resultat

            //Slumpa fram ett verb
            $verben = ["eat", "love", "sleep", "walk", "run", "swim", "kill", "shoot", "sing", "read", "write", "watch", "jump", "doge", "backflip", "spin"];

            //Skriv ut madlibs-texten
            echo "<p><strong>Mario:</strong> What a/an $adjective day, eh Luigi? The perfect day for $verbing some Koopas. The $food Kingdom is crawling with them!</p>
            <p><strong>Luigi:</strong> You're right about that, dear $noun. I hope you're ready to " . $verben[rand(0, 15)] . ".</p>
            <p><strong>Mario:</strong> Ready? I've waited $number years to " . $verben[rand(0, 15)] . " that scoundrel Bowser!</p>
            <p><strong>Luigi:</strong> Pipe down. He has $bodypart everwhere.</p>
            <p><strong>Mario:</strong> First, I'II " . $verben[rand(0, 15)] . " and grab a/an $food. That'II give me $noun.</p>
            <p><strong>Luigi:</strong> And I'II grab a/an $adjective  star. Then I'II be the most $adjective plumber of all time.</p>
            <p><strong>Mario:</strong> Remember we're there to rescue Princess $noun, Luigi. Once we do that we'II be heros!</p>
            <p><strong>Luigi:</strong> Then let's slide down that pipe and save the $noun!</p>
            <p><strong>Mario:</strong> That's the spirit, brother! Get your $noun ready. It's time to " . $verben[rand(0, 15)] . "!";


            /*
            echo "Hello! My name is $anamn and my favorite drink is $liquid. I'm working at $job, which inspire me a lot! In my lunch time I often watch a video game call $game with my favorite food $food. c:";
            */
        } else {
            //warning
            echo "<p class=\"alert alert-warning\">Något är fel</p>";
        }
        ?>
    </div>
</body>
</html>