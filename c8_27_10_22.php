<?php

$paises[7] = 'Uruguay';
$paises[0] = 'Argentina';
$paises[1] = 'Brasil';
echo $paises[1];


echo "<pre>";
print_r($paises);
echo "</pre>";

$paises2 = ['Bolivia', 'Qatar', 'South Korea'];

echo "<pre>";
print_r($paises2);
echo "</pre>";

$paises3 = [
    59 => 'Bolivia',
    "12" => 'Qatar',
    'galluchi' => 'South Korea'
];

echo "<pre>";
print_r($paises3);
echo "</pre>";

array_push($paises3, 'Senegal');

echo "<pre>";
print_r($paises3);
echo "</pre>";

array_push($paises, 'Senegal');
echo "<pre>";
print_r($paises);
echo "</pre>";

$paises[0] = 'Canadá';
echo "<pre>";
print_r($paises);
echo "</pre>";

$paises4[] = 15;
$paises4[77] = 5;
$paises4[] = 3;
$paises4[45] = 7;
$paises4[] = 7;

echo $paises4[1];
echo "<pre>";
print_r($paises4);
echo "</pre>";
echo count($paises4) . "<br>";
echo $paises4[0] + $paises4[78] + $paises4[79];

$paises5 = array(3 => 'Argentina', 71 => 45, 'pais' => 'Uruguay', 'Victor');
echo "<pre>";
print_r($paises5);
echo "</pre>";

$usuario['nombre'] = 'Guillermo';
$usuario['apellido'] = 'Alfaro';
$usuario['dni'] = 123456;
echo "<pre>";
print_r($usuario);
echo "</pre>";

foreach ($usuario as $key => $item) {
    echo $key . ': ' . $item . "<br>";
}

echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
// Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36

echo "<br>";
echo $_SERVER['HTTP_COOKIE'];
// SESSIONID=dc081055983e904b190b50bea8f55159d70324f3
// SESSIONID=dc081055983e904b190b50bea8f55159d70324f3

/* $_SERVER['HTTP_COOKIE'] = 'cachito';
echo "<pre>";
print_r($_SERVER);
echo "</pre>"; */

foreach ($_SERVER as $key => $value) {
    $_SERVER[$key] = 'hackeado!';
}
$_SERVER['pepe'] = 'dalessandro';
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

$_GET['kotuku'] = 'tamarindo';
echo "<pre>";
print_r($_GET);
echo "</pre>";

$_POST[14] = 'salamanca';
echo "<pre>";
print_r($_POST);
echo "</pre>";
