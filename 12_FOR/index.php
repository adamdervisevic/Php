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
?>