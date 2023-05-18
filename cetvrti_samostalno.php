<?php
    //24
    $blogovi = array(
        array("title" => "putovanja", "likes" => 120, "dislikes" => 2),
        array("title" => "kampovanja", "likes" => 90, "dislikes" => 9),
        array("title" => "planinarenja", "likes" => 42, "dislikes" => 10),
        array("title" => "rodjendani", "likes" => 320, "dislikes" => 4),
        array("title" => "svadbe", "likes" => 490, "dislikes" => 3)
    );

    //25
    function ukupanBrojLajkova($blogovi){
        $zbir = 0;
        foreach($blogovi as $likes => $brojLajkova) {
            $zbir += $brojLajkova["likes"];
        } return $zbir;
    }
    echo "Ukupan broj lajkova na svim slikama je: ". ukupanBrojLajkova($blogovi). ".";
    echo "<hr>";

    //26
    function prosecanBrojLajkova($blogovi) {
        $prosek = 0;
        $zbir = ukupanBrojLajkova($blogovi);
        foreach($blogovi as $likes => $brojLajkova) {
            $prosek = $zbir / count($blogovi);
        } return round($prosek);
    }
    echo "Prosecan broj lajkova na svim slikama je: ". prosecanBrojLajkova($blogovi). ".";


?>