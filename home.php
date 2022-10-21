<?php
$username = "admin@com";
$passw = "admin123";
session_start();
if(isset($_SESSION['user'])){

}
else{
    if($username == $_POST['uname'] and $passw == $_POST['password']){

    }
    else{
        echo "Invalid Username or password";
        echo "<script>alert('Invalid Username or password')</script>";
        echo "<script>location.href='login.html'</script>";
    }
}
