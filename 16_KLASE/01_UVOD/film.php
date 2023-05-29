<?php
    class Film {
        var $naslov;
        var $reziser;
        var $godinaIzdanja;
        function stampaj(){
            // echo "<p></p>" . $this->naslov;
            // echo "<p></p>" . $this->reziser;
            // echo "<p></p>" . $this->godinaIzdanja;
            echo
            "
            <table>
                <tr>
                    <td>Naslov filma: </td>
                    <td>$this->naslov</td>
                </tr>
                <tr>
                    <td>Ime rezisera: </td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina izdanja: </td>
                    <td>$this->godinaIzdanja</td>
                </tr>
            </table>
            ";
        }
    }
    
    $f1 = new Film();
    $f1->naslov = "Fast & Furious";
    $f1->reziser = "Vin Diesel";
    $f1->godinaIzdanja = 2001;
    $f1->stampaj();
    echo "<hr>";

    $f2 = new Film();
    $f2->naslov = "Kad jaganjci utihnu";
    $f2->reziser = "Jonathan Demme";
    $f2->godinaIzdanja = 1991;
    $f2->stampaj();
    echo "<hr>";

    $f3 = new Film();
    $f3->naslov = "LOTR";
    $f3->reziser = "Peter Jackson";
    $f3->godinaIzdanja = 2001;
    $f3->stampaj();
    echo "<hr>";



?>