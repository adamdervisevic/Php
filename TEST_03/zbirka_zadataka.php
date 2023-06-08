<?php
    require_once "knjiga.php";

    class ZbirkaZadataka extends Knjiga {
        private $brojZadataka;

        public function __construct($n, $b, $c, $bz) {
            parent::__construct($n, $b, $c);
            if($bz > 0) {
                $this->setBrojZadataka($bz);
            }
        }
        public function getBrojZadataka() {
            return $this->brojZadataka;
        }
        public function setBrojZadataka($bz) {
            $this->brojZadataka = $bz;
        }

        public function stampa() {
            echo "<p>Naslov knjige: " . $this->getNaslov(). "</p>";
            echo "<p>Broj strana: " . $this->getBrojStrana(). "</p>";
            echo "<p>Cena knjige: " .$this->getCena(). "</p>";
            echo "<p>Broj Zadataka: " . $this->getBrojZadataka(). "</p>";
        }

        public function jedinicnaCena() {
            $jc = $this->getBrojZadataka() / $this->getBrojStrana();
            return $jc / $this->getCena();
        }
    }


















?>