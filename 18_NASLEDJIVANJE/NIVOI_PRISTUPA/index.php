<?php

    require_once "Vozilo.php";
    require_once "Automobil.php";

    $v = new Vozilo("a", "b", "c");

    $v->ispis();

    //echo $v->privatnoPolje; ovo je greska: van klase ne mozemo pristupiti privatnim poljima i metodama

    //echo $v->zasticenoPolje; greska: van klase ne moze

    echo $v->javnoPolje;

    $a = new Automobil ("d", "e", "f", 5);
    $a->ispis();
    $a->ispisAuto();

?>