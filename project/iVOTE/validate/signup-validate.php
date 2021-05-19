<?php
    if(isset($_POST["submit"])){
        $First_Name=$_POST["First_Name"];
        $Last_Name=$_POST["Last_Name"];
        $User_Name=$_POST["User_Name"];
        $password=$_POST["password"];
        $Email=$_POST["email"];
        require_once 'db.connect.php';
        require_once 'functions.inc.php';
        if (emptyInputSignup( $First_Name,$Last_Name,$User_Name,$password,$Email) !==false)
        {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if(invalidUserID($User_Name)!==false)
        {
            header("location: ../signup.php?error=invalidUser");
            exit();
        }
        if(invalidEmail($Email)!==false)
        {
            header("location: ../signup.php?error=invalidEmail");
            exit();
        }
        if(invalidPassword($password)!==false)
        {
            header("location: ../signup.php?error=invalidpassword");
            exit();
        }
        if(UserExists($conn,$User_Name,$Email) !==false)
        {
            header("location: ../signup.php?error=userNameExists");
            exit();
        }
        createUser($conn,$First_Name,$Last_Name,$User_Name,$password,$Email);
    }
    
    else{
        header("location: ../signup.php");
        exit();

    }
?>