<?php
    $godine = array(
        "Pera" => 28,
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );

    $godine["x"] = 48; // naknadno dodavanje 

    foreach($godine as $i => $g) {
        echo "<p>Osoba $i ima $g godina.</p>";
    }

    foreach($godine as $g) {
        echo "<p>Osoba ima $g godina.</p>";
    }

    $brojevi = array(5, -6, 3.3, 17.8, 0);

    foreach($brojevi as $broj) {
        echo "$broj &nbsp";
    }

    foreach($brojevi as $indeks => $broj) {
        echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
    }

    // Zadatak 1 
    $automobili = array(
        "Audi A3" => 2004,
        "Opel Corsa" => 2018,
        "Opel Astra" => 2016,
        "Peugeot 208" => 2004,
        "Ford Focus" => 2015
    );

    // Ispisati sve automobile, kao i njihova godišta.

    foreach($automobili as $marka => $godiste) {
        echo "<p>Automobil $marka proizveden $godiste. godine.</p>";
    }

    //Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date("Y");
    foreach($automobili as $marka => $godiste) {
        if($trenutnaGodina - $godiste > 10) {
            echo "<p>Automobil $marka je stariji od 10 godina.</p>";
        }
    }
    //Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.
    foreach($automobili as $marka => $godiste) {
        if(strpos($marka, "Opel") !== false && $godiste >= 2000) {
            echo "<p>Automobil $marka je proizvedem posle 2000. godine</p>";
        }
    }

    echo "<hr>";
    // Zadatak 2

    $osobe = array(
        "Marko" => 175,
        "Dusan" => 178,
        "Nemanja" => 182,
        "Vlada" => 150,
        "Milos" => 168
    );
    //Ispisati sve osobe sa njihovim visinama.
    foreach($osobe as $ime => $visina) {
        echo "<p>$ime je visok $visina cm.</p>";
    }
    //Ispisati sve natprosečno visoke osobe.
    $zbir = 0;
    foreach($osobe as $visina) {
        $zbir += $visina;
    }
    $prosek = $zbir / count($osobe);
    echo "<p>Prosecna visina je $prosek</p>";
    //Ispisati sve osobe koje imaju maksimalnu visinu.
    
    
    



    // Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
    foreach($osobe as $ime => $visina) {
        if($prosek > $visina && strpos($ime[0], "V") !== false) {
            echo "<p>Osoba $ime je ispod proseka i pocetno slovo imena je 'V'</p>";
        }
    }

?>