<!DOCTYPE html>
<html>
<head>
    <title>Estadios de Fútbol</title>
</head>
<body>

<?php
// Definir el array asociativo
$estadios_futbol = array(
    'Barcelona' => 'Camp Nou',
    'Real Madrid' => 'Santiago Bernabeu',
    'Valencia' => 'Mestalla',
    'Real Sociedad' => 'Anoeta'
);
// Mostrar los valores del array en una tabla
echo "<h2>Estadios de Fútbol</h2>";
echo "<table border='1'>";
echo "<tr><th>Equipo</th><th>Estadio</th></tr>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<tr><td>$equipo</td><td>$estadio</td></tr>";
}
echo "</table>";

// Eliminar el estadio asociado al Real Madrid
unset($estadios_futbol['Real Madrid']);

// Mostrar los valores del array en una lista numerada
echo "<h2>Estadios de Fútbol (después de eliminar al Real Madrid)</h2>";
echo "<ol>";
foreach ($estadios_futbol as $equipo => $estadio) {
    echo "<li>$equipo: $estadio</li>";
}
echo "</ol>";
?>

</body>
</html>