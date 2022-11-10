<?php

$mysqli = mysqli_connect("localhost","root","","krishna");
if(mysqli_connect_errno()){
    echo " NO";
}
else{
    echo "Success"."<br>";
    $query = "INSERT INTO gautam(Name, Phone, Marks)
              VALUES ('Adarsh Shakya', 8974561125, 98) ";
    $res = mysqli_query($mysqli, $query);
    if($res){
        echo "Data Inserted";

    }
    else{
        echo "Some Error Occured";
    }
}