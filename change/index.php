<?php

require("./functions.php");


$testpassed = true;

$val = 1;
$change = change($val);
if(testchange($change, false, $testpassed)){
    echo "<br>";
    echo "succès";
    echo "<br>";
} else{
    echo "<br>";
    echo "echec";
    echo "<br>";
}
echo "<br>";

$val = 119;
$change1 = change($val);
if(testchange($change1, array("billet10" => 0, "billet5" => 0, "piece2" => 0), $testpassed)){
    echo "<br>";
    echo "succès";
    echo "<br>";
} else{
    echo "<br>";
    echo "echec";
    echo "<br>";
}
echo "<br>";




if($testpassed){
    echo "<br>";
    echo "tous les test cases sont passés avec succès !";
    echo "<br>";
}else{
    echo "<br>";
    echo "Au moins un test case n'est pas passé avec succès !";
    echo "<br>";
}