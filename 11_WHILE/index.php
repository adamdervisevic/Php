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
        $i = 1;
        while($i <= 20) {
            echo "$i ";
            $i++;
        }
        
        //b)
        $i = 1;
        while($i <= 20) {
            echo "$i <br/>";
            $i++;
        }
        echo "<i>$i</i>";
        //Vrednost $i nakon petlje je 21 

        //Ekvivalentni izrazi za povecavanje za jedan su:
        $i++;
        $i +=1;
        $i = $i + 1;

        //Ekvivalentni izrazi za smanjivanje za jedan su:
        $i--;
        $i -=1;
        $i = $i - 1;

    //2. Zadatak
    //Ispisati brojeve od 20 do 1. 
        $i = 20;
        while($i >= 1) {
            echo "$i ";
            $i --;
        }
        echo "<br>";
        echo "<i>$i</i>";
        // $i ima vrednost 0 nakon izvrsenja ove while petlje
    // 3. Zadatak
    // Ispisati parne brojeve od 1 do 20. 
        $n = 1;
        while($n <= 20) {
            if($n%2 == 0) {
                echo "$n ";
            }
            $n++;
        }
        

    // 4. Zadatak
    // Kreirati n paragrafa sa proizvoljnim tekstom i naizmenično ih obojiti u tri različite boje
        // prvi nacin
        $n = 5;
        $i = 1;
        while($i <= $n) {
            if($i%3 == 0) {
                echo "<p style='color:red;'>Hello $i</p>";
            } elseif($i%3 == 1) {
                echo "<p style='color:blue;'>Hello $i</p>";
            }else {
                echo "<p style='color:orange;'>Hello $i</p>";
            }
            $i++;
        }
        // //drugi nacin
        $n = 5;
        $i = 1;
        while($i <= $n) {
            if($i%3 == 0) {
                $boja = "purple";
            } elseif($i%3 == 1) {
                $boja = "lime";
            }else {
                $boja = "magenta";
            }
            echo "<p style='color:$boja;'>Hello $i</p>";
            $i++;
        }
        

    // 5. Zadatak 
    //Uradi ga posle
    $i = 1;
    $n = 4;
    while($i <= $n) {
        if($i % 2 ==0) {
            echo "<img src='./slika.jpg' style='border: 2px solid green'>";
        } else {
            echo "<img src='./slika.jpg' style='border: 2px solid yellow'>";
        }
        $i++;
    }

    // 6. Zadatak
    // Odrediti sumu brojeva od 1 do 100
    $i = 1;
    $suma = 0;
    while($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";

    // 7. Zadatak
    $i = 1;
    $suma = 0;
    $n = 95;
    while($i <= $n) {
        $suma += $i;
        $i++;
    } 
    echo "<p>Suma brojeva od 1 do $n je: $suma</p>";

    // 8. Zadatak
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
    $n = $i = 1;
    $m = 200;
    $parni = 0;
    $neparni = 0;
    while ($i <= $m) {
        if($i % 2 == 0) {
            $parni = ($i**2) + $parni;
        }else {
            $neparni = ($i**3) + $neparni;
        }
        $i++;
    }
    echo "<p>Suma parnih je $parni suma neparnih je $neparni</p>";

    // 11.Zadatak
    $n = 0;
    $k = 6;
    $i = 1;
    while($i <= $k) {
        if($k % $i == 0) {
            $n++;
        }
        $i++;
    }
    echo "<p>Broj $k je deljiv $n puta</p>";  
    
    // 12. Zadatak
    $n = 29;
    $i = 1;
    $brojac = 0;
    while($i <= $n) {
        if($n % $i == 0) {
            $brojac++;
        }
        $i++;
    }
    if($brojac == 2) {
        echo "<p>Broj $n je prost</p>";
    } else {
        echo "<p>Broj $n nije prost</p>";
    }

    //Drugi nacin
    $k = 6;
    $i = 2;
    $prost = true;
    while ($i < $k) {
        if($k% $i == 0){
            $prost = false;
            break;
        }
        $i++;
    }
    if($prost) {
        echo "<p>Broj $k jeste prost broj.</p>";
    } else {
        echo "<p>Broj $k nije prost broj.</p>";
    }
    //13. Zadatak
    
    $i = 20;
    $pro = 1;
    while($i >= 1) {
        $pro = $pro * $i;
        if($pro > 10000){
            break;
        }
        $i--;
    } 
    echo "<p>Poslednji broj koji je ucestovao je: <span style='color:red;'>$i</span></p>";
    echo "<p>Prozivod je: <span style='color:green;'>$pro</span></p>";

    //14. Zadatak
    $b1 = 7;
    $b2 = 90;
    $br = 1;

    if($b1 < $b2) {
        $br = $b1;
        while($br < $b2) {
            $br = $br * $b1;
        }
        echo "$br";
    } else {
        echo "<p>Greska</p>";
}
?>
