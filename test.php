<?php
$numero = 1;

function if($numero == 1) {
    echo __LINE__;
} else {
    echo "null";
}
?>

<?php
$numero = 1;

function traceVariable($numero) {
    $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
    echo "La variabile '$numero' è stata definita alla riga" . $trace[0]['line'];
}

traceVariable($numero); // output: La variabile '$numero' è stata definita alla riga 12

$stringa = (string)$numero; // Type casting a string
var_dump($stringa); // output: string(1) "1"
?>

<?php

function funzione1() {
    echo "Funzione 1".;
}

echo funzione1() . " ";
echo 2 . " ";
echo 3; // Funzione1 2 3

$nome1 = "Ciro";
$nome2 = $nome1;

$nome1 = "Andrea";

echo $nome2; // output: Ciro

$nome1 = "Ciro";
$nome2 = &$nome1;

$nome1 = "Andrea";

echo $nome2; // output: Andrea


?>
