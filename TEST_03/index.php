<?php
    require_once "knjiga.php";
    require_once "zbirka_zadataka.php";
    require_once "udzbenik.php";

    $udzbenik1 = new Udzbenik("Matematika", 250, 890, 500);

    $zbirka1 = new ZbirkaZadataka("Fizika", 300, 1200, 200);

    $udzbenik1->stampa();
    echo "<hr>";
    $zbirka1->stampa();
    echo "<hr>";
    echo $udzbenik1->jedinicnaCena();
    echo "<hr>";
    echo $zbirka1->jedinicnaCena();
    echo "<hr>";
    







?>