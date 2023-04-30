<?php
    // 1. Zadatak
    $dan = 5;
    switch($dan) {
        case 1:
            echo "Ponedeljak";
            break;
        case 2:
            echo "Utorak";
            break;
        case 3:
            echo "Sreda";
            break; 
        case 4:
            echo "Cetvrtak";
            break;       
        case 5:
            echo "Petak";
            break; 
        case 6:
            echo "Subota";
            break; 
        case 7:
            echo "Nedelja";
            break; 
        default:
            echo "Unesite broj od 1 do 7";
        }
    echo "<hr>";

    // 2. Zadatak
    $ocena = 5;
    switch($ocena) {
        case 1:
            echo "Nedovoljan";
            break;
        case 2:
            echo "Dovoljan";
            break;
        case 3:
            echo "Dobar";
            break; 
        case 4:
            echo "Vrlodobar";
            break;       
        case 5:
            echo "Odlican";
            break; 
        default:
            echo "Unesite ocenu od 1 do 5";
        }

        echo "<hr>";
    // 3. Zadatak
    $paran_broj = 4;
    switch($paran_broj) {
        case 2:
            echo "Dvojka";
            break;
        case 4:
            echo "Cetvorka";
            break;
        case 6:
            echo "Sestica";
            break; 
        case 8:
            echo "Osmica";
            break;       
        default:
            echo "Unso je pogresan!";
        }
        echo "<hr>";   
    // 4. Zadatak
    $broj_1 = 404;
    $broj_2 = 20;
    $slovo = "r";
    switch($slovo) {
        case "m":
            echo $broj_1 * $broj_2;
            break;
        case "d":
            echo $broj_1 / $broj_2;
            break;
        case "s":
            echo $broj_1 + $broj_2;
            break;
        case "o":
            echo $broj_1 - $broj_2;
            break;    
        default: 
        echo "Uneli ste pogresno slovo";
    }

    echo "<hr>";
    // 5. Zadatak
    $dan = date("N");
    switch($dan){
        case 1:
            echo "Ostalo je jos 5 dana do vikenda";
            break;
        case 2:
            echo "Ostalo je jos 4 dana do vikenda";
            break;  
        case 3:
            echo "Ostalo je jos 3 dana do vikenda";
            break; 
        case 4: 
            echo "Ostalo je jos 2 dana do vikenda";
            break;
        case 5: 
            echo "Ostao je jos 1 dan do vikenda";
            break;
        case 6:
            echo "Vikend!";
            break;
        case 7:
            echo "Vikend";
            break;
        default: 
        echo "Greska";
    }
        echo "<hr>";

    // 6. Zadatak
    $mesec = date("m");
    switch($mesec) {
        case 1:
            echo "Januar";
            break;
        case 2:
            echo "Februar";
            break;
        case 3:
            echo "Mart";
            break;  
        case 4:
            echo "April";
            break; 
        case 5: 
            echo "Maj";
            break;
        case 6: 
            echo "Jun";
            break;
        case 7:
            echo "Jul";
            break;
        case 8:
            echo "Avgust";
            break;  
        case 9:
            echo "Septembar";
            break; 
        case 10: 
            echo "Oktobar";
            break;
        case 11: 
            echo "Novembar";
            break;
        case 12:
            echo "Decembar";
            break;
        default:
        echo "Greska";
    }
    echo "<hr>";
    // 7. Zadatak
    $mesec = date("m");
    $godina = date("Y");
    switch($mesec) {
        case 2:
            $februar = 28;
            if(($godina % 4 == 0 && $godina % 100 != 0) || ($godina % 400 == 0)) {
                $februar = 29;
            }
            echo "Februar ima $februar dana";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "Ovaj mesec ima 30 dana";
            break;
        default: 
        echo "Ovaj mesec ima 31. dan";
    }
    echo "<hr>";
    // 8. Zadatak
    $color = "green";
    switch($color) {
        case 'blue': 
            echo "<p style=\"color: blue\";>Paragraf</p>";
            break;
        case 'red':
            echo "<p style=\"color: red\";>Paragraf</p>";
            break;
        case 'green':
            echo "<p style=\"color: green\";>Paragraf</p>";
            break;
        default:
        echo "<p style=\"color: yellow\";>Paragraf</p>";
    }
?>