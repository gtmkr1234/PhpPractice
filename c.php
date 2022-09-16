<?php

echo "<table>";
$num =0;
for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        $num += 1;
        echo '<td style="border: 2px solid black;">'.$num;
    }
    echo "</tr>";
}
echo "</table>";