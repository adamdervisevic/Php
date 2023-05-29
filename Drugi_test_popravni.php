<?php

    $tim = [
        ["ime" => "Marko Markovic", "datum" => "1994/05/03", "visina" => 190],
        ["ime" => "Lazar Lazic", "datum" => "1999/12/13", "visina" => 174],
        ["ime" => "Dusan Todorovic", "datum" => "1992/09/02", "visina" => 189],
        ["ime" => "Aleksandar Mitrovic", "datum" => "2000/05/23", "visina" => 159],
        ["ime" => "Mihajlo Stankovic", "datum" => "1998/02/18", "visina" => 200],
        ["ime" => "Nemanja Filipovic", "datum" => "2001/08/12", "visina" => 210]
    ];
    //prvi
    function prosecnaVisina($tim) {
        $zbir = 0;
        $prosek = 0;

        foreach($tim as $igrac) {
            $visina = $igrac["visina"];
            $zbir += $visina;
        } return $prosek = $zbir / count($tim);
    }

    echo "<p>Prosecna visina u timu je: " .prosecnaVisina($tim). "cm.</p>";

    //drugi
    function imeNajbliziProsek($tim, $boja) {

        $prosek = prosecnaVisina($tim);
        $najblizaRazlika = PHP_INT_MAX;

        foreach($tim as $igrac) {
            $visina = $igrac["visina"];
            if($visina < $najblizaRazlika) {
                $najblizaRazlika = $visina;
            }
        } echo "<p style=color: $boja>$najbilizaRazlika</p>";
    }
    echo imeNajbliziProsek($tim, "blue");

    // drugi novi 
    function imeNajbliziProsek2($tim, $boja) {
        $prosek = prosecnaVisina($tim);

        foreach ($tim as $igrac) {
            $visina = $igrac["visina"];
            $ime = $igrac["ime"];
            if(($visina - $prosek) <= 3) {
                echo "<p 'style=color: .$boja'>$ime</p>";
            }
        }
    }
    echo imeNajbliziProsek2($tim, "blue");
    
    //treci
    function razlika($tim, $godina) {
        $minimalnaVisina = PHP_INT_MIN;
        $maximalnaVisina = PHP_INT_MAX;
        
        foreach($tim as $igrac) {
            $visina = $igrac["visina"];
            $datumRodjenja = $igrac["datum"];
            $godinaRodjenja = substr($datumRodjenja ,0, 4);
        
            if($godinaRodjenja > $godina) {
                
                if($visina < $minimalnaVisina) {
                    $minimalnaVisina = $visina;
                }
            }
            if($visina > $maximalnaVisina) {
                $maximalnaVisina = $visina;
            }
        }
        $razlika = $maximalnaVisina - $minimalnaVisina;
        return round($razlika, 2);
    }
    echo razlika($tim, 1994);

?>  