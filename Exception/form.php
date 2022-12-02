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
<form action="form.php" method="post">
    <input type="number" name="numerator" autofocus>
    <input type="number" name="denominator">
    <input type="submit" value="result" name="calculate">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$num = $_POST["numerator"];
$den = $_POST["denominator"];
class NumberIsZero extends Exception {
    function errorMessage(): string
    {
        return $this->getMessage();
    }
}
class DivisionByNegative extends Exception{
    function errorMessage(): string
    {
        return $this->getMessage();
    }
}
class NumberIsGreater extends Exception{
    function errorMessage(): string
    {
        return $this->getMessage();
    }
}

    try {
        if($den==0){
            throw new NumberIsZero("please provide a valid value rather than 0 in denominator");
        }
        if($den>$num){
            throw new NumberIsGreater("Please provide a valid value. Denominator is greater than the numerator");
        }
        if($den<0){
            throw new DivisionByNegative("please provide a valid denominator value. Denominator is negative");
        }
        echo $num/$den;
    }
    catch (Exception $e){
        echo $e->errorMessage();
    }
    finally{
        echo "<br>Thank you";
    }
}
?>
</body>
</html>