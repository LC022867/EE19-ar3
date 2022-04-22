<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Skapa en första klass (mall)
    class User
    {
        // Properties -> (variable) | methods -> (functions)

        //Properties
        public $username = "Luciano";
        public $email = "luciano.cucarano@gmail.com";

        public function addFriend()
        {
            return "Added new friend";
        }
    }

    // Skapa ett första objekt från klassen User
    // "new" skapar en instans (objekt) = $userOne
    $userOne = new User();

    // Skapa ett andra objekt från klassen User
    $userTwo = new User();

    echo '<p>$userOne är klassen ' . get_class($userOne) . '</p>';
    echo '<p>$userTwo är klassen ' . get_class($userTwo) . '</p>';

    //Hur kommer vi ut egenskaperna (properties)
    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';
    ?>
</body>

</html>