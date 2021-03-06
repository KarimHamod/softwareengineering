<?php
    function emptyInputSignup($First_Name,$Last_Name,$User_Name,$password,$Email){
        $result=false;
        if(empty($First_Name)||empty($Last_Name)||empty($User_Name)||empty($password)||empty($Email)){
            $result=true;
        }
        else
        {
            $result=false;
        }
        return $result;
    }
    function invalidUserID($User_Name){
        $result=false;
        if (!preg_match("/^[a-zA-Z]*$/",$User_Name))
        {
            $result=true;
        }
        else
        {
            $result=false;
        }
        return $result;
    }
    function invalidEmail($Email){
        $result=false;
        if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            $result=true;
        }
        else
        {
            $result=false;
        }
        return $result;
    }
    function invalidPassword($password){
        $result=false;
        if(!preg_match("/^[a-zA-Z0-9]*$/" ,$password)){
            $result=true;
        }
        else
        {
            $result=false;
        }
        return $result;
    }
    function UserExists($conn,$User_Name,$Email)
    {
       
        $sql="SELECT * FROM users WHERE UserName=? or Email=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss",$User_Name,$Email);
        mysqli_stmt_execute($stmt);

        $resultData=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($resultData)){
            return $row;

        }
        else{
            $result=false;
          return $result;  
        }
     mysqli_stmt_close($stmt);
    }
    function createUser($conn,$First_Name,$Last_Name,$User_Name,$password,$Email)
    {
        $sql="INSERT INTO users (User_Fname,Last_Name,UserName,pwd,Email)VALUES( ? , ? , ? , ? ,?) ";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtfailed1");
            exit();
        }
        $hashPwd=password_hash($password,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"sssss",$First_Name,$Last_Name,$User_Name,$hashPwd,$Email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();  
    }
    function emptyInputlogin($User_Name,$password){
        $result=false;
        if(empty($User_Name)||empty($password)){
            $result=true;
        }
        else
        {
            $result=false;
        }
        return $result;
    }
    function login_user($conn,$User_Name,$password){
        $userexists=UserExists($conn,$User_Name,$User_Name);
        if($userexists=false){
            header("location: ../login.php?error=user_doesnt_exist");
            exit();
        }
        $hashPwd=$userexists["pwd"];
        $check_password=password_verify($password,$hashPwd);
        if($check_password=false){
            header("location: ../login.php?error=wrongpassword");
        }
        elseif($check_password=true)
        {
            session_start();
            $_SESSION["User_Name"]=$userexists["User_Name"];
        }

    }
    
?>