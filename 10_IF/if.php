<?php
    $broj_1 = 10;
    $broj_2 = -90;

    if($broj_1 > $broj_2) {
        echo "Broj $broj_1 je veci od $broj_2";
    } else {
        echo "Broj $broj_2 je veci od $broj_1";
    }
    echo "<hr>";
//2
    $temp = 0;
    if($temp >= 0) {
        echo "Temperatura je u plusu";
    } else {
        echo "Temperatura je u minusu";
    }
    echo "<hr>";
//3 
    $pol = "m";
    if($pol == "m") {
        echo "👨";
    } else {
        echo "👩";
    }
    echo "<hr>";
//4
    $vreme = date("A");
    if($vreme <= 12) {
        echo "Jutro je";
    } else {
        echo "Podne je";
    }
    echo "<hr>";
//5 
    $godina = date("Y");
    $godina_rodjenja = 2006;
    if($godina - $godina_rodjenja >= 18) {
        echo "Punoletan si";
    } else {
        echo "Maloletan si";
    }
    echo "<hr>";
//6 
    $a = 50;
    $b = 130;
    $c = -49;
    
    if($a > $b) {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }
    if($a > $c) {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
    if($b > $c) {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    echo "$a < $b < $c";
    echo "<hr>";
//7
    $poeni = 41;

    if($poeni <= 50) {
        echo "Nazalost, pali ste ispit.";
    } elseif($poeni <= 60){
        echo "Ocena 6";
    } elseif($poeni <= 70){
        echo "Ocena 7";
    } elseif($poeni <= 80) {
        echo "Ocena 8";
    } elseif($poeni <= 90) {
        echo "Ocena 9";
    } else {
        echo "Cestitam, dobili ste 10-ku.";
    }
    echo "<hr>";
//8
    $dan = date("N");
    if($dan == 6 || $dan == 7) {
        echo "Vikend";
    } else {
        echo "Danas je radni dan.";
    }
    echo "<hr>";
//9
    date_default_timezone_set('Europe/Belgrade');
    $vreme = date("H");
    if($vreme < 12) {
        echo "Dobro jutro";
    } elseif($vreme < 18) {
        echo "Dobar dan";
    } else {
        echo "Dobro vece";
    }
    echo "<hr>";
//10
    $d1 = 7;
    $m1 = 5;
    $g1 = 1994;

    $d2 = 3;
    $m2 = 9;
    $g2 = 1998;

    if($g1 < $g2) {
        echo "Datum $d1.$m1.$g1 je raniji";
    } elseif ($g2 < $g1) {
        echo "Datum $d2.$m2.$g2 je raniji";
    } elseif ($m1 < $m2) {
        echo "Datum $d1.$m1.$g1 je raniji";
    } elseif($m2 < $m1) {
        echo "Datum $d2.$m2.$g2 je raniji";
    } elseif($d1 < $d2) {
        echo "Datum $d1.$m1.$g1 je raniji";
    } elseif($d2 < $d1) {
        echo "Datum $d2.$m2.$g2 je raniji";
    } else {
        echo "Datumi su isti";
    }
    echo "<hr>";
//11
    date_default_timezone_set('Europe/Belgrade');
    $vreme = date("H");

    if($vreme < 9 || $vreme >= 17) {
        echo "Firma ne radi";
    } else {
        echo "Firma radi";
    }
    echo "<hr>";
//12
    $lekar1_p = 8;
    $lekar1_k = 12;

    $lekar2_p = 13;
    $lekar2_k = 20;

    if($lekar1_k < $lekar2_p) {
        echo "NE";
    } elseif($lekar2_k < $lekar1_p) {
        echo "NE";
    } else {
        echo "DA";
    }
    echo "<hr>";
//13
    $broj = 21; 
    if($broj % 2 == 0) {
        echo "Broj je paran";
    } else {
        echo "Broj je neparan";
    }
    echo "<hr>";
//14
    $broj = 21; 
    if($broj % 3 == 0) {
        echo "Broj je deljiv sa 3";
    } else {
        echo "Broj nije deljiv sa 3";
    }
    echo "<hr>";
//15
    $broj1 = 120;
    $broj2 = 10;

    if($broj1 < $broj2) {
        echo $broj2 - $broj1;
    } elseif($broj2 < $broj1) {
        echo $broj1 - $broj2;
    } else {
        echo "Brojevi su jednaki";
    }
    echo "<hr>";
//16
    $broj = -20; 
    
    if($broj <= 0) {
        echo $broj - 1;
    } else {
        echo $broj + 1;
    }
    echo "<hr>";
//17
    $a = 100;
    $b = 20;
    $c = -30; 

    $min = $a;
    if($a > $b) {
        $min = $b;
    } 
    if($b > $c) {
        $min = $c;
    }
    $max = $a;
    if($a < $b) {
        $max = $b;
    }
    if($b < $c) {
        $max = $c;
    }
    $sr = $a + $b + $c - ($min + $max);
    echo "Minimalan broj je: $min, srednji broj je: $sr, a maximalan broj je $max";

    echo "<hr>";
//18
    $broj = 20.7;

    if(is_int($broj)) {
        echo "Broj je ceo";
    } else {
        echo "Broj nije ceo";
    }
    echo "<hr>";
//19
    $a = 7;
    $b = 798;
    $c = -77;

    $min = $a; 
    if($a > $b) {
        $min = $b;
    } 
    if($b > $c) {
        $min = $c;
    }
    $max = $a;
    if($a < $b) {
        $max = $b;
    } 
    if($b < $c) {
        $max = $c;
    }
    $sr = $a + $b + $c - ($min + $max);
    echo "Min je: $min, max je: $max i srednji je: $sr"; 
    echo "<hr>";
//20 
    $b1 = 10;
    $b2 = 90;

    if($b1 > $b2) {
        if($b1 % 2 == 0) {
            echo "Broj $b1 je paran";
        } else {
            echo "Broj $b1 nije paran";
        }
    }
    if($b2 > $b1) {
        if($b2 % 2 == 0) {
            echo "Broj $b2 je paran";
        } else {
            echo "Broj $b2 nije paran";
        }
    }
    echo "<hr>";
//21
    $a = 5;
    $b = 20; 
    $c = 220;
    if($a > $b && $a > $c) {
        echo "Broj $a je najevici u nizu";
    } elseif($b > $a && $b > $c) {
        echo "Broj $b je najveci u nizu";
    } else {
        echo "Broj $c je najveci u nizu";
    }
    echo "<hr>";
//22
    $temp = 41;
    if ($temp < (-15) || $temp > 40) {
        echo "Ekstremna temperatura";
    } else {
        echo "Temperatura nije ekstremna";
    }
    echo "<hr>";
//23
    $godina = date("Y");

    if($godina % 4 == 0 && $godina % 100 != 0 && $godina % 400 == 0) {
        echo "Godina je prestupna";
    } else {
        echo "Godina nije prestupna";
    }
    echo "<hr>";
// 24 
    $p_h1 = 8;
    $p_m1 = 30;
    $k_h1 = 15;
    $k_m1 = 30;

    $p_h2 = 12;
    $p_m2 = 15;
    $k_h2 = 17;
    $k_m2 = 0;

    $pocetak1 = $p_h1 * 60 + $p_m1;
    $kraj1 = $k_h1 * 60 + $k_m1;

    $pocetak2 = $p_h2 * 60 + $p_m2;
    $kraj2 = $k_h2 * 60 + $k_m2;

    if($kraj1 > $pocetak2) {
        $poklapanje = $kraj1 - $pocetak2;
        $poklapanje = $poklapanje / 60;
        $poklapanje_sati = floor($poklapanje);
        $poklapanje_minuti = ($poklapanje - $poklapanje_sati) * 60;
        echo "<p>Poklapaju se $poklapanje_sati h i $poklapanje_minuti minuta</p>";
    }

//25 je isti kao 21

//26
    $vreme = date("H");
    $dan = date("N");

    if($vreme < 9 || $vreme >= 20 && $dan < 6) {
        echo "Butik je zatvoren";
    } elseif($vreme < 10 || $vreme >= 18 && $dan > 5) {
        echo "Butik je zatvoren";
    } else {
        echo "Butik je otvoren";
    }
    
?>