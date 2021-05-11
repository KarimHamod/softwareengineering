
<?php
$server= "localhost";
$username="root";
$password = "mrlemons";
$database = "login";
$con=mysqli_connect($server ,$username ,$password , $database);
if (!$con)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo"connected successfully";
}


if (isset($_POST['register']))
{
    if(!empty($_POST['fName'])&&!empty($_POST['lName'])&&!empty($_POST['mail'])&&!empty($_POST['pass']) ){
        $firstName=$_POST['fName'];
        $lastName=$_POST['lName'];
        $email=$_POST['mail'];
        $password=$_POST['pass'];
        $sql="insert into loginform(FirstName ,LastName ,Email ,Password) values('$firstName','$lastName','$email','$password')";
        $run=mysqli_query($con,$sql)or die(mysqli_connect_error());
        if($run){
            echo"<h1>registered successfully</h1>";

        }
        else{
            echo"registration failed";
        }
    }
    else{
        echo"please fill every field";
    }
}
?>