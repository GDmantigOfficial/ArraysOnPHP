<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de Variables</title>
</head>
<body>
    <?php
    $Lado = 6;
    $Altura = 7;
    $Area = 2*($Lado*$Lado) + 4*($Lado*$Altura);
    $Volumen = $Altura*($Lado*$Lado);
    print("<h2> Uso de variables en php </h2><br>
    \tEl area de un prisma rectangular con las medidas
    <br>
    <ul>
    \t<li><b>$Lado cm</b> por lado de base</li>
    \t<li><b>$Altura cm</b> por altura</li>
    </ul>
    \tes de <b>$Area cm^2</b> en total con un volumen total de <b>$Volumen cm^3</b>");
    //Para imprimir, puedes usar <?=?'>'
    ?>
</body>
</html>