<?php
    //8
    $letovi = array(
        array("dest" => "Paris", "country" => "France", "time" => "06:30"),
        array("dest" => "Berlin", "country" => "Germany", "time" => "12:00"),
        array("dest" => "Moscow", "country" => "Russia", "time" => "16:30"),
        array("dest" => "Tokyo", "country" => "Japan", "time" => "18:30"),
        array("dest" => "Tokyo", "country" => "Japan", "time" => "20:30"),
        array("dest" => "Paris", "country" => "France", "time" => "22:00"),
    );

    //9
    function brojLetovaZaZemlju($letovi, $zemlja) {
        $brojac = 0;
        foreach($letovi as $let) {
            if($let['country'] === $zemlja){
                $brojac++;
            }
        } return $brojac;
    }
    echo brojLetovaZaZemlju($letovi, "Japan");
    echo "<p></p>";
    
    //10
    function visePrePodne($letovi) {
        $prePodneBrojac = 0;
        $poslePodneBrojac = 0;

        foreach($letovi as $let) {
            $vreme = strtotime($let['time']);
            $cas = date('H', $vreme);

            if($cas <= 12) {
                $prePodneBrojac++;
            } else {
                $poslePodneBrojac++;
            }
        } return $prePodneBrojac > $poslePodneBrojac;
    }
    echo visePrePodne($letovi)? "Bilo je vise letova prepodne." : "Bilo je vise letova popodne.";
    echo "<p></p>";

    //11
    function ispisLetovaDoSada($letovi) {
        date_default_timezone_set('Europe/Belgrade');
        $trenutnoVreme = date("H:i");
        foreach($letovi as $let) {
            if($trenutnoVreme >= $let['time']) {
                
                echo $let['dest']. "<p></p>";
            }
        }
    }
    echo ispisLetovaDoSada($letovi);

    //12
    function rizicniLetovi($letovi, $crvenaZona) {
        for ($i=0; $i < count($letovi); $i++) {
            for($j=0; $j < count($crvenaZona); $j++) {
                if($letovi[$i]['country'] === $crvenaZona[$j]) {
                    echo "<p style=color:red>" . "Let za " . $letovi[$i]['dest'] . " " . $letovi[$i]['country'] . " " . "u " . $letovi[$i]['time'] . " spada u letove crvene zone." . "</p>";
                }
            }
        }   
    }
    $crvenaZona = ['Serbia', 'Germany', 'Egypt'];
    rizicniLetovi($letovi, $crvenaZona);
    echo "<p></p>";

    //13
    function trazeneDestinacije($letovi)
    {
        $polasci = [];
        foreach ($letovi as $let)
        {
            if(!isset($polasci[$let["dest"]])){
                $polasci[$let["dest"]] = 0;
            } 
                $polasci[$let["dest"]]++;
        }

        foreach ($polasci as $d => $br)
        {
            if ($br > 1)
            {
                echo "<p>$d je trazena destinacija</p>";
            }
        }
    }
    echo trazeneDestinacije($letovi);
    
    //14
    function prosecanBrojLetovaZaZemlju($letovi) {
        $brojLetova = array();
        $brojZemalja = array();
    
        foreach ($letovi as $let) {
            $zemlja = $let['country'];
    
            if (isset($brojLetova[$zemlja])) {
                $brojLetova[$zemlja]++;
            } else {
                $brojLetova[$zemlja] = 1;
            }
    
            $brojZemalja[$zemlja] = 1;
        }
    
        $ukupanBrojLetova = array_sum($brojLetova);
        $ukupanBrojZemalja = count($brojZemalja);
    
        if ($ukupanBrojZemalja > 0) {
            $prosecanBrojLetova = $ukupanBrojLetova / $ukupanBrojZemalja;
        } else {
            $prosecanBrojLetova = 0;
        }
    
        return $prosecanBrojLetova;
    }
    $prosecanBrojLetova = prosecanBrojLetovaZaZemlju($letovi);
    echo "Prosečan broj letova: " . $prosecanBrojLetova;
        
    
?>