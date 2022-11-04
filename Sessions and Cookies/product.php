<?php
session_start();
if(isset($_SESSION['user'])){
    echo "Welcome"."<h3 style='color: red align: right'>".$_SESSION['user']."</h3>";
    echo "You are scrolling product page";
    echo "<a href='home.php'> Click here to navigate to the home page ";
    echo "<a href='logout.php'><input type ='submit' name='logout' value='logout'></a> ";
}
else{
    echo "<script>location.href='login.html'</script>";
}