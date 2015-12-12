
<?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $message = $_GET['message'];
        $from = 'Contact Form'; 
        $to = 'haq.ul.hassan@gmail.com'; 
        $subject = 'Message from Website';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_GET['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_GET['email'] || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_GET['message']) {
            $errMessage = 'Please enter your message';
        }
 
// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! Your email has been sent, I will be in touch.</div>';
        echo $result;    
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
    }

s


?>
