<?php
session_start();
include_once 'dbh.php';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Filuppladdning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $sqlImg = "SELECT * FROM  profileimg WHERE userid='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
            while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                echo "<div>";
                if ($rowImg['status'] == 0) {
                    echo "<img src='uploads/profile" . $id . ".jpg'>";
                } else {
                    echo "<img src='uploads/profiledefault.jpg'>";
                }
                echo $row['username'];
                echo "</div>";
            }
        }
    } else {
        echo "Det finns ingen användare än!";
    }

    if (isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) {
            echo "Du är inloggad som user #1";
        }
        echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='submit'>Ladda upp!</button>
        </form>";
    } else {
        echo "Du är inte inloggad!";
        echo "<form action='login-php' method='POST'>
            <input type='text' name='first' placeholder='Första namn..'>
            <input type='text' name='last' placeholder='Sista namn..'>
            <input type='text' name='uid' placeholder='Användarnamn..'>
            <input type='password' name='pwd' placeholder='Lösenord..'>
            <button type='submit' name='submitSignup'>SignUp</button>
        </form>";
    }
    ?>
    <div class="container">

        <p>Login as user!</p>
        <form action="login.php" method="POST">
            <button type="submit" name="submitLogin">Login</button>
        </form>

        <p>Logout as user!</p>
        <form action="logout.php" method="POST">
            <button type="submit" name="submitLogout">Logout</button>
        </form>
    </div>
</body>
</html>