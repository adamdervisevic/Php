<?php
class Pacijent{
    public $ime;
    public $visina;
    public $tezina;

    // function Stampaj(){
    //     echo "Ime pacijenta: $this->ime <br>";
    //     echo "Visina pacijenta: $this->visina <br>";
    //     echo "Tezina pacijenta: $this->tezina <br>";
    // }

    // function Bmi(){
    //     return $this->tezina / ($this->visina**2);
    // }
    
    // function Kritican() {
    //     if($this->bmi() < 15 || $this->bmi()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // } 

    public function getIme() {
        return $this->ime;
    }

    public function setIme($i) {
        $this->ime = $i;
    }

    public function getVisina() {
        return $this->visina;
    }

    public function setVisina($v) {
        if($v >= 0 && $v <= 250){
            $this->visina = $v;
        } else {
            $this->visina = false;
        }
        
    }

    public function getTezina() {
        return $this->tezina;
    }

    public function setTezina($t) {
        if($t >= 0 && $t <= 550) {
            $this->tezina = $t;
        } else {
            $this->tezina = false;
        }
        
    }
}

$p1 = new Pacijent();
echo $p1->getIme("Marko Markovic") . "<br>";
echo $p1->setVisina(180) . "<br>";
echo $p1->getTezina(90);
























?>