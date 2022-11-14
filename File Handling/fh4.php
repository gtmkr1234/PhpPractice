<?php
$res = fopen("section.txt","r");
$sss = fread($res,filesize("section.txt"));
echo $sss;