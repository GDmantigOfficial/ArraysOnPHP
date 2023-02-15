<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de FOR</title>
</head>
<body>
    <?php
    $Base = 1;
    $Dendo = 1;
    $Result = 0;
    print("<center>");
    for($Base = 1; $Base < 6; $Base++){
        print('<table class="Table">'."
            \n<tr>
            \n    <th>Tabla de multiplicar de $Base</th>
            \n</tr>
        ");
        for($Dendo = 1; $Dendo < 11; $Dendo++){
            $Result = $Base * $Dendo;
            print("\t<tr>");
            print("\n\t\t<td>$Base x $Dendo = $Result</td>");
            print("\t</tr>\n");
        }
        print("\n
        \n</table>\n<br>\n<br>
        \n");
    }
    print("</center>")
    ?>
    <style>
        body{
            Background:#eeeeee;
        }
        .Table{
        border:double;
        }
        th{
            font-family: 'Times New Roman', Times, serif;
            font-size: x-large;
            Background:#00ffff;
        }
        td{
            font-family: 'Times New Roman', Times, serif;
            font-size: large;
            Background:#666666;
            padding: 3%;
            color: aliceblue;
            font-weight: bold;
            text-align: center;
        }
    </style>
</body>
</html>