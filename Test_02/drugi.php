<?php
    $voca = array(
        array("naziv" => "jabuke", "cena" => 100, "kolicina" => 30),
        array("naziv" => "kruske", "cena" => 200, "kolicina" => 20),
        array("naziv" => "banane", "cena" => 150, "kolicina" => 80),
        array("naziv" => "smokve", "cena" => 700, "kolicina" => 10),
    );

    function stanje($cena, $kolicina) {
        $kolicina = $voca[$i]["kolicina"];
        $cena = $voca[$i]["cena"];
        
        for($i = 0; $i < count($voca["kolicina"]); $i++) {
            if($kolicina[$i] == 0){
                echo "<p style='color:red'>Nemamo" . $naziv[$i] . "na stanju</p>";
            } else {
                echo "<p stlye='color:green'>Imamo " . $naziv[$i]. " na stanju.</p>";
            }
        }
    }
    // echo "Imamo na stanju" . (stanje($cena, $kolicina))? "Da" : "Ne";
    echo "<hr>";

    function prvoPonudi($cena, $kolicina){
        $max = 0;
        $kolicina = ($voca["cena"] * $voca["kolicina"]);
        foreach($voca as $kolicina){
            if($kolicina >= $max) {
                $max = $kolicina;
            } $max++;
        } return $max;
    }
    

    $kupovina = array("naziv" => "jabuke", "kolicina" => 30, "naziv" => "banane", "kolicina" => 20);
    function vrednostKupovine($cena, $kolicina, $kupovina) {
        $cena = 0;
        if(!isset($kupovina["naziv"])) {
            $kupovina["naziv"] = 0;
        } $kupovina["naziv"]++;
    }

    if($kupovina["naziv"] == $voca["naziv"]) {
        $cena++;
    } return $cena;
    echo vrednostKupovine($cena, $kolicina, $kupovina);
?>