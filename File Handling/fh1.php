<?php
$abc = fopen("Resume.txt","w");
$data = "My name is krishna ";
$res = fwrite($abc, $data);
if($res){
    echo "Success";
    fclose($abc);
}