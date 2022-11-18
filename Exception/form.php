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
if($_SERVER['REQUEST_METHOD']=="POST"){
echo "tested";
}
?>
</body>
</html>