<?php
    $server="localhost";
    $db_UserName="root";
    $db_password="";
    $db_Name="test1";

    $conn= mysqli_connect($server,$db_UserName,$db_password,$db_Name);
if (!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
else{echo"connected successfully";}

    
    ?>