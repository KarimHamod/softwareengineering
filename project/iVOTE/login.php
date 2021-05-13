<?php
    include_once 'header.php'
?>
<html>
    <body>
        <div">
            <h1>Login</h1>
            <h2>please fill your information below</h2>
            <form action="login_validate.php" method="post">
                <p class="">
                    <label>UserName:
                    <input type="text" name="User_Name" placeholder="UserName/Email" required>
                    </label>
                </p>   
                
                <p> 
                    <label>Password:
                    <input type="password" name="password" placeholder="password" required>
                    </label>
                </p>
                
                <button type="submit" name="submit">login</button>
                <button type="clear" name="clear">Reset</button>
            </form>
        </div>
    </body>
</html>
