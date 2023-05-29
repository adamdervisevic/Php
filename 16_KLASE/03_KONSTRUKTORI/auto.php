<?php
    class Auto {
        //polja
        private $marka;
        private $boja;
        private $imaKrov;

        //metode

        public function __construct($m, $b, $ik) {
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov($ik);
        }

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
    //1 Krairamo objekat
    $a1 = new Auto("BMW", "plava", false);

    //2 Koristimo objekat
    $a1->ispis();

    // $a1->setMarka("Opel");
    // $a1->setBoja("bela");
    // $a1->ispis(); moze da se menja, zato koristimo setere
    

    


    














?>