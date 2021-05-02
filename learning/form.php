
<?php
$server= "localhost";
$username="root";
$password = "mrlemons";
$database = "login";
$con=mysqli_connect($server,$username,$password,$database);
if (!$con)
{
    die("connection failed:".mysqli_connect_error());
}
echo"connected successfully";

if (isset($_POST['Submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * From loginform where Email='".$email."'AND Password='".$password."'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        echo "<h1>you have logged in successfully</h1>";
        exit();
    }
    else{
        echo"<h1>incorrect email or password</h1>";
        exit();

    }
}

?>

