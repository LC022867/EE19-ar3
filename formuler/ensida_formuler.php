<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Spara ditt namn</h1>
        <form action="#" method="POST">
            <label>Ange namn <input type="text" name="namn"></label>
            <button>Spara</button>
        </form>
        <?php
        // Ta emot det som skickas
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);


        //Om data finns..
        if ($namn) {
            //Programmets kod
            //....
        }
        ?>
    </div>
</body>
</html>