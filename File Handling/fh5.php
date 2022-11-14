<?php
$handle = fopen("section.txt","r");
while(!feof($handle)){
    $data = fgetc($handle);
    if($data == "\n"){
        $data = "<br>";
    }
    echo $data;
}
//unlink() -> to delete file from the system
//copy(source_file, dest_file) -> to make a copy of a file to another file
//file_exists(filename) -> to check if a file exists or not. Return type - boolean
if(file_exists("Resume.txt")){
    echo "<br> File exists";
}
else{
    echo "<br> File doesn't exist";
}