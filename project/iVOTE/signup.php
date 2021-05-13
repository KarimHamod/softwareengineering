<?php
    include_once 'header.php'
?>
<body>
<nav class="navbar navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand navi"  href="index.html">iVOTE</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a class="navi" href="candidate.html">Candidates</a></li>
            <li><a class="navi" href="#">Results</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a  class="navi" href="#">About Us</a></li>
            <li><a  class="navi" href="../../learning/register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a  class="navi" href="../../learning/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="info">
    <h1> Sign up</h1>
    <p class="lineOver"></p>
    <h2>please fill your information below</h2>
    <p class="lineOver"></p>
</div>
<section class="form">

    <form action="signup_validate.php" method="post">
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
            <label>UserName:
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
        <p>


            <button class="buttons" type="submit" name="submit">signup</button>
            <button  class="buttons" type="reset" name="clear">Reset</button>

    </form>
</section>

   