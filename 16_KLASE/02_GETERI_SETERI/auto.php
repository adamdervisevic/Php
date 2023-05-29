<?php
    class Auto {
        //polja
        private $marka;
        private $boja;
        private $imaKrov;

        //metode

        // GETERI: vracaju vrednosti polja

        public function getMarka() {
            return $this->marka;
        }

        public function getBoja() {
            return $this->boja;
        }
        public function getImaKrov() {
            return $this->imaKrov;
        }

        // SETERI: postavljaju vrednosti polja

        public function setMarka($m) {
            $this->marka = $m;
        }

        public function setBoja($b) {
            $this->boja = $b;
        }
        
        public function setImaKrov($ik) {
            if($ik === true || $ik === false) {
                $this->imaKrov = $ik;
            } else{
                $this->imaKrov = false;
            }
            
        }

        function sviraj() {
            echo "<p>Beep! Beep!</p>";
        }
        function ispis(){
            echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja;
            if($this->imaKrov) {
                echo " ima krov";
            } else {
                echo " nema krov";
            }
            echo "</p>";
        }
    }
    //Kada se kreira klasa, obicno se na sledeci nacin implementira: 
    //1) sva polja stavimo da su privatna
    //2) za svako polje napisemo geter i seter
    // 2.1) geter: dohvata(cita) vrednost polja
    // 2.2) stere: postavlja novu vrednost polju



    $a1 = new Auto();
    // $a1->marka = 158; ne moze da se pozove zato sto je marka pod "private" i ne moze se pristupiti van klase
    // echo $a1-> marka; ne moze, polje marka je privatno
    $a1->setMarka("Audi");
    $a1->setImaKrov("Audi");

    if($a1->getImaKrov() == true) {
        echo "Automobil make " . $a1->getMarka() . " ima krov<br>";
    } else {
        echo "Automobil make " . $a1->getMarka() . " nema krov<br>";
    }




    echo $a1->getMarka(); // ovo radi, poziva se geter za polje marka, geter vrati vrednost polja, pa onda mi ispisemo vrednost














?>