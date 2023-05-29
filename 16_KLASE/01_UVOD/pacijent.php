<?php
    class Pacijent{
        var $ime;
        var $visina;
        var $tezina;

        function Stampaj(){
            echo "Ime pacijenta: $this->ime <br>";
            echo "Visina pacijenta: $this->visina <br>";
            echo "Tezina pacijenta: $this->tezina <br>";
        }

        function Bmi(){
            return $this->tezina / ($this->visina**2);
        }
        
        function Kritican() {
            if($this->bmi() < 15 || $this->bmi()) {
                return true;
            } else {
                return false;
            }
        } 
    }


    $p1 = new Pacijent();
    $p2 = new Pacijent();
    $p3 = new Pacijent();

    $p1->ime = "Pera Petrovic";
    $p1->visina = 1.8;
    $p1->tezina = 90;
    $p1->Stampaj();
    echo $p1->Bmi() . "<br>";
    echo ($p1->kritican()?"Kritican":"Nije kritican");
    echo "<hr>";

    $p2->ime = "Mika Mikic";
    $p2->visina = 1.6;
    $p2->tezina = 120;
    $p2->Stampaj();
    echo $p2->Bmi(). "<br>";
    echo ($p2->kritican()?"Kritican":"Nije kritican");
    echo "<hr>";

    $p3->ime = "Zoran Zokic";
    $p3->visina = 1.9;
    $p3->tezina = 70;
    $p3->Stampaj();
    echo $p3->Bmi() . "<br>";
    echo ($p3->kritican()?"Kritican":"Nije kritican");
    echo "<hr>";
?>