<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Practica de Asistencia del dia 25/08/2022</title>
</head>

<body>
    <div align="center">
        <table border="1" width="80%">
            <?php
function miTabla($renglones)
{
    for($x = 1; $x<= $renglones; $x++){

    echo "<tr>";
    
    echo "</tr>";
   }
}


miTabla(1);
    echo "Hecho por Luis Orozco";
        echo "</br>";
        date_default_timezone_set("America/Mexico_city");
        echo "La fecha actual es: ".date("d/m/y"). " y la hora exacta es: ".date("G:i:s");
        

?>
        </table>
</body>

</html>