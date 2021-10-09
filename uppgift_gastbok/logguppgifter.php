<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konatiner">
        <h1 class="display-4">Logguppgifter</h1>
        <form class="kol2" action="sparalogg.php" method="POST">
            <label>Ip address</label>
            <input type="text" name="ip" placeholder="Skriv ip adressen.." required>
            <label>Subnetmask</label>
            <input type="text" name="subnetmask" placeholder="skriv subnetmasken..." required>
            <label>Defualt gateway</label>
            <input type="text" name="dg" placeholder="Exemepl: 255.255.255.0" required>
            <button class="primary">Spara</button>
        </form>
    </div>
</body>
</html>