<?php
$to = "babiskolokouris@gmail.com";
$subject = 'testEmail';

$message = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";




// More headers
$headers = "From: noreply@fm1.hmu.gr>\r\n";
$headers .= "Cc: noreply@example.com \r\n";
$headers .= "Content-type:text/html;charset=UTF-8 \r\n";
mail($to,$subject,$message,$headers);?>
