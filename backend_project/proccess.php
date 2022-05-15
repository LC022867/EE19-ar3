<?php

$mysqli = new mysqli('localhost', 'admin', 'pass', 'tableProject') or die(mysqli_error($mysqli)); 

if (isset($_POST['save'])) {
    $namn = $_POST['name'];
    $element = $_POST['element'];
    $vapen = $_POST['weapon'];
    $position = $_POST['position'];

    $mysqli->query("INSERT INTO genchara (name, element, weapon, position) VALUES ('$namn', '$element', '$vapen', '$position')") or die($mysqli);
    header("Location: http://localhost:8080/ee19-ar3/backend_project/");
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $mysqli->query("DELETE FROM genchara WHERE id=$id");
    header("Location: http://localhost:8080/ee19-ar3/backend_project/");
}
