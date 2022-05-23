<?php

// Skapa komunikation
$mysqli = new mysqli('localhost', 'admin', 'pass', 'tableProject') or die(mysqli_error($mysqli)); 

//Om save knappen trycks
if (isset($_POST['save'])) {
    //Hämta data
    $namn = $_POST['name'];
    $element = $_POST['element'];
    $vapen = $_POST['weapon'];
    $position = $_POST['position'];

    //Lägg i tabellen
    $mysqli->query("INSERT INTO genchara (name, element, weapon, position) VALUES ('$namn', '$element', '$vapen', '$position')") or die($mysqli);
    //Gå till index.php
    header("location: index.php");
}

//Om radera knapp trycks..
if (isset($_GET['radera'])) {
    //Hämta id
    $id = $_GET['id'];
    var_dump($mysqli);
    //Tar bort beroeende på id
    $mysqli->query("DELETE FROM genchara WHERE id=$id") or die(mysqli_error($mysqli));
}
