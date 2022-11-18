<?php

$mysqli = mysqli_connect("localhost","root","","krishna");
if(mysqli_connect_errno()){
    echo " NO";
}
else{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $marks = $_POST['marks'];
    $query = "INSERT INTO gautam(Name, Phone, Marks)
              VALUES ('".$name."',".$number.",".$marks.")";
    $res = mysqli_query($mysqli, $query);
    if($res){
        echo "<script>location.href='form.php'</script>";
    }
    else{
        echo "Some Error Occured";
    }
}