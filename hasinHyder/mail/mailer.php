<?php 
// php mailer send for others users 
$to = "promasudb@gmail.com";
$from = "John Doe<text@example.com>";
$subject = "Test Subject for Testing parpas";
$message = "cover latters text here now";
$message .= "https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg";
$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: {$from} \r\n";


$sentMailer = mail($to, $subject, $message, $headers);

if($sentMailer){
    echo "Send Maile For Users";
}else{
    echo "Send Not Maile For Users";
}