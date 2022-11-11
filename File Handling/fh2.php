<?php

$file = fopen("Resume.txt", "r");
while(!feof($file)) {
    echo fgets($file) . "<br>";
}

