<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

       <!-- CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/log.css">

         <!-- JS Validation -->
         <script type="text/javascript" src="../js/validation.js"></script>
         <script type="text/javascript" src="../js/log.js"></script>

        
    </head>

    <body>
        <form action="loginprocess.php" method="post" onsubmit="return validate()">
            <div class="wrapper" style = "height: 400px;">
                <div class="header-text">Login Here</div>
                    
                    <!-- Create a login form for user -->                        
                    <!-- Label and input field for user's email -->
                    <!-- <label for="customer_email"><b>Email</b></label> -->
                    <input type="text" placeholder="Enter email address..." name="customer_email" required>

                    <!-- Label and input field for user's password -->
                    <!-- <label for="customer_pass"><b>Password</b></label> -->
                    <input type="password" placeholder="Enter Password..." name="customer_pass" required>

                    <input type="checkbox" id="terms">
                    <label for="terms"></label><span>Agree with <a href="">Terms & Conditions</a></span><br>

                    <!-- Create Login button -->
                    <button type="submit" name="login">Login</button><br>

                    <span>|| Are you new here? <a href="register.php">Create an account</a></span>
                    
                </div>
            </div>
        </form> 
    </body>
</html>

