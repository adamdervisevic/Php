<?php
    class Trougao {

        private $a;
        private $b;
        private $c;

        public function __construct($a, $b, $c) {
            if($a > 0 && $b > 0 && $c > 0 && $a + $b > $c && $a + $c > $b && $c + $b > $a) {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            } else {
                $this->a = 0;
                $this->b = 0;
                $this->c = 0;
            }
        }

        public function getA(){
            return $this->a;
        }
        public function setA($a){
            if($a >= 0 && $a + $this->b > $this->c && $a + $this->c > $b && $this->c + $this->b > $a) {
                $this->a = $a;
            } else {
                echo "<p>Ne moze da se PROMENI vrednost stranice a</p>";
            }
        }

        public function getB() {
            return $this->b;
        }
        public function setB($b) {
            if($b >= 0 && $this->a + $b > $this->c && $this->a + $this->c > $b && $this->c + $b > $this->a) {
                $this->b = $b;
            } else {
                echo "<p>Ne moze da se PROMENI vrednost stranice b</p>";
            }
        }

        public function getC() {
            return $this->c;
        }
        public function setC($c) {
            if($c >= 0 && $this->a + $this->b > $c && $this->a + $c > $this->b && $c + $this->b > $this->a) {
                $this->c = $c;
            } else {
                echo "<p>Ne moze da se PROMENI vrednost stranice c</p>";
            }
        }

        public function obimTrougla() {
            return $this->a + $this->b + $this->c;
        }

        public function povrsinaTrougla() {
            $s = ($this->a + $this->b + $this->c) / 2;
            return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
        }

    }

    $a = new Trougao(7, 6, 8);
    echo $a->obimTrougla() . "<br>";
    echo $a->povrsinaTrougla();


?>