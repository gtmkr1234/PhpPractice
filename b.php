<?php

echo "<table style='border: 5px solid black; border-collapse: collapse;'>";
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
        echo '<td style="border: 2px solid black;">' . $i*10 + $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";