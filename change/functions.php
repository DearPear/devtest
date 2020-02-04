<?php

/*  La fonction "change" trouve la plus petite combinaison possible de billets de 10 et 5, et de pièces de 2, pour obtenir la valeur demandée.
    Compléter la fonction change($valeur) pour qu'elle renvoie "false" s'il n'y a pas de solution, ou un tableau associatif avec les index "billet10",
    "billet5" et "piece2" et leur nombre respectif.
    
    Pour s'aider : https://www.php.net/manual/en/function.intdiv.php
*/
function change($valeur){

    $billet10 = 0;
    $billet5 = 0;
    $piece2 = 0;


    return array("billet10" => $billet10, "billet5" => $billet5, "piece2" => $piece2);
}

function testchange($expected, $obtained, &$testpassed){

    if($expected == false){
        echo 'attendu : false';
        echo "<br>";
        if($obtained == false){
        echo 'obtenu : false';
        echo "<br>";
        return true;
        }
        else{
        echo 'obtenu : billet10 : ' . $obtained["billet10"] . " | billet5 : " . $obtained["billet5"] . " | piece2 : " . $obtained["piece2"];
        echo "<br>";
        $testpassed = false;
        return false;
        }
    }

    echo 'attendu : billet10 : ' . $expected["billet10"] . " | billet5 : " . $expected["billet5"] . " | piece2 : " . $expected["piece2"];
    echo "<br>";
    echo 'obtenu : billet10 : ' . $obtained["billet10"] . " | billet5 : " . $obtained["billet5"] . " | piece2 : " . $obtained["piece2"];
    echo "<br>";

     if($expected["billet10"] != $obtained["billet10"] || $expected["billet5"] != $obtained["billet5"] || $expected["piece2"] != $obtained["piece2"]){$testpassed = false;return false;} else return true;

}