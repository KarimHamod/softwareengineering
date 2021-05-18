<?php
    include_once 'header.php'
?>
<body>

<div class="info">
    <h1> Sign up</h1>
    <p class="lineOver"></p>
    <h2>please fill your information below</h2>
    <p class="lineOver"></p>
</div>
<section class="form">

    <form action="validate/signup-validate.php" method="POST">
        <p>
            <label>First Name:
                <input class="textarea" type="text" name="First_Name" placeholder="First Name" required>
            </label>
        </p>
        <p>
            <label>Last Name:
                <input class="textarea" type="text" name="Last_Name" placeholder="Last Name" required>
            </label>
        </p>
        <p>
            <label>User Name:
                <input class="textarea" type="text" name="User_Name" placeholder="UserName" required>
            </label>
        </p>

        <p>
            <label>Email:
                <input class="textarea mail"  type="email" name="email" placeholder="email" required>
            </label>
        </p>
        <label>Password:
            <input class="textarea" type="password" name="password" placeholder="password" required>
        </label>
        </p>
        
            <button class="buttons" type="submit" name="submit">signup</button>
            <button  class="buttons" type="reset" name="clear">Reset</button>
    </form>
</section>

   