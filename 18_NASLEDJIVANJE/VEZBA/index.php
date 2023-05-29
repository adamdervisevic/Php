<?php

    require_once "Osoba.php";
    require_once "Zaposleni.php";

    $a = new Zaposleni("Marko", "Markovic", 25, 1000, "HR"); //($i, $p, $g, $pl, $po)
    $a->ispisiZap();

    $b = new Zaposleni ("Janko", "Jankovic", 27, 2800, "Programer");
    $b->ispisiZap();


    function prosekPlate($zaposleni) {
        $brojZaposleni = count($zaposleni);

        if($brojZaposleni == 0) {
            return 0;
        }

        $zbir = 0;

        foreach($zaposleni as $zaposlen) {
            $zbir += $zaposlen->getPlata();
        }
        $prosek = $zbir / $brojZaposleni;
        return $prosek;
    }
    $zaposleni = [$a, $b];
    echo prosekPlate($zaposleni);


    function natprosecnaPlata($zaposleni, $zaposlen) { 
        $prosek = prosekPlate($zaposleni);
        
            if($zaposlen->getplata() > $prosek) { 
                return true;
            } else {
                return false;
            
        }
    }
    $max = natprosecnaPlata($zaposleni, $a);
    if($max) {
        echo "<p>Zaposleni ima natprosecnu platu</p>";
    } else {
        echo "<p>Zaposleni nema natrposecnu platu</p>";
    }
?>