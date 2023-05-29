<?php

    require_once "Osoba.php";

    class Zaposleni extends Osoba {

        
        protected $plata;
        protected $pozicija;

        public function __construct($i, $p, $g, $pl, $po) {
            parent::__construct($i, $p, $g);
            $this->setPlata($pl);
            $this->setPozicija($po);
        }

        public function getPlata(){
            return $this->plata;
        }

        public function getPozicija(){
            return $this->pozicija;
        }

        public function setPlata($pl) {
            $this->plata = $pl;
        }

        public function setPozicija($po) {
            $this->pozicija = $po;
        }

        public function ispisiZap() {
            echo "<p>Ime: " .$this->getIme(). " , prezime: " . $this->getPrezime(). " , godina rodjenja: " . $this->getGodinaRodjenja(). ", ima platu: " . $this->getPlata(). ", i pozicija ove osobe je: " . $this->getPozicija() . ".</p>";
            }
    }

    
    


?>