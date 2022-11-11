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
<div style="text-align: center;"><table>
        <form method="get">
            <tr>
                <td>
                    <input type="submit" value="start" name="name">
                    <?php
                    $_SESSION['val'] = rand(10000000, 99999999);
                    ?>
                </td>
                <td>
                    <input type="submit" value="stop" name="name">
                </td>
            </tr>
        </form>
    </table>
                    <?php
                    if(!isset($_SESSION['a'])){
                        if(isset($_GET)) {
                            if ($_GET['name'] == 'start') {
                                $num = $_SESSION['val'];
                                $a = ($num - $num % 10000) / 10000;
                                $b = 10;
                                $c = 8;
                                $_SESSION['a'] = $a;
                                $_SESSION['b'] = $b;
                                $_SESSION['c'] = $c;
                                echo $a . "-" . $b . "+" . $c;
                                header("refresh: 2;");
                            }
                            else{
                                echo "<script>alert('click on start button')</script>";
                            }
                    }
                    }
                    else{
                        if(isset($_GET)) {
                            if ($_GET['name'] == 'stop') {
                                session_destroy();
                            }
                            else {
                                $a = $_SESSION['a'];
                                $_SESSION['b'] += 10;
                                $_SESSION['c'] += 8;
                                echo $a . "-" . $_SESSION['b'] . "+" . $_SESSION['c'];
                                header("refresh: 2;");
                            }
                        }
                    }
                    ?>
</div>
</body>
</html>