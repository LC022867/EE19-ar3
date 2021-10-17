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
        <h3>Omvandla text</h3>
        <form action="backend.php" method="POST">
            <div class="mb-3">
                <label for="textarea" class="form-label">Mata in en text</label>
                <textarea type="text" class="form-control" id="textarea" name="textarea" rows="10"></textarea>
            </div>
            <div class="kol2">
                <p>Versaler eller Gemener?</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="radio" id="lu" checked name="riktning" value="lu">
                    <label class="form-check-label" for="lu">Versaler</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="radio" id="ul" name="riktning" value="ul">
                    <label class="form-check-label" for="ul">Gemener</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>