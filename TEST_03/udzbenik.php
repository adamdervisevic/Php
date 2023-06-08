<?php

    require_once "knjiga.php";

    class Udzbenik extends Knjiga {
        private $tiraz;

        public function __construct($n, $b, $c, $t) {
            parent::__construct($n, $b, $c);
            if($t >= 0) {
                $this->setTiraz($t);
            }
        }

        public function getTiraz() {
            return $this->tiraz;
        }
        public function setTiraz($t) {
            $this->tiraz = $t;
        }

        public function stampa() {
            echo "<p>Naslov knjige: " . $this->getNaslov(). "</p>";
            echo "<p>Broj strana: " . $this->getBrojStrana(). "</p>";
            echo "<p>Cena knjige: " .$this->getCena(). "</p>";
            echo "<p>Tiraz: " . $this->getTiraz(). "</p>";
        }

        public function jedinicnaCena() {
            return $this->getCena() / $this->getTiraz();
        }
    }





?>