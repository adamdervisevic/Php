<?php
    $ocene = [10, 9, 10, 10, 10, 10, 9, 9, 9, 9, 9, 9];

    
    function prosecna_ocena($ocene) {
        $zbir = 0;
        $prosek = 0;
        for($i = 0; $i < count($ocene); $i++) {
            $zbir += $ocene[$i];
        }
        return round($prosek = $zbir / count($ocene), 2);
    } 
    echo "<p>Prosecna ocena studenta je: " . prosecna_ocena($ocene). "</p>";

    function maximalna_ocena($ocene) {
        $max = $ocene[0];
        for($i = 0; $i < count($ocene); $i++) {
            if($max < $ocene[$i]){
                $max = $ocene[$i];
            }
        } return $max;
    }
    echo "<p>Maksimalna ocena studenta u toku studiranja je: " . maximalna_ocena($ocene). "</p>";

    function broj_predmeta_max($ocene) {
        $broj_max = 0;
        $max = maximalna_ocena($ocene);
        for($i = 0; $i < count($ocene); $i++) {
            if($max == $ocene[$i]) {
                $max = $ocene[$i];
                $broj_max++;
            }
        } return $broj_max;
    }
    echo "<p>Broj predmeta na kojima je student dobio maximalnu ocenu je : " . broj_predmeta_max($ocene). "</p>";

    function student_generacije($ocene) {
        $devetke = 0;
        $desetke = 0;
        for($i = 0; $i < count($ocene); $i++) {
            if($ocene[$i] == 9) {
                $devetke++;
            }
        }
        for($i = 0; $i < count($ocene); $i++) {
            if($ocene[$i] == 10) {
                $desetke++;
            }
        }
        for($i = 0; $i < count($ocene); $i++) {
            if($ocene[$i] < 9) {
                return false;
            }
        }
        for($i = 0; $i < count($ocene); $i++) {
            if($devetke > $desetke) {
                return false;
            } else {
                return true;
            }
        }
    }

    echo "<p>Student je kandidat za studenta generacije: " . (student_generacije($ocene)? "Jeste":"Nije</p>");


    function max_duzina($ocene){
        $max = maximalna_ocena($ocene);
        $br = 0;
        $maxNiz = 0;
        for($i = 0; $i < count($ocene); $i++){
            if($ocene[$i] == $max){
                $br++;
                if($br > $maxNiz){
                    $maxNiz = $br;
                }
            }
            else{
                $br=0;
            }
        }
        return $maxNiz;
    }

    echo "Maksimalna duzina niza u kojoj je student dobijao maksimalnu ocenu je: " . max_duzina($ocene) . ".";

    //Drugi zadatak
    $student = [
        ["predmet" => "Hemija", "datum" => "2022/05/09", "ocena" => 7],
        ["predmet" => "Matematika", "datum" => "2021/05/13", "ocena" => 10],
        ["predmet" => "Istorija", "datum" => "2021/02/19", "ocena" => 6],
        ["predmet" => "Engleski jezik", "datum" => "2023/10/04", "ocena" => 8],
        ["predmet" => "Mehanika", "datum" => "2022/07/08", "ocena" => 10],
        ["predmet" => "Geografija", "datum" => "2022/01/21", "ocena" => 10],
    ];

    function maximalnaOcena($student) {
        $max = $student[0]["ocena"]; // 7
        foreach($student as $ocena) {
            if($max < $ocena["ocena"]) {
                $max = $ocena["ocena"];
            } 
        } return $max;
    } 

    echo "<p>Maksimalna ocena koju je student dobio u toku studiranja je: " . maximalnaOcena($student) . "</p>";



    function kandidat($student) {
        $desetke = 0;
        $devetke = 0;

        foreach($student as $ocena){
            if($ocena["ocena"] < 9) {
                return false;
            } 
            if($ocena["ocena"] == 9) {
                return $devetke++;
            } elseif($ocena["ocena"] == 10) {
                return $desetke++;
            } 
        }
        if($desetke < $devetke) {
            return false;
        } else {
            return true;
        }
    }
    
    echo "<p>Student je kandidat za studenta generacije: " . (kandidat($student)? "Jeste":"Nije</p>");

    function godinaPolaganja($student, $godina) {
        foreach ($student as $ispit) {
            $datum = $ispit['datum'];
            $predmet = $ispit['predmet'];
            $godinaPolaganja = substr($datum, 0, 4);
    
            if ($godinaPolaganja == $godina) {
                echo "Student je polagao predmet '$predmet' u godini $godina.<br>";
            }
        }
    }
    godinaPolaganja($student, '2022');

    function prosek($student, $godina) {
        $zbir = 0;
        foreach($student as $ocena => $br) {
            $zbir += $br;
        }
        return $zbir / count($student);
    }
    // prosek($student, 2023);

    





?>
