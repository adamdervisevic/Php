<?php

    require_once "trougao_lakse.php";
    require_once "pravougaonik.php";
    require_once "kvadrat.php";
    require_once "romb.php";

    $t = new Trougao(3, 4, 5);
    $t->setA(60);

    // echo "<p>Obim: " . $t->obimTrougla(). ", povrsina: " . $t->povrsinaTrougla(). "</p>";

    $p = new Pravougaonik(5,9);
    // echo "<p>Obim: " . $p->obimPravougaonika(). ", povrsina: " . $p->povrsinaPravougaonika(). "</p>";

    $k = new Kvadrat(3);
    // echo "<p>Obim: " . $k->obimKvadrata(). ", povrsina: " . $k->povrsinaKvadrata(). "</p>";
    
    $r = new Romb(6, 15);

    $oblici = [$t, $p, $k, $r];
    foreach($oblici as $oblik) {
        //echo "<p>" . $oblik->obim(). ", " . $oblik->povrsina(). "</p>";
        $oblik->ispis();
    }
?>