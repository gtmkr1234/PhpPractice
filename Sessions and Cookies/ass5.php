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
    <form action="" method="get">
        <table>
            <tr>
                <td>Guess a number between 1-100:</td>
                <td><input type="text" name="numguess" autofocus="autofocus"></td>
                <td><input type="submit" name="submit" value="check" ></td>
            </tr>
        </table>

        <?php
        $num = $_SESSION['random'];
        $val = 0;
        ?>
    </form>
</body>
</html>