<?php

function factorial($a): int
{
    if($a<=1){
        return 1;
    }
    else{
    return $a*factorial($a-1);
}}
function area($a):int{
    return $a**2;
}
function primenum($a):string{
    for($i=2; $i<$a**0.5; $i++){
        if($a%$i==0){
            return "Not a prime number";
        }
    }
    return "prime number";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="8.php">
        <table>
            <tr>
                <td>Enter first number</td>
                <td><input type="number" name="numa"></td>
            </tr><tr>
                <td>Enter your choice : 1-3</td>
                <td><input type="number" name="choice"></td>
            </tr><tr>
                <td><input type="submit" name="submit"></td>
            </tr>
            <tr>
                <td>
            <?php
                if(isset($_POST)){
                    $num = $_POST['numa'];
                    $choice = $_POST['choice'];
                    switch ($choice){
                        case 1 :
                            echo factorial($num);
                            break;
                        case 2 :
                            echo area($num);
                            break;
                        case 3:
                            echo primenum($num);
                            break;
                        default:
                            echo "Invalid choice!!";
                            break;
                    }
                }
            ?>
            </td></tr>
        </table>
    </form>
</body>
</html>