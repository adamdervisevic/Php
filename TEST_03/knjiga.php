<?php

    abstract class Knjiga {
        private $naslov;
        private $brojStrana;
        private $cena;

        // const ZBIRKA = 'Zbirka';
        // const UDZBENIK = 'Udzbenik';

        public function __construct($n, $b, $c){
            if($n != 0) {
                $this->setNaslov($n);
            }
            if($b >= 0){
                $this->setBrojStrana($b);
            }
            if($c >= 0) {
                $this->setCena($c);
            }
            
        }
        public function getNaslov() {
            return $this->naslov;
        }
        public function setNaslov($n) {
            $this->naslov = $n;
        }

        public function getBrojStrana() {
            return $this->brojStrana;
        }
        public function setBrojStrana($b) {
            $this->brojStrana = $b;
        }

        public function getCena() {
            return $this->cena;
        }
        public function setCena($c) {
            $this->cena = $c;
        }

        public function stampa() {
            echo "<p>Naslov knjige: " . $this->getNaslov(). "</p>";
            echo "<p>Broj strana: " . $this->getBrojStrana(). "</p>";
            echo "<p>Cena knjige: " .$this->getCena(). "</p>";
        }
        
        abstract function jedinicnaCena();
        
    }



?>