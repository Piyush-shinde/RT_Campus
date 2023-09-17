<?php

session_start();

if (!isset($_SESSION['username'])) 
{

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if ($username === 'user' && $password === 'password') 
        {

            $_SESSION['username'] = $username;
        } else {
            $loginError = "Invalid username or password.";
        }
    }
}

if (isset($_SESSION['username'])) 
{

    echo "Welcome, " . $_SESSION['username'] . "! <a href='logout.php'>Logout</a>";
}
else 
{

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <?php if (isset($loginError)) 
        { ?>
            <p style="color: red;"><?php echo $loginError; ?></p>
        <?php 
        }
     ?>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>
    <?php
}
?>
