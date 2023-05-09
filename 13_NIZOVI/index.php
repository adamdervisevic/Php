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
    // echo "<p>Prvi element u nizu je: $cars[7]</p>"; // izbacice gresku zato sto ovo ne postoji

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
    echo "<hr>";
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
    echo "<p>Najveci element ima vrednost $maks, a index njegovog prvog pojavljivanja je $indexMax</p>";
    echo "<hr>";
    // 7. Zadatak
    /* NETACAN PRISTUP
    $brojevi = [1, 2, 15];
    
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        $zbir += $brojevi[$i];
        $arsr = $zbir / count($brojevi);
        if($brojevi[$i] > $arsr) {
            $broj++;
        }
    }
    echo "Broj brojeva vecih od srednje vrednosti niza je: $broj";
    echo "<hr>";
    */
    $brojevi = [1, 2, 15];
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        $zbir += $brojevi[$i];
    }
    $arsr = $zbir / count($brojevi);
    for($i = 0; $i < count($brojevi); $i++){
        if($brojevi[$i] > $arsr) {
            $broj++;
        }
    }
    echo "Broj brojeva vecih od srednje vrednosti niza je: $broj";
    echo "<hr>";

    // 8. Zadatak
    $brojevi = [1, 2, 15];
    $zbir = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        if($brojevi[$i] > 0) {
            $zbir += $brojevi[$i];
        }
    }
    echo "Zbir pozitivnih elemenata niza je: $zbir";
    echo "<hr>";
    // Bonus zadatak
    //Izracunati srednju vrednost parnih elemenata celobrojnog niza
    $brojevi = [10, 9, 15, 50];
    $zbir = 0;
    $broj = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        if($brojevi[$i] % 2 == 0) {
            $zbir += $brojevi[$i];
            $broj++;
        }
    }
    if($broj != 0){
        $srvr = $zbir / $broj;
    } else {
        $srvr = 0;
    }
    echo "Srednja vrednost parnih elemenata u nizu jednaka je: $srvr";
    echo "<hr>";

    // 9. Zadatak
    $parni = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        if($brojevi[$i] % 2 == 0) {
            $parni++;
        }
    }
    echo "Broj parnih brojeva u nizu je: $parni";
    echo "<hr>";

    // 10. Zadatak
    $brojevi = [4, 2, 38, 12];
    $sum = 0;
    for($i = 0; $i < count($brojevi); $i+=2){
        $sum += $brojevi[$i];
    }
    echo "Suma elementa u nizu sa parnim indexom je: $sum";
    echo "<hr>";

    //11. Zadatak
    for($i = 0; $i < count($brojevi); $i++) {
        $brojevi[$i] *= -1;
    }
    var_dump($brojevi);

    echo "<hr>";
    //12. Zadatak
    $brojevi = [4, 2, 38, 12, 43, 54];
    for($i = 0; $i < count($brojevi); $i++) {
        if($brojevi[$i] % 2 != 0 && $i % 2 == 0) {
            $brojevi[$i] *= -1;
        }
    }
    var_dump($brojevi);
    echo "<hr>";
    
    //13. Zadatak
    $brojac = 0;
    for($i = 0; $i < count($brojevi); $i++) {
        if($i % 2 != 0 && $brojevi[$i] % 2 == 0) {
            $brojac++;
        }
    }
    echo "$brojac";
    echo "<hr>";
    
    //14. Zadatak
    $imena = ["Stefan", "Aleksandar", "Adam", "Dunja", "Milijana"];

    for($i = 0; $i < count($imena); $i++) {
        $ime = $imena[$i];
        $duzina = strlen($ime);
        echo "<p>Duzina stringa $ime je $duzina</p>";
    }
    echo "<hr>";
    //15. Zadatak
    $stringMaxDuzine = $imena[0];
    $maxDuzina = strlen($imena[0]);

    for($i = 1; $i < count($imena); $i++){
        if(strlen($imena[$i]) > $maxDuzina){
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }
    echo "Element niza sa maksimalnom duzino je: $stringMaxDuzine";

    //16. Zadatak
    echo "<hr>";
    //17. Zadatak
    $imena = ["Uros", "Djorjde", "Stefan", "Beti"];
    $brojSadrziA = 0;
    for($i = 0; $i < count($imena); $i++) {
        if(strpos($imena[$i], "a") !== false) {
            $brojSadrziA++;
        }
    }
    echo "Broj stringova koji sadrze slovo 'a' je $brojSadrziA";

    //18. Zadatak
    // uradi do 22. kuci





?>