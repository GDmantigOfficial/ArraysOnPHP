<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor a 3 y tablas</title>
</head>
<body>
    <?php
    $a = 3;
    $b = 5;
    $c = 7;
    $ValorMayor = 0;
    if ($a > $b){
        if($a > $c){
            $ValorMayor = $a;
        }
        else{
            $ValorMayor = $c;
        }
    }
    else if($b > $c){
        $ValorMayor = $b;
    }
    else{
        $ValorMayor = $c;
    }
    ?>
    <center>
    <table class="Tabla">
        <thead>
            <th>Variable</th>
            <th>Valor</th>
        </thead>
        <tr>
            <td>Valor de A</td>
            <td><?="$a"?></td>
        </tr>
        <tr>
            <td>Valor de B</td>
            <td><?="$b"?></td>
        </tr>
        <tr>
            <td>Valor de C</td>
            <td><?="$c"?></td>
        </tr>
        <tr>
            <td>Valor mayor</td>
            <td><?="$ValorMayor"?></td>
        </tr>
        
    </table>
    <style>
        .Tabla{
        border:double;
        }
        th{
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            Background:#00ffff;
        }
        td{
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            Background:#666666;
            padding: 3%;
        }
    </style>
    </center>
</body>
</html>