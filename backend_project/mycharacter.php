<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karaktärer</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Listor av Genshin characters</h1>
    <br>
    <table class="table table-dark table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Namn</th>
                <th>Element</th>
                <th>Vapen</th>
                <th>Position</th>
                <th colspan="2">Knappar</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $serverNamn = "localhost";
            $userName = "admin";
            $lösen = "pass";
            $databas = "tableProject";

            // Skapa komunikation
            $conn = new mysqli($serverNamn, $userName, $lösen, $databas);

            //Om komunikationen inte fungerar
            if ($conn->connect_error) {
                die("Kommunikationen misslyckades: . $conn->connect_error");
            } else {
                //Läs alla rader från databas tabellen
                $sql = "SELECT * FROM genchara";
                $resultat = $conn->query($sql);
                if (!$resultat) {
                    die("Resultatet gick fel:" . $conn->error);
                } else {
                    //Läs data av varje rad
                    while ($row = $resultat->fetch_assoc()) {
            ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['element'] ?></td>
                            <td><?php echo $row['weapon'] ?></td>
                            <td><?php echo $row['position'] ?></td>
                            <td>
                                <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Uppdatera</a>
                                <a href="proccess.php?radera=<?php echo $row['id'];?>" class="btn btn-danger">Radera</a>
                            </td>
                        </tr>
            <?php

                    }
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>