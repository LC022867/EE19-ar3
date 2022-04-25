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
    //Skapa en klass Bil
    //Med egenskaperna: modell, pris, färg, årsmodell
    //Med method: Sammanfattning()
    class Bil
    {
        //Egenskaper
        public $modell = "";
        public $pris = 0;
        public $färg = "";
        public $årsmodell = 0;

        //konstuktor
        //$m = modell, $p = pris, $f = färg, $å = årsmodell
        public function __construct($m, $p, $f, $å)
        {
            $this->modell = $m;
            $this->pris = $p;
            $this->färg = $f;
            $this->årsmodell = $å;
        }

        //method
        public function sammanfattning()
        {
            echo "<p>Bil: modell: $this->modell färg: $this->färg, pris: $this->pris, årsmodell: $this->årsmodell</p>";
        }
    }

    //Skapa 2 bilar
    $bil1 = new Bil("Volvo", 100000 . "kr", "blue", 2010);


    $bil2 = new Bil("Audi", 50000 . "kr", "Silver", 2005);

    //Skriv ut sammanfattning
    $bil1->sammanfattning();
    $bil2->sammanfattning();

    //Sänker priset på Volvo
    $bil1->pris = 50000 . "kr";
    ?>
</body>

</html>