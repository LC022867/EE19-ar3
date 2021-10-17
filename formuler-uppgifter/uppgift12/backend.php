<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperaturomvandlare</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Resultat</h3>

        <?php
        $text = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_STRING);
        $riktning = filter_input(INPUT_POST, 'riktning', FILTER_SANITIZE_STRING);

        // OM riktning är l->u (lowercase to uppercase)
        if ($riktning == "lu") {
            $str = strtoupper($text);
            echo $str;
        } else {
            $str = strtolower($text);
            echo $str;
        }
        ?>
    </div>
</body>
</html>