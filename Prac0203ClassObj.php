<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*     class Empleado{
        public $Nombre;
        public $Edad, $Nss;
        //Constructor
        public function __construct($Nombre, $Edad, $Nss){
            $this->Nombre = $Nombre;
            $this->Edad = $Edad;
            $this->Nss = $Nss;
        }

        public function getNombre(){
            return $this->Nombre
        }
        Public function GetEdad(){
            return $this->Edad;
        }
    } */
    //Actividad
    class Tornillo{
        public $Cabeza;
        public $Longuitud;
        public $Precio;

        public function __construct($Cabeza, $Longuitud, $Precio){
            $this->Longuitud = $Longuitud;
            $this->Cabeza = $Cabeza;
            $this->Precio = $Precio;
        }

        public function GetPrecioIVA(){
            return ($this->Precio * 1.16);
        }
        public function GetNombre(){
            return $this->Cabeza;
        }
        public function GetLonguitud(){
            return $this->Longuitud;
        }
        public function GetPrecio(){
            return $this->Precio;
        }
    }
    $Tor01 = new Tornillo("Plana", "3mm", 50);
    $Tor02 = new Tornillo("Curva", "6mm", 75);
    $Tor03 = new Tornillo("Ondulada", "2mm", 125);
    print("<center><h2> Uso de funciones y objetos </h2></center>");
    print("<ul><li>\nCiento de tornillos de cabeza ".$Tor01->GetNombre()." de longuitud ".$Tor01->GetLonguitud()." tiene un precio de ".$Tor01->GetPrecio().". Precio IVA incluido: ".$Tor01->GetPrecioIVA()."</li>\n<br>\n");
    print("<li>Ciento de tornillos de cabeza ".$Tor02->GetNombre()." de longuitud ".$Tor02->GetLonguitud()." tiene un precio de ".$Tor02->GetPrecio().". Precio IVA incluido: ".$Tor02->GetPrecioIVA()."</li>\n<br>\n");
    print("<li>Ciento de tornillos de cabeza ".$Tor03->GetNombre()." de longuitud ".$Tor03->GetLonguitud()." tiene un precio de ".$Tor03->GetPrecio().". Precio IVA incluido: ".$Tor03->GetPrecioIVA()."</li></ul>\n<br>\n");
    ?>
</body>
</html>