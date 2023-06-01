<?php
    require_once "Kredit.php";
    require_once "AutoKredit.php";
    require_once "StambeniKredit.php";


    $autoKredit = new AutoKredit("Auto kredit", 5000, 5, 3, 2.5);

    echo "<h2>Auto kredit:</h2>";
    $autoKredit->ispis();
    echo "<p>Mesečna rata: " . $autoKredit->mesecna_rata() . "</p>";

    echo "<br>";

    $stambeniKredit = new StambeniKredit("Stambeni kredit", 100000, 4, 20);

    echo "<h2>Stambeni kredit:</h2>";
    $stambeniKredit->ispis();
    echo "<p>Mesečna rata: " . $stambeniKredit->mesecna_rata() . "</p>";
?>