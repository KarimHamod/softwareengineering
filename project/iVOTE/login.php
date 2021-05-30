<?php
    include_once 'header.php'
?>
<html>
    <body>
    <div class="info">
        <h1>Login</h1>
        <p class="lineOver"></p>
    </div>
    <section class="form">
        <div>

            <form action="validate/login-validate.php" method="post">
                <p class="">
                    <label>UserName:
                    <input class="textarea" type="text" name="User_Name" placeholder="UserName/Email" required>
                    </label>
                </p>   
                
                <p> 
                    <label>Password:
                    <input class="textarea" type="password" name="password" placeholder="password" required>
                    </label>
                </p>
                <p>Not a member? Please <a href="signup.php">Sign up</a></p>
                <button class="buttons" type="submit" name="submit">login</button>
                <button class="buttons" type="reset" name="clear">Reset</button>
            </form>
        </div>
    </section>
    </body>
</html>
