<?php
$handle = fopen("section.txt","r");
while(!feof($handle)){
    $data = fgetc($handle);
    if($data == "\n"){
        $data = "<br>";
    }
    echo $data;
}