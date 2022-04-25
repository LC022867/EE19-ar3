<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //Skapa en klass familj
    //Med två egenskaper: förnamn och efternamn
    class familj
    {
        //Egenskaper
        public $firstName = "";
        public $lastName = "";

        //konstuktor
        //$m = modell, $p = pris
        public function __construct($first, $last)
        {
            $this->firstName = $first;
            $this->lastName = $last;
        }
    }

    // Skapa två instanser av klassen familj för två i din egen familj
    $medlem1 = new familj("Luciano", "Cucarano");
    $medlem2 = new familj("Momo", "Cow");

    /*
    //Fyll i egenskaperna för de två instanerna
    echo $medlem1->firstName = "Luciano";
    echo $medlem2->lastName = "Cucarano";
    echo $medlem1->firstName = "Momo";
    echo $medlem2->lastName = "Cow";
    */
    ?>
</body>

</html>