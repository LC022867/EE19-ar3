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
        <h3>Kontaktuppgifter</h3>
        <form action="backend.php" method="POST">
            <div class="mb-3">
                <label for="rad1" class="form-label">Namn:</label>
                <input type="text" class="form-control" id="rad1" name="namn">
            </div>
            <div class="mb-3">
                <label for="rad2" class="form-label">Epost:</label>
                <input type="text" class="form-control" id="rad2" name="epost">
            </div>
            <div class="mb-3">
                <label for="rad3" class="form-label">Telefon:</label>
                <input type="text" class="form-control" id="rad3" name="telefon">
            </div>
            <div class="kol">
                <p>Vill du ha nyhetsbrev?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="checkbox" id="flexCheckIndeterminate" name="checkbox">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ja
                    </label>
                </div>
            </div>
            <div class="kol2">
                <p>Hur vill du bli kontaktad?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Telefon
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">Epost
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>