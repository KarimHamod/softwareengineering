<?php
    include_once 'header.php'
?>

        <section class="form">
            <h1> Sign up</h1>
            <h2>please fill your information below</h2>
            <form action="signup_validate.php" method="post">
                <p>
                    <label>First Name:
                    <input type="text" name="First_Name" placeholder="First Name" required>
                    </label>
                </p>   
                <p> 
                    <label>Last Name:
                    <input type="text" name="Last_Name" placeholder="Last Name" required>
                    </label>
                </p>
                <p>
                    <label>UserName:
                    <input type="text" name="User_Name" placeholder="UserName" required>
                    </label>
                </p>   
                
                <p> 
                    <label>Password:
                    <input type="password" name="password" placeholder="password" required>
                    </label>
                </p>
                <p> 
                    <label>Email:
                    <input type="email" name="email" placeholder="email" required>
                    </label>
                </p>
                <button type="submit" name="submit">signup</button>
                <button type="clear" name="clear">Reset</button>
            </form>
        </section>
   