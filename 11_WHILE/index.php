<?php
    //While petlja

    /*
        1.Postavite pocetnu vrednost - inicijalizacija
        2. while(uslov)
            2.a. TRUE - Blok naredbi koji se odvija ukoliko je uslov u white petlji ispunjen
            2.b. FALSE - Ne izvrsava se blok naredbi unutar while petlje vec se prelazi na code ispod bloka
    */

    // 1. Zadatak
    // Ispisati brojeve od 1 do 20:
        // a)Svaki u istom redu
        // b)Svaki u novom redu

        // a)
        // $i = 1;
        // while($i <= 20) {
        //     echo "$i ";
        //     $i++;
        // }
        
        // // b)
        // // $i = 1;
        // // while($i <= 20) {
        // //     echo "$i <br/>";
        // //     $i++;
        // }
        //echo "<i>$i</i>";
        //Vrednost $i nakon petlje je 21 

        //Ekvivalentni izrazi za povecavanje za jedan su:
        // $i++;
        // $i +=1;
        //$i = $i + 1;

        //Ekvivalentni izrazi za smanjivanje za jedan su:
        // $i--;
        // $i -=1;
        //$i = $i - 1;

    //2. Zadatak
    //Ispisati brojeve od 20 do 1. 
        // $i = 20;
        // while($i >= 1) {
        //     echo "$i ";
        //     $i --;
        // }
        // echo "<br>";
        //echo "<i>$i</i>";
        // $i ima vrednost 0 nakon izvrsenja ove while petlje
    // 3. Zadatak
    // Ispisati parne brojeve od 1 do 20. 
        // $n = 1;
        // while($n <= 20) {
        //     if($n%2 == 0) {
        //         echo "$n ";
        //     }
        //     $n++;
        // }
        

    // 4. Zadatak
    // Kreirati n paragrafa sa proizvoljnim tekstom i naizmenično ih obojiti u tri različite boje
        // prvi nacin
        // $n = 5;
        // $i = 1;
        // while($i <= $n) {
        //     if($i%3 == 0) {
        //         echo "<p style='color:red;'>Hello $i</p>";
        //     } elseif($i%3 == 1) {
        //         echo "<p style='color:blue;'>Hello $i</p>";
        //     }else {
        //         echo "<p style='color:orange;'>Hello $i</p>";
        //     }
        //     $i++;
        // }
        // //drugi nacin
        // $n = 5;
        // $i = 1;
        // while($i <= $n) {
        //     if($i%3 == 0) {
        //         $boja = "purple";
        //     } elseif($i%3 == 1) {
        //         $boja = "lime";
        //     }else {
        //         $boja = "magenta";
        //     }
        //     echo "<p style='color:$boja;'>Hello $i</p>";
        //     $i++;
        // }
        // treci nacin
        

    // 5. Zadatak 
    //Uradi ga posle
    



    // 6. Zadatak
    // Odrediti sumu brojeva od 1 do 100
    $i = 1;
    $suma = 0;
    while($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";

    $i = 1;
    $suma = 0;
    $n = 95;
    while($i <= $n) {
        $suma += $i;
        $i++;
    } 
    echo "<p>Suma brojeva od 1 do $n je: $suma</p>";

    $n = $pom = 20;
    $suma = 0;
    $m = 540;
    while ($n <= $m) {
        $suma += $n;
        $n++;
    }
    echo "<p>Suma brojeva od $pom do $m je: $suma</p>";

    // 9. Zadatak
    $p = 1;
    $n = $i = 5; 
    $m = 7;

    while($i <= $m) {
        $p *= $i;
        $i++;
    }
    echo "<p>Prizvod brojeva od $n do $m je: $p</p>";

    // 10. Zadatak
    $i = 0;
    $n = 10;
    $m = 200;

?>