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
        <h3>Resultat</h3>

        <?php
        //Tar emot
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_STRING);
        $telefon = filter_input(INPUT_POST, 'telefon', FILTER_SANITIZE_STRING);
        $checkbox = filter_input(INPUT_POST, 'checkbox', FILTER_SANITIZE_STRING);
        $radio = filter_input(INPUT_POST, 'radio', FILTER_SANITIZE_STRING);

        echo "$namn\n";
        echo "$epost\n";

        if (isset($_POST['radio'])) {
            $check = $_POST['radio'];
            if ($check == "tele") {
                echo "\nVi kommer att kontakta dig inom $telefon";
            } else {
                echo "\nWe will contact you in $epost";
            }
        }

        ?>
    </div>
</body>
</html>