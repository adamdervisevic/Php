<?php
    $letovi = array(
        "Rome" => 100,
        "Paris" => 200,
        "Beijing" => 56,
        "Tokyo" => 450,
        "Zagreb" => 30,
        "Seoul" => 300,
        "Moscow" => 100,
        "Antwerp" => 40
    );

    //2
    function maxBrojPutnika($letovi) {
        $maxBroj = array_values($letovi)[0];
        foreach($letovi as $destinacija => $brojPutnika) {
            if($maxBroj < $brojPutnika) {
                $maxBroj = $brojPutnika;
            }
        }return $maxBroj;
    }
    echo maxBrojPutnika($letovi);
    echo "<p></p>";
    
    //3
    function brojMax($letovi) {
        $maxBrojPutnika = maxBrojPutnika($letovi);
        $brojMaxLetova = 0;
        foreach($letovi as $destinacija => $brojPutnika) {
            if($brojPutnika == $maxBrojPutnika){
                $brojMaxLetova++;
            }
        } return $brojMaxLetova;
    }
    echo "<p>Broj letova sa maksimalnim brojem putnika: " . brojMax($letovi);
    echo "<p></p>";

    //4
    function prosek($letovi) {
        $prosek = 0;
        $zbir = 0;
        foreach($letovi as $destinacija => $brojPutnika) {
            $zbir += $brojPutnika;
            $prosek = $zbir / count($letovi);
        } return round($prosek);
    }
    echo prosek($letovi);
    echo "<p></p>";

    //5 
    function isplativ($letovi, $granica) {
        $iznad = 0;
        $ispod = 0;
        foreach($letovi as $brojPutnika) {
            if($brojPutnika >= $granica) {
                $iznad++;
            } else {
                $ispod++;
            }
        }
        if($iznad >= $ispod){
            return true;
        } else {
            return false;
        }
    }
    echo "Dan je bio isplativ za granicu 100: " .(isplativ($letovi, 100)? "Jeste":"Nije");
    echo "<p></p>";

    //6
    function alarmantan($letovi, $granica) {
        foreach($letovi as $brojPutnika) {
            if($brojPutnika < $granica) {
                return true;
            } 
        } return false;
    } 

    echo "Dan je bio alarmantan za granicu 100: " .(alarmantan($letovi, 100)? "Jeste":"Nije");
    echo "<p></p>";

    //7
    function dobreDestinacije($letovi){
        $prosek = prosek($letovi);
        foreach ($letovi as $destinacija => $brojPutnika) {
            if($brojPutnika >= $prosek) {
                echo "<p>$destinacija</p>";
            }
        }
    }
    echo "Dobre destinacije su: "; 
    dobreDestinacije($letovi);
?>