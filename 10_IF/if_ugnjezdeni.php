<?php
    $pol = 'm';
    $godine = 4;

    if($pol == 'm') {
        if($godine >= 10) {
            echo "<p>Musko, punoletno</p>";
        } else {
            echo "<p>Musko, maloletno</p>";
        }
    } else {
        if($godine >= 18) {
            echo "<p>Zensko, punoletno</p>";
        } else {
            echo "<p>Zensko, maloletno</p>";
        }
    }
?>