<?php

    require_once "Kredit.php";

    class AutoKredit extends Kredit {

        protected $autoKamata;

        public function __construct($n, $o, $g, $b, $a) {
            parent::__construct($n, $o, $g, $b);
            $this->setAutoKamata($a);
        }

        public function getAutoKamata() {
            return $this->autoKamata;
        }
        public function setAutoKamata($a) {
            $this->autoKamata = $a;
        }

        public function kamata() {
            return $this->osnovica * $this->brojGodinaOtplate * ($this->godisnjaKamata + $this->autoKamata) / 100;
        }

        public function ukupan_iznos() {
            return $this->osnovica + $this->kamata();
        }

        public function mesecna_rata() {
            return $this->ukupan_iznos() / ($this->brojGodinaOtplate * 12);
        }
    }


?>