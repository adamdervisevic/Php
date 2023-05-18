<?php
    $letovi = array(
        "Moskva" => 200,
        "Rim" => 150,
        "Pariz" => 100,
        "Sarajevo" => 60,
        "Zagreb" => 90,
        "Beograd" => 100,
        "Podgorica" => 200,
        "Amsterdam" => 350,
        "Bukurest" => 200,
        "Peking" => 500,
        "Tokio" => 450,
        "Madrid" => 520
    );

    //2
    function maxBrojPutnika($letovi) {
        $max = 0;
        foreach($letovi as $brojPutnika) {
            if($brojPutnika >= $max) {
                $max = $brojPutnika;
            }
        } return $max;
    }
    echo maxBrojPutnika($letovi);
    echo "<hr>";

    //3
    function brojMax($letovi) {
        $brojLetovaMax = 0;
        $maxBroj = maxBrojPutnika($letovi);
        foreach($letovi as $brojPutnika) {
            if($brojPutnika == $maxBroj) {
                $brojLetovaMax++;
            }
        } return $brojLetovaMax;
    }
    echo brojMax($letovi);
    echo "<hr>";

    //4
    function prosek($letovi) {
        $prosek = 0;
        $zbir = 0;
        foreach($letovi as $brojPutnika) {
            $zbir += $brojPutnika;
            $prosek = $zbir / count($letovi);
        } return round($prosek);
    }
    echo prosek($letovi);
    echo "<hr>";

    //5
    function isplativ($letovi, $granica) {
        $iznad = 0;
        $ispod = 0;
        foreach ($letovi as $brojPutnika){
            if($brojPutnika >= $granica) {
                return true;
            } else {
                return false;
            }
        }
        if($iznad > $ispod) {
            return true;
        } else {
            return false;
        }
    }
    echo "Dan je bio isplativ za granicu 100: " .(isplativ($letovi, 100) ? "Jeste":"Nije");
    echo "<hr>";

    //6
    function alarmantan($letovi, $granica) {
        foreach($letovi as $brojPutnika) {
            if($granica > $brojPutnika) {
                return true;
            } else {
                false;
            }
        }
    }
    echo "Dan je bio alarmantan za granicu 100: " .(alarmantan($letovi, 50)? "Jeste":"Nije");
    echo "<hr>";

    //7
    function dobreDestinacije($letovi) {
        $prosek = prosek($letovi);
        foreach($letovi as $destinacija => $brojPutnika) {
            if($brojPutnika >= $prosek) {
                echo "<p>$destinacija</p>";
            }
        } 
    }
    echo "Dobre destinacije su: "; 
    dobreDestinacije($letovi);
?>