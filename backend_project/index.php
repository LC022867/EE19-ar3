<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    //lägger till proccess.php en gång
    require_once 'proccess.php';

    //pre_r($resultat);
    //pre_r($resultat->fetch_assoc());
    //pre_r($resultat->fetch_assoc());

    //function pre_r($array)
    //{
    //    echo '<pre>';
    //    print_r($array);
    //    echo '</pre>';
    //}

    //Lägger till mychcaracter.php
    require 'mycharacter.php';
    ?>
    <div class="mb-3">
        <form action="proccess.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="namn">Name</label>
                <input class="form-control" type="text" name="name" value="name">
            </div>
            <div class="form-group">
                <label class="form-label" for="element">Element</label>
                <input class="form-control" type="text" name="element" value="vilken element?">
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Vapen</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="weapon" id="gridRadios1" value="Bow" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Bow
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="weapon" id="gridRadios2" value="Polearm">
                        <label class="form-check-label" for="gridRadios2">
                            Polearm
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="weapon" id="gridRadios3" value="Sword">
                        <label class="form-check-label" for="gridRadios3">
                            Sword
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Position</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="position" id="gridRadios1" value="Main DPS" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Main DPS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="position" id="gridRadios2" value="Sub DPS">
                        <label class="form-check-label" for="gridRadios2">
                            Sub DPS
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="position" id="gridRadios3" value="Utility">
                        <label class="form-check-label" for="gridRadios3">
                            Utility
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
            <div class="mb-3">
                    <a href="mail.php" class="btn btn-primary">Mailer</a>
                </div>
        </form>
    </div>
</body>

</html>