<?php

    //Zadatak 1
    $a = 19.35;
    $b = -3.14;

    if($a > $b) {
        echo "<p>Veci je broj $a</p>";
    } else {
        echo "<p>Veci je broj $b</p>";
    }

    //Zadatak 2
    $temperatura = -20; 
    if($temperatura >= 0) {
        echo "<p>Temperatura je u plusu ili 0</p>";
    } else {
        echo "<p>Temperatura je u minusu</p>";
    }
    //Zadatak 3
    
    $pol = "Z";
    if($pol == "M"){
        echo "<p> <img src='img/m.png' alt='muski pol'> </p>";
    } else {
        echo "<p> <img src='img/f.png' alt='zenski pol'> </p>";
    }

    //Zadatak 4

    $dobaDana = date("a");
    if($dobaDana == "am") {
        echo "<p>Pre podne</p>";
    } else {
        echo "<p>Posle podne</p>";
    }

    //alternativno

    if($dobaDana == "pm") {
        echo "<p>Posle podne</p>";
    } else {
        echo "<p>Pre podne</p>";
    }
    
    //zadatak 5

    $godinaRodjenja = 1994;
    $trenutnaGodina = date("Y");
    if(($trenutnaGodina - $godinaRodjenja) >= 18) {
        echo "<p>Punoletan si</p>";
    } else {
        echo "<p>Maloletan si</p>";
    }

    // Zadatak 6
    $a = 9;
    $b = -6;
    $c = 6;

    if($a > $b) {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }
    //Nakon ovog if-a $a je sigurno manja vrednost nego u $b
    if ($a > $c) {
        $pom = $a;
        $a = $c;
        $c = $pom;
        //Nakon ovog if-a u $a je sigurno najmanja vrednost od zadate tri
    }

    if($b > $c) {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    //Nakon ovog if-a vazi $a  <= $b <= $c
    echo "<p>$a <= $b <= $c</p>"
?>