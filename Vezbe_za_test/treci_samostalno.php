<?php
    $dan = array(
        "datum" => 2023/05/17,
        "kisa" => true,
        "sunce" => false,
        "oblacno" => true,
        "temperature" => array(8, 10, 12, 17, 12, 9)
    );
    //15
    function prosecnaTemp($dan) {
        $temperature = $dan["temperature"];
        $suma = 0;
        foreach($temperature as $temp) {
            $suma += $temp;
        }
        $prosek = $suma / count($temperature);
        return round($prosek, 2);
    }
    
    echo "Prosecna temperatura danas je bila " . prosecnaTemp($dan);
    echo "<hr>";

    //16
    function brojNatprosecnoMerenja($dan){
        $temperature = $dan["temperature"];
        $natprosecna = 0;
        $prosek = prosecnaTemp($dan);

        foreach($temperature as $temp) {
            if($temp > $prosek) {
                $natprosecna++;
            } 
        } return $natprosecna;
    }
    echo "Broj natprosecnih merenja su bila " . brojNatprosecnoMerenja($dan);
    echo "<hr>";

    //17
    function brojMaxMerenja($dan) {
        $maxTemp = 0;
        $temperature = $dan["temperature"];
        foreach($dan as $temp) {
            if($temperature > $maxTemp) {
                $maxTemp++;
            } 
        } return $maxTemp;
    } 
    echo brojMaxMerenja($dan);
    echo "<hr>";

    //18
    function brojMerenjaIzmedju($dan, $min, $max) {
        $brojac = 0;
        foreach ($dan as $temperature) {
            if ($temperature > $min && $temperature < $max) {
                $brojac++;
            }
        }
        return $brojac;
    }
    $min = 9;
    $max = 16;
    echo brojMerenjaIzmedju($dan["temperature"], $min, $max);
    echo "<hr>";

    //19
    function natprosecnoTopao($dan){
        $prosek = prosecnaTemp($dan);
        $temperature = $dan["temperature"];
        
        $iznad = 0;
        $ispod = 0;

        foreach($temperature as $temp) {
            if($temp > $prosek){
                $iznad++;
            } else {
                $ispod++;
            }
        }
        if ($iznad > $ispod) {
            return true;
        } else {
            return false;
        }
    }
    echo natprosecnoTopao($dan) ? "<p>Dan je natprosecno topao.</p>" : "<p>Dan je ispod proseka topao.</p>";
    echo "<hr>";

    //20
    function leden($dan) {
        $temperature = $dan["temperature"];
        foreach($temperature as $temp) {
            if($temp > 0){
                return false;
            } else {
                return true;
            }
        }
    }
    echo "Dan je bio leden: " . (leden($dan) ? "Jeste." : "Nije.");
    echo "<hr>";

    //21
    function tropski($dan) {
        $temperature = $dan["temperature"];
        $tropskiDan = false;

        foreach($temperature as $temp) {
            if($temp >= 24) {
                $tropskiDan = true;
                break;
            } 
        } return $tropskiDan;
    }
    echo "Dan je bio tropski: " . (tropski($dan) ? "Jeste." : "Nije.");
    echo "<hr>";

    //22
    function nepovoljan($dan) {
        if (count($dan) < 2) {
            return false;
        }
        
        for ($i = 1; $i < count($dan); $i++) {
            if (($dan["temperature"][$i] - $dan["temperature"][$i-1]) > 8) {
                return true;
            } else {
                return false;
            }
        }
        
        
    }
    echo "Dan je bio nepovoljan: " . (nepovoljan($dan) ? "Jeste." : "Nije.");
    echo "<hr>";

    //23
    function neuobicajen($dan){
            $temperature = $dan["temperature"];
            foreach($temperature as $temp) {
            if(($dan["kisa"] && $temp < -5) || ($dan["oblacno"] && $temp > 25) || ($dan["kisa"] && $dan["oblacno"] && $dan["sunce"])) {
                return true;
            } else {
                return false;
            }
        }
    }
    echo "Dan je bio neuobicajen: " . (neuobicajen($dan) ? "Jeste." : "Nije.");
?>