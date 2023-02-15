<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de while</title>
</head>
<body>
    <?php
    $Randumb = 1;
    print('<p class="Titulos">'."Uso de while</p>");
    print('<p class="Textos">'."\n");
    while ($Randumb%7 != 0){
        $Randumb = rand(50,100);
        print("\t$Randumb\n<br>\n");
    }
    print("</p>");
    print('<p class="Titulos">'."Se ha obtenido un multiplo de 7</p>\n\n");
    print('<p class="Titulos">'."Uso de Do-While</p>");
    print('<p class="Textos">'."\n");
    do{
        $Randumb = rand(50,100);
        print("\t$Randumb\n<br>\n");
    } while ($Randumb%7 != 0);
    print("</p>");
    print('<p class="Titulos">'."Se ha obtenido un multiplo de 7</p>");
    ?>
    <style>
        .Titulos{
            font-weight: bold;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: x-large; 
        }
        .Textos{
            font-weight: bold;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: large;  
        }
    </style>
</body>
</html>