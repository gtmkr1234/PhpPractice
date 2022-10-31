<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="number">
        <input type="submit" name="submit">
    </form>
    <?php
    function reverse(int $num){
        $num = (string) $num;
        $num = strrev($num);
        return (int) $num;
    }
    if(isset($_GET['submit'])){
        $num = $_GET['number'];
        $value = $num;
        $value = $value**2;
        $value = reverse($value);
        $value = $value**0.5;
        $value = reverse($value);
        if($value==$num){
            echo "ADAM";
        }
        else{
            echo "Not ADAM";
        }
    }
    ?>
</body>
</html>