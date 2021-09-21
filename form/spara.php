<?php

//Tar emot data från formuläret
$namn = $_POST["namn"];
$adress = $_POST["adress"];
$mobil = $_POST["mobil"];

//Om namnet är Olle 
if ($namn == "Teif") {
    echo "<p>VÄLKOMMEN MIN FINA KOSA :)!</p>";
} else {
    echo "<p>.....imposter</p>";
}
