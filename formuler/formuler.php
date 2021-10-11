<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulär</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Två Tal</h1>
        <form action="exempel-2.php" method="POST">
            <label for="tal1">Ange tal 1</label>
            <input id="tal1" class="form-control" type="text" name="talet1">
            <label for="tal2">Ange tal 2</label>
            <input id="tal2" class="form-control" type="text" name="talet2">
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
    </div>
</body>
</html>