<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Array en Sesión</title>
</head>
<body>

    <h1>Modificar array guardado en sesión</h1>

    <form action="" method="post">
        <label>Posición a modificar:</label>
        <select id="position" name="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select><br>

        <label>Nuevo valor:</label>
        <input type="text" id="new_value" name="new_value"><br>

        <input type="submit" value="Modificar" name="send"></input>
        <input type="submit" value="Promedio" name="send"></input>
        <input type="submit" value="Reiniciar" name="send"></input>
    </form>
    <br>
    <?php
    session_start();
if (!isset($_SESSION["array"])) {
    $_SESSION["array"] = array(10,20,30);}

    $array = $_SESSION["array"];

    if (isset($_POST['send'])) {
        if ($_POST['send'] == "Modificar") {
            $position = (int)$_POST['position'];
            $new_value = (int)$_POST['new_value'];

            if ($position >= 0 && $position < count($array)) {
                $_SESSION["array"][$position] = $new_value;
                header("Location: " . $_SERVER['PHP_SELF']);
            } 
        }elseif ($_POST['send'] == 'Promedio'){
            $promedio = 0;
            $cont = 0;
            foreach ($array as $value) {
                $promedio += $value;
                $cont ++;
            }
            echo"Average: ". $promedio/$cont . "<br>";

        }elseif ($_POST['send'] == 'Reiniciar') {
            $_SESSION["array"] = array(10,20,30);
            header("Location: " . $_SERVER['PHP_SELF']);
        }
    }
foreach ($array as $value) {
        echo $value. " ";
}

    ?>

</body>
</html>
