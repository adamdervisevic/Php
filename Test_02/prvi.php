<?php
    $stabla = array(
        "visina" => array(12.4, 10, 4.3, 9, 10),
        "testera" => 5.0
    );

    function brojNeposecenihStabala($stabla, $testera) {
        $brojneposecenih = 0;
        $testeraVis = $stabla["testera"];

        foreach($stabla as $visina) {
            if($visina < $testeraVis) {
                $brojneposecenih++;
            } 
        } return $brojneposecenih;
    }
    echo "Broj neposecenih stabala je: " . brojNeposecenihStabala($stabla, $testera);
    // VRATI SE OVDE
    echo "<hr>";

    function ukupnoPoseceno($stabla, $testera) {
        $poseceno = 0;
        $visinaTest = $stabla["testera"];
        
        foreach($stabla as $visina) {
            if($visina >= $visinaTest) {
                $poseceno++;
            }
        } return $poseceno;
    }
    echo ukupnoPoseceno($stabla, $testera);

    function maxDuzina($stabla, $testera) {
        $max = 0;
        $duzinaTest = $stabla["testera"];

        foreach($stabla as $visina) {
            if($max < $visina) {
                $max = $visina;
            } $max++;
        } 
    } return $max;
    echo maxDuzina($stabla, $testera);









?>