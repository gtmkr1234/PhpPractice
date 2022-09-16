<?php
echo "<table style='border: 2px solid black; border-collapse: collapse; text-align: center;'>";
for($i=1; $i<=8; $i++){
    echo "<tr>";
    for($j=1; $j<=8;$j++){
        if(($i+$j)%2==0){
            echo "<td style='border: 1px solid red; color: white; background-color: black; height: 50px; width: 50px;'>";
            echo $i.",".$j;
            echo "</td>";
        }
        else{
            echo "<td style='border: 1px solid red; background-color: white; height: 50px; width: 50px;'>";
            echo $i.",".$j;
            echo "</td>";

        }
    }
    echo "</tr>";
}