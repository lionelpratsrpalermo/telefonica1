<?php

// Inicio el manejo de sesiones.
session_start();

// Puedo usar cualquier elemento del arreglo

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

$a = session_id();
echo "Tu ID de sesión es: $a";
