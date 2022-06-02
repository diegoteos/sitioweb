<?php
if (empty($_POST)) {
}
if (!empty($_POST['a']) && !empty($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $primera = md5($a);
    $segunda = md5($b);
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
                    <FONT COLOR="white"> Ingrese el primera palabra: </FONT>
                </h2><br>
                <input type="txt" name="a" id=""><br><br>
                <h2>
                    <FONT COLOR="white">Ingrese el segunda palabra: </FONT>
                </h2><br>
                <input type="txt" name="b" id=""><br><br>
                <button type="submit">Enviar y generar contraseña segura</button>
                <br><br>
            </form>
            <?php /*
            if (true === (isset($resultado))) {
                echo "el resultado es $resultado";
            } */
            ?>


            <?php if (true === (isset($primera)) && true === (isset($segunda))) { ?>
                <div id="contenedor">
                    <div>
                        <span id="valor">
                            <?php echo $primera; '<br>';
                            echo $segunda;
                            
                            ?>
                        </span>
                        <button id='copiador'>Copiar</button>

                    <?php }
                    ?>


                    </div>
                </div>

        </center>
    </div>
    <script src="js.js"></script>
</body>

</html>