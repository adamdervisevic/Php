<?php
    $a = "Zdravo svete"; //promenljiva $a dobija vrednost "Zdravo svete"
    echo $a; // ovo prikazuje string "Zdravo svete"
    echo "<br>";
    $a = 28;
    echo $a;
    echo "<br>";
    $b = 28 + 9.5;
    echo $b;
    echo "<br>";
    $a = 100;
    echo $a;
    echo "<br>";
    $b = $a - 20;
    echo "vrednost promenjive b je " . "osamdeset" . $b;
    echo "<br>";
    echo "vrednost b je $b";
    echo "<br>";
    $d = 20;
    $d += 2;
    echo $d;

    echo "<hr>";

    /* prvi zadatak */
    $h = 20;
    $m = 35;

    $rez = $h * 60 + $m;
    echo "Rezultat zadatka je " . $rez . " minuta.";
    echo "<hr>";
    /* Drugi zadatak */
    date_default_timezone_set('Europe/Belgrade');
    $h = date('G');
    $m = date('i');
    echo "<br>";
    echo "Trenutno vreme je " . $h . " sati i " . $m . " minuta<br>"; 

    $rez = $h * 60 + $m;
    echo "Rezultat zadatka 2 je " . number_format($rez) . " minuta.";
    echo "<hr>";
?>