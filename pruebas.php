<?php

$variable = "diego es una persona bien estudiosa...";


// STRLEN
$conteo = strlen($variable);  // cuenta el numero de caracteres de un string
echo "El string es de $conteo caracteres <br><br />";


// STRREV para revertir una cadena
$revertir = strrev($variable);
echo "El string revertido quedo de la siguiente manera: $revertir <br><br />"; 


// REMPLAZO de palabras dentro de un string
echo str_replace("diego", "Diego", $variable) . '<br><br />';

echo "hola";

?>