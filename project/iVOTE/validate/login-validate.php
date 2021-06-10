<?php
if (isset($_POST["submit"])){
    $username=$_POST["User_Name"];
    $password=$_POST["password"];
    require_once 'dbh.connect.php';
    require_once 'functions.inc.php';
    if (emptyInputlogin( $User_Name,$password) !==false)
    {
        header("location: ../login.php?error=emptyinput");
        exit();
    }
   
    login_user($conn,$username,$password);
}
else{
    header("location: ../login.php?");
    exit();
}
?>