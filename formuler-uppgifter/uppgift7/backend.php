<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperaturomvandlare</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="kontainer">
        <h3>Hur varmt är det?</h3>

        <?php
        //Tar emot
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_STRING);
        $telefon = filter_input(INPUT_POST, 'telefon', FILTER_SANITIZE_STRING);
        $checkbox = filter_input(INPUT_POST, 'checkbox', FILTER_SANITIZE_STRING);
        $radio = filter_input(INPUT_POST, 'radio', FILTER_SANITIZE_STRING);
        ?>
    </div>
</body>
</html>