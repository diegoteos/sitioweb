<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseñas</title>
</head>

<body>

    <form action="algoritmos.php" method="post">
        <input type="text" name="primera" id="">
        <input type="text" name="segunda" id="">
        <button type="submit">Enviar y comparar</button>
    </form>

</body>

</html>




<?php
// MOSTRAMOS TODAS LAS OPCIONES DE HASH QUE EXISTEN PARA CIFRAR CONTRASEÑAS
/*
$contraseña = "Hola mundo";
var_dump (hash_algos());
foreach (hash_algos() as $algoritmo) {
    echo $algoritmo . ":  " . hash($algoritmo, $contraseña) . "<br/><br/>";
} */


if (!empty($_POST['primera']) && !empty($_POST['segunda'])) {
    $primera = $_POST['primera'];
    $segunda = $_POST['segunda'];

    // ciframos los datos recibidos por un pasword por defecto con un costo de cifrado de 10 veces
    $prima = password_hash($primera, PASSWORD_DEFAULT, ['cost' => 8]);
    $segun = password_hash($segunda, PASSWORD_DEFAULT, ['cost' => 8]);

    echo '<br/><br/><br/>';
    echo $prima . '<br/><br/><br/>';
    echo $segun . '<br/><br/><br/>';

    if (password_verify($primera, $segun)) {
        echo "Las contraseñas son iguales";
    } else {
        echo "Las contraseñas no coinciden";
    }
}


?>