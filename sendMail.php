
<?php
 $subject = $_POST['subject'];
 $email = $_POST['email'];
 $msg = $_POST['msg'];

if(!empty($subject) || !empty($email) || !empty($msg)){
    $to = 'riazmd582@gmail.com';
    $headers = 'From:' . $email;

    mb_language("uni");
    mb_internal_encoding("UTF-8");
    mb_send_mail($to,$subject,$msg,$headers);

    $respondMsg = 'message body.';
    $respondSubject = 'message subject';
    $respondHeaders = 'From: noreply@mail.com';
    mb_send_mail($email,$respondSubject,$respondMsg,$respondHeaders);
    }
     else {
        echo '403';
    }


?>
