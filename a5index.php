<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ass5.php" method="post">
        <input type="submit" value="start">
    </form>

<?php
    $_SESSION['random'] = rand(1,100);
    ?>

</body>
</html>