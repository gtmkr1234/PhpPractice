<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display all records</title>
    <style>
        table{
            border: 2px solid black;
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Name
            </td>
            <td>
                Phone
            </td>
            <td>
                Marks
            </td>
        </tr>
        </thead>
        <tbody>
        <?php
        $mysqli = mysqli_connect("localhost","root","","krishna");
        if(mysqli_connect_errno()){
            echo "Some error to connect to the DataBase!!";
        }
        else{
            $select_query = "SELECT * from `gautam`";
            $run = mysqli_query($mysqli,$select_query);
            if(mysqli_num_rows($run)){
                while($res = mysqli_fetch_assoc($run)){
                    echo "<tr> <td>".$res['ID']."</td>";
                    echo "<td>".$res['Name']."</td>";
                    echo "<td>".$res['Phone']."</td>";
                    echo "<td>".$res['Marks']."</td></tr>";
                }
            }
            else{
                echo "Having Issues with the database";
            }
        }
        ?>
        </tbody>
    </table>
</body>
</html>