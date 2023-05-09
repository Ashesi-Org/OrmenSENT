<?php
    include("../controllers/product_controller.php");

    //Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Include required PHPMailer files
    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    //check if user data exists.
    if(isset($_POST['send']))
    {
        //Create instance of PHPMailer
        $mail = new PHPMailer(true);

        //Set mailer to use smtp
        $mail->isSMTP();

        //Define smtp host
        $mail->Host = 'smtp.gmail.com';

        //Enable smtp authentication
        $mail->SMTPAuth = true;

        //Set gmail username
        $mail->Username = 'ormanent@gmail.com';                  //gmail name

        //Set gmail password
        $mail->Password = 'zipqivyxpezrqhij';                //gmail app password

        //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = 'tls';

        //Port to connect smtp
        $mail->Port = 587;

        //Set sender email
        $mail->setFrom('ormanent@gmail.com'); //gmail account name

        //Add recipient
        $mail->addAddress($_POST["email"]);

        //Enable HTML
        $mail->isHTML(true);

        // Mail Subject
        $mail->Subject = $_POST["subject"];

        // Mail message
        $mail->Body = $_POST["message"];

        // Sending emails to all subscribers
        // $check = send_to_subs_ctr();

        //Finally send email
        if($mail->send()){
            echo"
            <script>
                alert('Sent Successfully');
                document.location.href = '../admin/subs-mail.php';
            </script>";
        
        }else{
            echo"Email could not be sent. Error: " . $mail->ErrorInfo;
        }

    }

       
        
?>







