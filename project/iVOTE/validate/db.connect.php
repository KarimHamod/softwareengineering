<?php
    $server="localhost";
    $db_UserName="root";
    $db_password="mrlemons";
    $db_Name="test1";

    $con= mysqli_connect($server,$username,$password,$database);
if (!$con)
{
    die("connection failed:".mysqli_connect_error());
}
else{echo"connected successfully";}

    
    ?>