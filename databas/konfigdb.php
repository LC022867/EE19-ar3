<?php
// Akrivera felmeddelanden under utveckling 
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//Uppgifter för att logga in i mysql-databasen
$host = "localhost";
$databas = "movies_db";
$user = "movies_db";
$pass = "FTl_ZOlYeYj9XS.E";

// 1. Logga in
$conn = new mysqli($host, $user, $pass, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die("Fel! Något gick åt skogen: " . $conn->connect_error);
} else {
    // echo "Yes! Vi är inloggade i mysql.";
}
