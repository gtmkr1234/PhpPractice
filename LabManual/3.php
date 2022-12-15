<?php
echo"<form method=post>";
echo"<label>Enter the decimal number : <label>"; echo"<input type=text name=in >";
echo"<input type=submit value=Binary_check>"; if(isset($_POST['in'])){
    $n=$_POST['in'];
    echo"<br>binary of ". $n." is ".decbin($n);
}
echo"<br><label>Enter the binary number : </label>"; echo"<input type=text name=bn >";
echo"<input type=submit value=number_check>"; if(isset($_POST['bn'])){
    $n=$_POST['bn'];
    echo"<br>decimal of ". $n." is ".bindec($n);
}
echo"<br><label>Enter the decimal number to round : </label>"; echo"<input type=text name=dn > ";
echo"<label>upto decimal points :</label>"; echo"<input name=pp type=text>";
echo"<input type=submit value=round off name='round'>"; if(isset($_POST['round'])){
    $n=$_POST['dn'];
    $r=$_POST['pp'];
    echo"<br>coversion of ".$n." to the ".$r." decimal points is ".number_format((float)$n, $r, '.', '');
}
?>