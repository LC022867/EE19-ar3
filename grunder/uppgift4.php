<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Prints something like: 03:12:46 PM
    $tid = date("h:i:s");
    echo "Klockan är $tid";
    ?>
</body>
</html>