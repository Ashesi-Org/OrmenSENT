<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Payment</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- JS -->
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/log.css">

      
    </head>

    <body>
        <form id="paymentForm" >
            <div class="wrapper" style = "height: 400px;">
                <div class="header-text">Make Payment</div><hr>
                <?php
                    include("../controllers/cart_controller.php");

                    session_start();
                    $cid = $_SESSION['cid']; 

                    $cart_total = total_price_cart_ctr($cid);
                
                ?>
                <!-- <div class="form-group"> -->
                    <!-- <label for="email">Email</label> -->
                    <input type="email" name="email" id="email-address" placeholder="Enter email..." required/>
                <!-- </div> -->
                <!-- <br>         -->
                <!-- <div class = "form-group"> -->
                    <!-- <label for="amount">Total price</label> -->
                    <input type="number" readonly name="amount" id="amount" value="<?php echo $cart_total["SUM(cart.qty*products.product_price)"]?>" required />
                <!-- </div> -->
                <!-- <br> -->
                <!-- <div class="form-submit"> -->
                    <button type="submit" onclick="payWithPaystack()"> Pay </button>
                <!-- </div> -->

            </div>
                    
            
        </form>

        <script type="text/javascript">
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener("submit", payWithPaystack, false);

            function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', 

                email: document.getElementById("email-address").value,

                amount: document.getElementById("amount").value*100,

                ref: '' + Math.floor((Math.random() * 1000000000) + 1),

                currency: 'GHS',
                // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() 
                {
                alert('Window closed.');
                },

                callback: function(response) 
                {
                    let message = 'Payment complete! Reference: ' + response.ref
                    console.log(response.status);

                    email = document.getElementById('email-address').value;
                    amount = document.getElementById('amount').value;
                    console.log(email);
                    console.log(amount);

                    dataString = 'email='+ email +'&amount=' +amount;

                    if(response.status=='success'){
                        $.ajax({
                            type: "GET",
                            url:"../actions/payment_proc.php",
                            data: dataString,
                            cache:false,
                            success:function(result){
                                alert(result);
                                window.location="payment_success.php";
                            }
                            // failed
                        })
                    }
                }

            });

            handler.openIframe();

            }

        </script>

    </body>

</html>

