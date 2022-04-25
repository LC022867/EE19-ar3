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
    //Vi ska registera hur mycket mina antällda ska få i lön denna månad
    //Skapa en klass PersonInkomst
    //Egenskaper: förNamn, efterNamn, timLön, antalTimmar
    class PersonInkomst
    {
        //Egenskaper
        public $förNamn = "";
        public $efterNamn = "";
        public $timLön = 0;
        public $antalTimmar = 0;

        //Method
        public function SkrivUtLön()
        {
            $lön = $this->timLön * $this->antalTimmar;
            echo "<p>$this->förNamn $this->efterNamn månadslön är $lön:-</p>";
        }
    }

    //Registera två antällda
    $anställd1 = new PersonInkomst();
    $anställd1->förNamn = "Luciano";
    $anställd1->efterNamn = "Cucarano";
    $anställd1->timLön = 200;
    $anställd1->antalTimmar = 45;

    $anställd2 = new PersonInkomst();
    $anställd2->förNamn = "Isam";
    $anställd2->efterNamn = "Al-bitar";
    $anställd2->timLön = 200;
    $anställd2->antalTimmar = 30;

    //Skriv ut lönerna
    $anställd1->SkrivUtLön();
    $anställd2->SkrivUtLön();
    ?>
</body>

</html>