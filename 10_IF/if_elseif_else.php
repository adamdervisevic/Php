<?php
    $broj = 12;
    if($broj <= 10) {
        echo "<p>Broj prve desetice</p>";
    } elseif($broj <= 20) {
        echo "<p>Broj druge desetice</p>";
    } else {
        echo "<p>Broj veci od 20</p>";
    }

    //Alternativno:
    if($broj > 20) {
        echo "<p>Broj veci od 20</p>";
    } elseif($broj > 10) {
        echo "<p>Broj druge desetice</p>";
    } else {
        echo "<p>Broj prve desetice</p>";
    }

    // Zadatak 7 
    $poeni = 73; 
    if ($poeni <= 50) 
    {
        echo "<p>Student je pao ispit</p>";
    }
    elseif ($poeni <= 60) {
        echo "<p>Ocena 6</p>";
    }
    elseif ($poeni <= 70) {
        echo "<p>Ocena 7</p>";
    }
    elseif ($poeni <= 80)
    {
        echo "<p>Ocena 8</p>";
    }
    elseif($poeni <= 90) 
    {
        echo "<p>ocena 9</p>";
    }
    else 
    {
        echo "<p>Ocena 10</p>";
    }

    // Zadatak 8
    $currentDate = date('w');
    if ($currentDate == "1") {
        echo "<p>Danas je radni dan</p>";
    } elseif ($currentDate == "2") {
        echo "<p>Danas je radni dan</p>";
    } elseif ($currentDate == "3") {
        echo "<p>Danas je radni dan</p>";
    } elseif ($currentDate == "4") {
        echo "<p>Danas je radni dan</p>";
    } elseif ($currentDate == "5") {
        echo "<p>Danas je radni dan</p>";
    } else {
        echo "<p>Vikend</p>";
    }
    
    // Zadatak 9
    date_default_timezone_set('Europe/Belgrade');
    $vreme = date('H'); 
    if($vreme < 12) {
        echo "<p>Dobro jutro</p>";
    } elseif ($vreme < 18) {
        echo "<p>Dobar dan</p>";
    } else {
        echo "<p>Dobro vece</p>";
    }

    // Zadatak 10 
    $d1 = 21;
    $m1 = 4;
    $g1 = 2023;

    $d2 = 21;
    $m2 = 4;
    $g2 = 2023;

    if($g1 < $g2) {
        echo "<p>Raniji datum je $d1.$m1.$g1</p>";
    } elseif ($g2 < $g1) {
        echo "<p>Raniji datum je $d2.$m2.$g2</p>";
    } elseif ($m1 < $m2) {
        echo "<p>Raniji datum je $d1.$m1.$g1</p>";
    } elseif ($m2 < $m1) {
        echo "<p>Raniji datum je $d2.$m2.$g2</p>";
    } elseif ($d1 < $d2) {
        echo "<p>Raniji datum je $d1.$m1.$g1</p>";
    } elseif ($d2 < $d1) {
        echo "<p>Raniji datum je $d2.$m2.$g2</p>";
    } else {
        echo "<p>Datumi su isti!</p>";
    }

    // Zadatak 11
    date_default_timezone_set('Europe/Belgrade');
    $vreme = date('H'); 
    if($vreme < 9){
        echo "<p>Firma ne radi</p>";
    } elseif($vreme >= 17) {
        echo "<p>Firma ne radi</p>";
    } else {
        echo "<p>Firma radi</p>";
    }

    // Zadatak 12
    // Prvi lekar
    $p1 = 9;
    $k1 = 17;

    // Drugi lekar
    $p2 = 11;
    $k2 = 18;

    if ($k1 < $p2) {
        echo "<p>Ne preklapaju se</p>";
    } elseif ($k2 < $p1) {
        echo "<p>Ne preklapaju se</p>";
    } else {
        echo "<p>Preklapaju se</p>";
    }

    // Zadatak 13 
    $n = 13; 
    if($n % 2 == 0) {
        echo "<p>$n je paran</p>";
    } else {
        echo "<p>$n je neparan</p>";
    }

    //Zadatak 15 
    $b1 = 10;
    $b2 = 20;

    if($b1 > $b2) {
        echo $b1 - $b2;
    } elseif ($b1 < $b2) {
        echo $b2 - $b1;
    } else {
        "Brojevi su jednaki";
    }
    echo "<p></p>";

    //Zadatak 16 
    $broj = 10;
    if($broj <= 0) {
        echo $broj - 1;
    } else {
        echo $broj + 1;
    } 
    echo "<p></p>";

    //Zadatak 17
    $b1 = 3;
    $b2 = 10;
    $b3 = 99;
    if($b1 > $b2) {
        
    }
?>