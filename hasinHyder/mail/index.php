<?php 
// php mailer send for others users 
$to = "promasudb@gmail.com";
$from = "John Doe<text@example.com>";
$subject = "Test Subject for Testing parpas";
$body = "cover latters text here now";
$headers = "From: {$from} \r\n";

$sentMailer = mail($to, $subject, $body, $headers);

if($sentMailer){
    echo "Send Maile For Users";
}else{
    echo "Send Not Maile For Users";
}