<?php 
    $brojStrana = [500, 200, 330, 400, 120];
    $cena = [5000, 3500, 1200, 900, 600];

    //PROLAZAK
    // for($i = 0; $i < count($brojStrana); $i++) {

    // }
    // foreach($brojStrana as $brS){

    // }
    // $i = 0;
    // while($i<count($brojStrana)) {
    //     $i++;
    // }
    
    //Uzimanje vrednosti elemenata
    // $brS = $brojStrana[0]; //Ovo vraca 500
    // $brS2 = $brojStrana[2];

    function maxProsek() {
        $max = $cena[0]/$brojStrana[0];
        for($i = 1; $i < count($brojStrana); $i++) {
            $t = $cena[$i]/$brojStrana[$i];
            if($max < $t) {
                $max = $t;
            }
        }
        return $max;
    }

    $brojStranaA = ["knjiga1" => 500, "knjiga2" => 200, "knjiga3" => 330, "knjiga4" => 400, "knjiga5" => 120];
    $cenaA = ["knjiga1" => 5000, "knjiga2" => 3500, "knjiga3" => 1200, "knjiga4" => 900, "knjiga5" => 600];

    function maxProsekA(){
        $max = 0;
        foreach($brojStranaA as $k => $v){
            $t = $cenaA[$k] / $v;
            if($max < $t) {
                $max = $t;
            }
        }
    }

    





?>