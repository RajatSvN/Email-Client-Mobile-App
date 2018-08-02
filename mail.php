<?php


$to      = $_GET['to'];
$subject = $_GET['subject'];
$message = $_GET['message'];
$headers = 'From: '.$_GET['from']. "\r\n" .
    'Reply-To: '.$to . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if(filter_var($_GET['to'], FILTER_VALIDATE_EMAIL) AND filter_var($_GET['from'], FILTER_VALIDATE_EMAIL)){
mail($to, $subject, $message, $headers);
}else{
  
  echo "invalid email address";
  
}
?>