<?php
//Slå på felrapportering
ini_set("display_errors", 1);
error_reporting(E_ALL);

//Uppgift för databasen, användare, lösenord..
$användaren = "bloggen_db";
$lösenord = "t(JXAe1PWaca/qU/";
$databas = "bloggen_db";
$host = "localhost";

//Logga in
$conn = new mysqli($host, $användaren, $lösenord, $databas);

//Gick det att ansluta?
/*
if ($conn->connect_error) {
    die("Någoting blev fel!" . $conn->connect_error);
} else {
    echo "<p>Hurra! Det gick bra att ansluta till databasen!</p>";
}
*/
