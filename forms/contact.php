
<?php
$to = "dineshsun1984@gmail.com";
$subject = "Enquiry from yellowmart crackers website";

$name = 'Name: '.$_POST['name'].',<br><br>';
$message = 'Email Id: '.$_POST['email'].',<br><br>';
$message .= 'Subject: '.$_POST['subject'].',<br><br>';
$message .= 'Message from '.$_POST['name'].' : '.$_POST['message'].'<br>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers

mail($to,$subject,$message,$headers);

echo "OK";

?>
