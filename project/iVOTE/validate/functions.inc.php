<?php
    function emptyInputSignup($First_Name,$Last_Name,$User_Name,$password,$Email){
        
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
       
        $sql="SELECT*FROM users WHERE users_id=? or users_UsersName=? or users_email=?;";
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
    function createUser($conn,$First_Name,$Last_Name,$User_Name,$Email,$password)
    {
        $sql="INSERT INTO users (users_FirstName , users_LastName, users_UsersName , users_password , users_email)VALUES(?,?,?,?,?) ;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $hashPwd=password_hash($password,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"sssss",$First_Name,$Last_Name,$User_Name,$Email,$hashPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();  
    }
    
?>