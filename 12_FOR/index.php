<?php
    // 1. Zadatak
    for($i = 1; $i <= 20; $i++) {
        echo "$i ";
    }
    echo "<br>";
    // 2. Zadatak
    for($i = 20; $i >= 1; $i--) {
        echo "$i ";
    }
    echo "<br>";
    // 3. Zadatak
    for($i = 2; $i <= 20; $i += 2) {
        echo "$i ";
    }
    echo "<br>";
    // 4. Zadatak
    for($i = 5; $i <= 15; $i++) {
        echo $i * 2;
    }
    echo "<br>";
    // 5. Zadatak
    $i = $pom = 1;
    $m = 100;
    $sum = 0;
    for($i = $i; $i <= $m; $i++) {
        $sum += $i;
    }
    echo "<p>Suma brojeva od $pom do $m je: $sum</p>";

    // 6. Zadatak
    $i = $pom = 1;
    $n = 87;
    $suma = 0;
    for($i = $i; $i <= $n; $i++) {
        $suma += $i;
    }
    echo "<p>Suma brojeva od $pom do $n je: $suma</p>";

    // 7. Zadatak
    $n = $pom = 20;
    $m = 300;
    $sum = 0;
    for($i = $n; $n <= $m; $n++) {
        $sum += $n;
    }
    echo "<p>Suma brojeva od $pom do $m je: $sum</p>";

    // 8. Zadatak
    $p = 1;
    $n = $i = 20;
    $m = 28;
    for($n = 20; $n <= $m;  $n++) {
        $sum *= $n;
    }
    echo "<p>Proizvod brojeva od $i do $m je $sum</p>";

    // 9. Zadatak 
    $sum = 0;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum = ($i * $i) + $sum; // $sum += $i * $i // $sum += $i**2
    }
    echo "<p>Suma kvadrata od $n do $m je $sum</p>";
    
    
    // 10. Zadatak
    // $n = 7;
    // for($i = 1; $i < $n; $i++) {
    //     if($i % 3 == 1) {
    //         echo "<img src = 'slike/1.png'>";
    //     } elseif($i % 3 == 2) {
    //         echo "<img src = 'slike/2.png'>";
    //     }else {
    //         echo "<img src = 'slike/3.png'>";
    //     }
    // }
    // echo "<hr>";

    // // drugi nacin
    // $n = 7;
    // for($i=0; $i<=$n; $i++) {
    //     $ost = $i % 3;
    //     if($ost == 0) {
    //         $ost = 3;
    //     }
    //     echo "<img src = 'slike/$ost.png'>";
    // }
    // echo "<hr>";
    // $n = 4;
    // for($i=0; $i<=$n;$i++) {
    //     for($j=1; $j<=3; $j++){
    //         echo "<img src = 'slike/$j.png'>"; 
    //     }
    //     echo "<br/>";
    //     // 4 reda za 3 slike
    // }
    echo "<hr>";

    // 11. Zadatak / Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.
    
    $zbir = 0;
    for($i = 1; $i <= 30; $i++) {
        if($i % 9 == 0) {
            $zbir += $i;
            
        }
    }
    echo "<p>$zbir</p>";


    // 12. Zadatak / Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100.
    $p = 1;

    for($i=20; $i <= 100; $i++) {
        if($i%11==0) {
            $p*= $i;
        }
    } echo "<p>$p</p>";

    // 13. Zadatak
    $brojac = 0;
    for($i=5; $i<=150; $i++) {
        if($i%13 == 0) {
            $brojac += 1;
        }
    } echo "<p>$brojac</p>";

    // 14. Zadatak
    $n = 5;
    $m = 9;
    $zbir = 0;
    $br = 0;
    for($i=5; $i<=9; $i++){
        $zbir += $i;
        $br++;
    }
    echo "<p>Zbir brojeva do $n do $m je $zbir, dok je broj brojeva $br</p>";
    $arsr = $zbir / $br;
    echo "<p>Aritmeticka sredina je $arsr</p>";

    // 15. Zadatak
    
?>