<?php
$marks=array(1,5,78,8,54,88,105,548,10548,3);
echo"inputed array :<br>"; for($i=0;$i<count($marks);$i++){
    echo $marks[$i]." ";
}
echo "maximum ". max($marks)."<br>"; echo "minimum ". min($marks);
?>