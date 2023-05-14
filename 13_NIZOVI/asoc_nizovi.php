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
    //2. Zadatak
    echo "<hr>";
    $imena = array(
        "Adam" => 176,
        "Sasa" => 177,
        "Filip" => 179,
        "Milan" => 190,
        "Veljko" => 165
    );

    foreach($imena as $ime => $visina) {
        echo "<p>$ime je visok/a $visina.</p>";
    }
    echo "<hr>";

    $zbir = 0;
    foreach($imena as $visina) {
        $zbir += $visina;
    }
    $prosek = $zbir / count($imena);
    foreach($imena as $ime => $visina) {
        if($visina > $prosek) {
            echo "<p>Osoba $ime je natprosecno visoka.</p>";
        }
    }
    echo "<hr>";

    $max_visina = 0;
    $max_ime = '';
    foreach($imena as $ime => $visina) {
        if($visina > $max_visina) {
            $max_visina = $visina;
            $max_ime = $ime;
        }
    }
    echo "<p>Osoba $max_ime ima maksimalnu visinu.</p>";
    echo "<hr>";

    foreach($imena as $ime => $visina) {
        if($visina < $prosek && $ime[0] == "V") {
            echo "<p>Osoba $ime je visoka ispod proseka.</p>";
        }
    }
    echo "<hr>";
    
    //3. Zadatak
    $student = array(
        "Geografija" => 5,
        "Istorija" => 5,
        "Matematika" => 3,
        "Hemija" => 2,
        "Fizicko" => 5,
        "Muzicko" => 4
    );
    foreach($student as $predmet => $ocena) {
        echo "<p>Ocena iz predmeta $predmet je: $ocena.</p>";
    }
    echo "<hr>";
    $najveca_ocena = 0;
    foreach($student as $predmet => $ocena) {
        if($najveca_ocena < $ocena) {
            $najveca_ocena = $ocena;
        }
    }
    foreach($student as $predmet => $ocena) {
        if($ocena == $najveca_ocena) {
            echo "<p>Student ima $najveca_ocena iz $predmet.</p>";
        }
    }
    echo "<hr>";
    
    $zbir = 0;
    foreach($student as $ocena) {
        $zbir += $ocena;
    }
    $prosecna_ocena = $zbir / count($student);
    foreach($student as $predmet => $ocena) {
        if($prosecna_ocena < $ocena) {
            echo "<p>Student ima vecu ocenu od proseka iz $predmet.</p>";
        }
    }

?>