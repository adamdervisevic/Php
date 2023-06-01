<?php

    abstract class Kredit{
        protected $naziv;
        protected $osnovica;
        protected $godisnjaKamata;
        protected $brojGodinaOtplate;

        public function __construct($n, $o, $g, $b) {
            $this->setNaziv($n);
            $this->setOsnovica($o);
            $this->setGodisnjaKamata($g);
            $this->setBrojGodinaOtplate($b);
        }

        public function getNaziv(){
            return $this->naziv;
        }
        public function setNaziv($n){
            $this->naziv = $n;
        }

        public function getOsnovica(){
            return $this->osnovica;
        }
        public function setOsnovica($o){
            $this->osnovica = $o;
        }

        public function getGodisnjaKamata(){
            return $this->godisnjaKamata;
        }
        public function setGodisnjaKamata($g){
            $this->godisnjaKamata = $g;
        }

        public function getBrojGodinaOtplate(){
            return $this->brojGodinaOtplate;
        }
        public function setBrojGodinaOtplate($b){
            $this->brojGodinaOtplate = $b;
        }

        public function ispis() {
            echo "<p>Naziv kredita: " . $this->naziv. "</p>";
            echo "<p>Osnovica: " .$this->osnovica. "</p>";
            echo "<p>Godisnja kamata: " .$this->godisnjaKamata. "</p>";
            echo "<p>Broj godina otplate: " .$this->brojGodinaOtplate. "</p>";
        }

        abstract public function mesecna_rata();
    }


?>