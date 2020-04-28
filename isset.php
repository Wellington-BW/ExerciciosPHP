<?php

$var = '';

// Será interpretado como TRUE imprimindo o texto.
if (isset($var)) {
    echo "Essa variável existe.";
}

// No próximo exemplo será usado var_dump para mostrar
// o valor de retorno de isset().

$a = "teste";
$b = "outrotest";

var_dump( isset($a) );      // TRUE
var_dump( isset ($a, $b) ); // TRUE

unset ($a);

var_dump( isset ($a) );     // FALSE
var_dump( isset ($a, $b) ); // FALSE

$foo = NULL;
var_dump( isset ($foo) );   // FALSE

?>