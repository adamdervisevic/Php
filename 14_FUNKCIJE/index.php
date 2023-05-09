<?php
    // function mojaFunkcija() {
    //     echo "<p>Moja prva funkcija</p>";
    // }

    // mojaFunkcija();
    

    // function mojaFunkcija2($tekst) {
    //     $b = "nova promenljiva";
    //     // global $c;
    //     echo "<p>Funkcija sa parametrnom $tekst i $b</p>";
    // }
    // mojaFunkcija2("1. nacin");
    // $a = "2. nacin";
    // $c = "globalni";
    // mojaFunkcija2($a);
    // //echo $b; ovo ne moze zato sto je lokalno
    
    // mojaFunkcija2($a);
    // $b = "van f-je";
    // echo "$b";

    // function ispisImena($ime, $prezime) {
    //     echo "<p>Ime i prezime je: $ime $prezime</p>";
    // }
    // ispisImena("Petar", "Petrovic");
    // $i = "Lazar";
    // $p = "Lazic";
    // ispisImena($i, $p);

    // function ispisImena2($ime, $prezime = null, $godine) {
    //     echo "Ime je: $ime;
    //     if($prezime) {
    //         echo " a prezime je: $prezime";
    //     }
    //     echo " a ima godina $godine";
    // } ovde nesto fali, pregledaj code sa casa
    
    
    // Zadatak 1
    function neparan($broj){
        echo "<p>Pocetak f-je</p>";
        $rez = true;
        if($broj % 2 == 0) {
            $rez = false;
        }
        echo "<p>Kraj f-je</p>";
        return $rez;
    }

    $a = 17;
    if(neparan($a)) {
        echo "<p>Broj $a je neparan</p>";
    } else {
        echo "<p>Broj $a je paran</p>";
    }
    echo "<hr>";
    // Zadatak 2
    function maks2($a, $b){
        if($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }

    $broj1 = 150;
    $broj2 = 45;
    $veci = maks2($broj1, $broj2);
    echo "<p>Veci od brojeva $broj1 i $broj2 je $veci</p>";

    function maks4($a, $b, $c, $d){
        // $maksAB = maks2($a, $b);
        // $maksCD = maks2($c, $d);
        // $maks = maks2($maksAB, $maksCD);
        // return $maks;
        return maks2(maks2($a, $b), maks2($c, $d));
    }

    $b1 = 10;
    $b2 = 25;
    $b3 = 0;
    $b4 = 10;
    $r = maks4($b1, $b2, $b3, $b4);
    echo "<p>Maksimumi od brojeva $b1, $b2, $b3, $b4 je: $r</p>";

    echo "<hr>";
    //Zadatak 3
    
    function slika($url){
        echo "<img src='$url'>";
    }
    // slika("https://darko.topalski.com/wp-content/uploads/2021/02/Umetnicka-slika-Petao-30x40cm-Ulje-na-platnu-umetnik-Darko-TOPALSKI.jpg");

    echo "<hr>";
    //Zadatak 4
    function obojenaRec($boja, $tekst) {
        echo "<p style='color: $boja'>$tekst</p>";
    }

    obojenaRec("red", "Ovo je tekst crvene boje");
    obojenaRec("blue", "Ovo je tekst plave boje");

    echo "<hr>";
    // Zadatak 5
    
    function recenica1(){
        for($i = 10; $i <= (10+4*5); $i+=5){
            echo "<p style='font-size: $i'>Recenica</p>";
        }
    }
    recenica1();

    echo "<hr>";
    // Zadatak 6
    //Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.

    function recenica2($font) {
        echo "<p style = 'font-size: $font;'>Neka recenica</p>";
    }
    
    recenica2(10);
    recenica2(50);
    recenica2(20);
    recenica2(40);
    recenica2(25);
    

    echo "<hr>";
    // Zadatak 8
    function aritmetickaCifre($n, $m) {
        $zbir = 0;
        $nBroj = 0;
        for($i = $n; $i <= $m; $i++) {
            if($i % 10 == 3) {
                $zbir += $i;
                $nBroj++;
            }
        }
        if($nBroj) {
            return $zbir/$nBroj;
        } else {
            return "<p>Nema brojeva koji zadovoljvaju uslov</p>";
        }
    }
    echo aritmetickaCifre(5, 35);


    // Zadatak 10
    $niz = array(2, 4, 5, 10);

    // for($i = 0; $i < count($niz); $i++) {
    //     if(neparan($niz[$i])) {
    //         echo "<p>. $niz[$i] .</p>";
    //     }
    // }
    // foreach ($niz as $v) {
    //     if(neparan($v)) {
    //         echo "<p>". $v . "</p>";
    //     }
    // }

    // //Zadatak 11

    // function brojNeparnih($niz){
    //     $brojac = 0;
    //     for($i = 0; $i < count($niz); $i++) {
    //         if(neparan($niz[$i])) {
    //             $brjac++;
    //         } 
    //     }
    // }
    // brojNeparnih($niz);








?>