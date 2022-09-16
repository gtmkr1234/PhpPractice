<?php
echo"<table style='border: 5px solid black; border-collapse: collapse;'>";
for($i=2; $i<=20; $i++){
    echo"<tr>";
    for($j=1; $j<=10; $j++){
        echo'<td style="border: 2px solid black;">'." $i * $j = ".$i*$j."</td>";
    }
    echo"</tr>";
}
echo"</table>";