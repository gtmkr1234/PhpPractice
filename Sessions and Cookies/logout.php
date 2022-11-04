<?php
session_start();
if(isset($_SESSION['user'])){
    session_abort();
    echo "<script>location.href='login.html'</script>";
}
