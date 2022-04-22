<?php
    // Url:en
    $url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

    //1. Anropa Api:et
    $json = file_get_contents($url);

    //2. Avkoda json-svaret
    $dataJson = json_decode($json);

    //3. Plocka ut data vi vill ha
    // - "name": "t"
    // - "values": [11.8]
    //Första steg: arrayen timeseries
    $timeSeries = $dataJson->timeSeries;

    //För json-svaret
    $tempData = [];

    //Loopa igenom timeSeries
    foreach ($timeSeries as $timeStamp) {
        $validTime = $timeStamp->validTime;
        $data->label = $validTime;

        //Plockaut alla parametrar
        $parameters = $timeStamp->parameters;

        //Skapa ett tomp ojekt
        $data = new stdClass();

        //sök efter name="t"
        $temprature = 0;


        foreach ($parameters as $parameter) {
            if ($parameter->name == "t") {
                //Lägg till temperaturen
                $data->t = $parameter->values[0];
                $tempData[] = $data;
            }
        }
    }

    //Skriv ut svaret
    echo json_encode($tempData);
