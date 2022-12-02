<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php doc form</title>
</head>
<?php
    $conn = new mysqli("localhost", "root", "", "krishna");
    if ($conn->connect_error){
        echo "Some error occurred!!!";
    }
?>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter your name </td>
            <td>
                <input type="text" name="name" autofocus required>
            </td>
        </tr>
        <tr>
            <td>Enter your phone number</td>
            <td>
                <input type="tel" name="number" required>
            </td>
        </tr>
        <tr>
            <td>Enter the marks</td>
            <td>
                <input type="number" name="marks" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" >
            </td>
        </tr>
    </table>
</form>
<?php
    if (isset($_POST)){
        $name  = $_POST['name'];
        $number  = $_POST['number'];
        $marks  = $_POST['marks'];
        $query = "INSERT INTO gautam(Name, Phone, Marks)
              VALUES ('".$name."',".$number.",".$marks.")";
        if($conn->query($query)===true){
            echo "<script>location.href='form.php'</script>";
        }
        else{
            echo "Some Error Occurred";
        }
    }
?>
</body>
</html>