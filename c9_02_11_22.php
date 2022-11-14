<?php

class Coche
{
    var $ruedas;
    var $color;
    var $motor;

    function Coche()
    { // motodo constructor // le va a dar un estado inicial al objeto a instanciar
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    function arrancar()
    {
        echo "Estoy arrancando";
    }
    function girar()
    {
        echo "Estoy girando";
    }
    function frenar()
    {
        echo "Estoy frenando";
    }
}

$renault = new Coche(); // estado inicial al objeto o instancia
$mazda = new Coche();
$seat = new Coche();

/* print_r($mazda);
echo "<br>" . $mazda->ruedas; */
/* $mazda->girar();
$a = $mazda->ruedas;
echo $a;
var_dump($a); */

$hijo1 = ['Lionel', 'gris'];
$hijo2 = ['Lupi', 'rojo'];

/* if ($hijo1[1] == 'rojo' xor $hijo2[1] == 'rojo') {
    echo "Lo hicieron perfecto!! <br>";
} else {
    echo "Son dos boludos!! <br>";
} */

$var = 3;
switch ($var) {
    case 10:
        $mensaje = 'Uno';
        break;
    case 2:
        $mensaje = 'Dos';
        break;
    case 3:
        $mensaje = 'Tres';
        break;
    default:
        $mensaje = 'El valor no es correcto';
}

/* echo "\n" . $mensaje . '<br><br>'; */



$array = [];
for ($i = 1; $i <= 17; $i++) {
    $aleatorio = rand(1, 18);
    if ($aleatorio == 3) {
        $vuelta = $i;
        break;
    } else {
        if ($i == 1)
            array_push($array, $aleatorio);
        else {
            $busqueda = array_search($aleatorio, $array);
            if ($busqueda == '') {
                do {
                    $aleatorio = rand(1, 18);
                    /* echo $contador . " = " . $aleatorio . "<br>"; */
                    $busqueda = array_search($aleatorio, $array);
                    /* $contador++; */
                } while ($busqueda == '');
                array_push($array, $aleatorio);
            }
        }
    }
}

if (isset($vuelta)) {
    echo "El $aleatorio salió en la vuelta $vuelta <br>";
    if ($vuelta != 1) {
        echo "Orden de players sorteados: <br>";

        foreach ($array as $key => $player) {
            echo $key + 1 . ": " . $player . "<br>";
        }
    }
} else {
    echo "El 3 no salió <br>";
    echo "Orden de players sorteados: <br>";

    foreach ($array as $key => $player) {
        echo $key + 1 . ": " . $player . "<br>";
    }
}




/* $pepe = [5, 8, 7, 6];
$valorABuscar = 00;
$busqueda = array_search($valorABuscar, $pepe);
if ($busqueda != '')
    echo 'Está!';
else
    echo "No está :(";

echo $busqueda; */



// http://localhost/telefonica/c9_02_11_22.php