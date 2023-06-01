<?php

    require_once "kvadrat.php";

    class Romb extends Kvadrat {

        private $ugao;

        public function getUgao() {
            return $this->ugao;
        }

        public function setUgao($u) {
            if($u > 0) {
                $this->ugao = $u;
            } else {
                $this->ugao = 0;
            }
        }

        public function povrsina() {
            return $this->getA() * $this->getA() * sin($this->ugao); // mora getA zato sto je a privatno
        }

        public function __construct($a, $u) {
            parent::__construct($a);
            Oblik::__construct(Oblik::ROMB);
            $this->setUgao($u);
        }
    }



?>