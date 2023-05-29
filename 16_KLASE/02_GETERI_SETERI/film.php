<?php

    class Film {
        public $naslov;
        public $reziser;
        public $godinaIzdanja;

        // public function getStampaj(){
        //     // echo "<p></p>" . $this->naslov;
        //     // echo "<p></p>" . $this->reziser;
        //     // echo "<p></p>" . $this->godinaIzdanja;
        //     echo
        //     "
        //     <table>
        //         <tr>
        //             <td>Naslov filma: </td>
        //             <td>$this->naslov</td>
        //         </tr>
        //         <tr>
        //             <td>Ime rezisera: </td>
        //             <td>$this->reziser</td>
        //         </tr>
        //         <tr>
        //             <td>Godina izdanja: </td>
        //             <td>$this->godinaIzdanja</td>
        //         </tr>
        //     </table>
        //     ";
        // }
        
        // public function setStampaj($s) {
        //     $this->stampaj = $s;
        // }

        public function getGodinaIzdanja() {
            return $this->godinaIzdanja;
        }
        public function setGodinaIzdanja($g){
            if($g <= 1800) {
                $this->godinaIzdanja = 1800;
            } else {
                $this->godinaIzdanja = $g;
            }
        }

        public function getNaslov() {
            return $this->naslov;
        }

        public function setNaslov($n) {
            $this->naslov = $n;
        }

        public function getReziser() {
            return $this->reziser;
        }

        public function setReziser($r) {
            $this->reziser = $r;
        }


    }

    $f1 = new Film();
    echo $f1->getNaslov("harry potter") . "<br>";
    echo $f1->getReziser("reziser1") . "<br>";
    echo $f1->getGodinaIzdanja(1700);































?>