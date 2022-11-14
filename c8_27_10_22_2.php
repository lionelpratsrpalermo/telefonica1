<?php


$paises[] = 'Argentina';
$paises[] = 'Brasi;';
$paises[] = 'Camerún';
$paises[] = 'Dinamarca';
$paises[] = 'Etiopía';
$paises[4] = 'Francia';
$paises[] = 'Guateala';
$paises[] = 'Holanda';
$paises[] = 'India';
$paises[7] = 'Jamaica';



foreach ($paises as $key => $value) {
    echo $key . ' = ' . $value . "<br>";
}

/* for ($i = 0; $i < count($paises); $i++) {
    echo $paises[$i] . "<br>";
} */

$paises2 = array(2 => 'Argentina', false => 'Brasil', 'Uruguay');
echo "<pre>";
print_r($paises2);
echo "</pre>";
$paises3 = ['Argentina', 'Brasil', 'Uruguay'];
echo "<pre>";
print_r($paises3);
echo "</pre>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

if ($_POST) {
    echo "Llego data por POST<br>";
} else {
    echo "No entraron datos por POST<br>";
}

if ($_GET) {
    echo "Llego data por GET<br>";
} else {
    echo "No entraron datos por GET<br>";
}

define('COL', [1, 200]);
$array = array(COL, 14);

if ($array) {
    echo "El array tiene " . count($array) . " elementos<br>";
} else {
    echo "El array está vacío<br>";
}

echo COL[1];

echo "<pre>";
print_r($array);
echo "</pre>";

if ($_SESSION) {
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
} else {
    echo "No hay ninguna sesión iniciada";
}
