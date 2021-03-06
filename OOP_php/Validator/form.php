<?php
include "./user_validator.php";

//Kolla att data skickats
$userName = filter_input(INPUT_POST, "username");
$email = filter_input(INPUT_POST, "email");
if ($userName && $email) {
    //echo "<p>$userName && $email</p>";

    //Använd klassen Validator
    $controll = new UserValidator($_POST);
    $controll->ValidateUsername();
    $controll->ValidateEmail();
}
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Ett folmulär</h1>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Primary</button>
        </form>
    </div>
</body>

</html>