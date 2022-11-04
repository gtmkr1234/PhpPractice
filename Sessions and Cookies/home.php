<?php
$username = "admin@com";
$passw = "admin123";
session_start();
if(isset($_SESSION['user'])){
    echo "Welcome"."<h3 style='color: red align: right'>".$_SESSION['user']."</h3>";
    echo "You are scrolling home page";
    echo "<br>";
    echo "<a href='product.php'> Click here to navigate to the product page ";
    echo "<a href='logout.php'><input type ='submit' name='logout' value='logout'></a> ";
}
else{
    if($username == $_POST['uname'] and $passw == $_POST['password']){
        $_SESSION['user'] = $username;
        echo "<script>location.href='home.php'</script>";
    }
    else{
        echo "Invalid Username or password";
        echo "<script>alert('Invalid Username or password')</script>";
        echo "<script>location.href='login.html'</script>";
    }
}
