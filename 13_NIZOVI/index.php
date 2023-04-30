<?php 

    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    // Sa nizovima
    $cars = array("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
    // Elementi ovog niza su: "BMW", "Volvo", "Toyota"
    // Indeksi elemenata ovog niza su: 0, 1, 2

    var_dump($cars);
    var_dump($car1);

    echo "<hr>";

    echo "$car1";
    echo "$cars";

    echo "<hr>";

    print_r($cars);

    echo "<hr>";

    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];

    echo "$prviElement, $drugiElement, $treciElement";
    echo "<p>Prvi element u nizu je: $cars[0]</p>";
    echo "<p>Prvi element u nizu je: $cars[7]</p>"; // izbacice gresku zato sto ovo ne postoji

    echo "<hr>";

    // Izmena elemenata
    $cars[1] = "Peugeot";
    print_r($cars);

    echo "<hr>";

    $cars[30] = "Audi";
    print_r($cars);


    ////////////

    echo "<hr>";

    $polaznici = array();
    $polaznici[] = "Aleksandar";
    $polaznici[] = "Uros";
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    print_r($polaznici);

    echo "<hr>";

    $duzina = count($polaznici); // prebrojava koliko polaznika ima u nizu
    echo "<p>U nizu ima $duzina polaznika</p>";

    for($i=0; $i<$duzina; $i++) {
        echo "<p>$polaznici[$i]</p>";
    }

    echo "<hr>";

    // 2. Zadatak

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0; 
    for($i=0; $i < count($brojevi); $i++) {
        $suma += $brojevi[$i];
    }
    echo "<p>Suma elemenata je: $suma</p>";

    // Ugradjena funkcija 
    $zbir = array_sum($brojevi);
    echo "<p>Zbir elemenata niza je: $zbir</p>";

    // 3. Zadatak
    $brElemenata = count($brojevi);
    $arsr = $zbir / $brElemenata;
    echo "<p>Aritmeticka sredina je: $arsr</p>";

    // Dopuna 
    // if($brElemenata == 0) {
    //     echo "<p>Prazan niz - aritmeticka sredina je 0</p>";
    // } else {
    //     $arsr = $zbir / $brElemenata;
    //     echo "<p>Aritmeticka sredina je: $arsr</p>";
    // }

    // // Dopuna 2.
    // if($brElemenata == array()) {
    //     echo "<p>Prazan niz - aritmeticka sredina je 0</p>";
    // } else {
    //     $arsr = $zbir / $brElemenata;
    //     echo "<p>Aritmeticka sredina je: $arsr</p>";
    // }

    // 4. Zadatak
    
    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $maks = $brojevi[0];
    for($i=0; $i <count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najevic element ovog niza je $maks</p>";

    // 6. Zadatak
    $brojevi = [5, 14, -4, 0, 11, -7, 91];

    $maks = $brojevi[0];
    $indexMax = 0;
    for($i=0; $i<count($brojevi); $i++) {
        $treciElement = $brojevi[$i];
        if($treciElement > $maks) {
            $maks = $trenutniElement;
            $indexMax = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a index njegovog prvog pojavljivanja je $indexMax</p>"
?>