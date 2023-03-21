<?php
$num = $_POST['num'];

if ($num % 2 == 1) {
    $csum = 0;
    $rsum = 0;
    echo "<table border=3>";
    for ($i = 1; $i <= $num; $i++) {
        echo "<tr>";
        for ($z = 1; $z <= $num; $z++) {
            $column = $z;
            $row = $i;

            if ($column == (($num / 2) + 0.5)) {
                $rnc = rand(1, 100);
                echo "<td>$rnc</td>";
                $csum += $rnc;
            } elseif ($row == (($num / 2) + 0.5)) {
                $rnr = rand(1, 100);
                echo "<td>$rnr</td>";
                $rsum += $rnr;
            } else {
                echo "<td>0</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<p>La suma de los numeros de columna es= " . $csum . "</p>";
    echo "<p>La suma de los numeros de fila es= " . $rsum . "</p>";
} else {
    echo 'Introduzca un numero Impar<br><a href="/dsvii/parcial_1/parcial_1.html">Volver<a/>';
}
