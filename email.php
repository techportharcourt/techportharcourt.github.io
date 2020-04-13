<?php


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if (
      empty($name) ||
      empty($email) ||
      empty($message)
    ) {
        echo '<div class="alert alert-info">All the form fields are required</div>';
    } else {

        if (strpos($email, '@')) {

            
            $to = "hello@techph.ng";
            $subject = 'Tech portharcourt';

            $message = "
            <html>
            <head>
            <title>$subject</title>
            </head>
            <body>
            <table> 
            
            <tr>
            <th>name</th>
            <th>email</th>
            <th>message</th>
            </tr>

            <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$message</td>
            </tr>
            </table>
            </body>
            </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <'.$email.'>' . "\r\n";
        $headers .= 'Cc: '.$email.'' . "\r\n";

            if (mail($to,$subject,$message,$headers)) {
                echo '<div class="alert alert-success">Your message has been sent successfully.</div>';
            } else {
              echo '<div class="alert alert-info">unable to send mail</div>';
            }



        } else {
            echo '<div class="alert alert-info">Enter a valid email address</div>';
        }

    }


?>