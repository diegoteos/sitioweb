<?php
if (empty($_POST)) {
    echo strrev("Hola mundo cruel");
}
if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['aa']) && !empty($_POST['bb'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $aa = $_POST['aa'];
    $bb = $_POST['bb'];
    $primera = md5($a);
    $primeraa = md5($aa);
    $segunda = md5($b);
    $segundab = md5($bb);
    if ($primera === $primeraa && $segunda === $segundab) {
        echo "Procesando...";
    } elseif ($primera !== $primeraa || $segunda !== $segundab) {
        echo "las dos palabras son iguales";
        echo '<script>alert("Las palabras no son iguales");</script>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <title>Sitio web nuevo proyecto</title>
</head>

<body>
    <div class="container">
        <br><br>
        <center>
            <form action="index.php" method="post">
                <h2>
                    <FONT COLOR="white"> Ingrese la primera palabra: </FONT>
                </h2><br>
                <input type="txt" name="a" id="" required><br><br>
                <h2>
                    <FONT COLOR="white"> Confirme la primera palabra: </FONT>
                </h2><br>
                <input type="txt" name="aa" id="" required><br><br>
                <h2>
                    <FONT COLOR="white">Ingrese el segunda palabra: </FONT>
                </h2><br>
                <input type="txt" name="b" id="" required><br><br>
                <h2>
                    <FONT COLOR="white">Confirme la segunda palabra: </FONT>
                </h2><br>
                <input type="txt" name="bb" id="" required><br><br>
                <button type="submit" class="btn btn-success">Enviar y generar contraseña segura</button>
                <br><br>
            </form>
        </center>


            <?php if (true === (isset($primera)) && true === (isset($segunda))) { ?>
                <div id="contenedor">
                    <div>
                        <span id="valor">
                            <?php $contraseña = md5($primera . $segunda); echo $contraseña;
                            ?>
                        </span>
                        <button id='copiador'>Copiar</button>
                    <?php }
                    ?>
                    </div>
                </div>

    </div>
    <script src="js.js"></script>
</body>

</html>