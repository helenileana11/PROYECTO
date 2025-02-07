<!DOCTYPE html>
<html>
<head>
    <title>Lenguajes de Programación</title>
</head>
<body>

<?php
// Definir las matrices asociativas
$lenguajes_cliente = array(
    'HTML' => 'Lenguaje de marcado',
    'CSS' => 'Hojas de estilo',
    'JavaScript' => 'Lenguaje de scripting'
);

$lenguajes_servidor = array(
    'PHP' => 'Lenguaje de servidor',
    'Python' => 'Lenguaje de servidor',
    'Ruby' => 'Lenguaje de servidor'
);

// Combinar ambas matrices en una sola
$lenguajes = array_merge($lenguajes_cliente, $lenguajes_servidor);

// Mostrar los valores de la matriz combinada en una tabla
echo "<h2>Lenguajes de Programación</h2>";
echo "<table border='1'>";
echo "<tr><th>Lenguaje</th><th>Descripción</th></tr>";
foreach ($lenguajes as $lenguaje => $descripcion) {
    echo "<tr><td>$lenguaje</td><td>$descripcion</td></tr>";
}
echo "</table>";
?>
</body>
</html>