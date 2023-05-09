<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

       <!-- CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/log.css">
        <link href="../css/validation.css" rel="stylesheet" type="text/css" >

        <!-- JS Validation -->
        <script type="text/javascript" src="../js/validation.js"></script>
        <script type="text/javascript" src="../js/reg.js"></script>

        
    </head>

    <body>
        <form action="registerprocess.php" method="post" onsubmit="return validate()">
            <div class="wrapper">
                <div class="header-text">Register Here</div>
                    
                    <!-- Create a register form for user -->  
                    
                    <!-- Fullname -->
                    <input type="text" placeholder="Enter your fullname..." name="customer_name" id= "customer_name" required>

                    <!-- Email -->                  
                    <input type="text" placeholder="Enter email address..." id= "customer_email" name="customer_email" required>

                    <!-- Password -->
                    <input type="password" placeholder="Enter your password..." id= "customer_pass" name="customer_pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
			        </div>
                    
                    <!-- Country -->
                    <input type="text" placeholder="Country..." id= "customer_country" name="customer_country" required>

                    <!-- City -->
                    <input type="text" placeholder="City..." id= "customer_city" name="customer_city" required>

                    <!-- Contact -->
                    <input type="text" placeholder="Enter your contact..." id= "customer_contact" name="customer_contact" required>

                    <!-- Image -->
                    <input type="file" name="image" id="fileToUpload" name="customer_image">

                    <input type="checkbox" id="terms">
                    <label for="terms"></label><span>Agree with <a href="">Terms & Conditions</a></span>

                    <!-- Create Login button -->
                    <button type="submit" name="register">Register</button><br>

                    <span>Already a member? <a href="login.php">Login here</a></span>
                    
                </div>
            </div>
        </form> 
       

    </body>
</html>

