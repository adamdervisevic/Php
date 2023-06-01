<?php

    require_once "Kredit.php";

    class StambeniKredit extends Kredit {

        public function __construct($n, $o, $g, $b) {
            parent::__construct($n, $o, $g, $b);
        }

        public function mesecna_kamata() {
            return $this->godisnjaKamata / 12 / 100;
        }

        public function stepen() {
            return pow(1 + $this->mesecna_kamata(), $this->brojGodinaOtplate * 12);
        }

        public function mesecna_rata() {
            return ($this->osnovica * $this->mesecna_kamata() * $this->stepen()) / ($this->stepen() - 1);
        }
    }


?>