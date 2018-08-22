<?php
$to  = "spahpanzer91@gmail.com"; 

$message = $_POST['message'];
$from = $_POST['email'];
$name = $_POST['name'];

$subject = "Message from INTENSYV";

$message = ' 
<html> 
    <head> 
        <title>Message From '.$name.' : '.$from.'</title> 
    </head> 
    <body> 
        <p>'.$message.'</p> 
    </body> 
</html>'; 

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: INTENSYV <$from>\r\n"; 

mail($to, $subject, $message, $headers); 