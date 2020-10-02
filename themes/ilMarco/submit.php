<?php

if (!isset($_POST)) exit();

$mail_data = [];
$fieldSet = [
  "name" => "Имя:",
  "phone" => "Номер телефона:",
  "order" => "Заказ:"
];

foreach ($_POST as $key => $value) {
  $fieldSet_key = $fieldSet[$key];
  if (gettype($value) == "array") {
    $value = implode(', ', $value);
  }
  if (isset($fieldSet_key)) {
    array_push($mail_data, $fieldSet_key . " " . urldecode($value));
  } else {
    array_push($mail_data, $key . " " . urldecode($value));
  }
}

// Data for mail function
$to = "feedback@ilmarco.ru";
$subject = "Заявка с сайта ilmarco.ru";
$message = implode("\n", $mail_data);
$headers = 'Content-type: text/plain; charset="utf-8"';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "From: <noreply@ilmarco.ru>\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";


$mail = mail($to, $subject, $message, $headers);

if ($mail) {
  exit(header('HTTP/1.0 200 OK'));
} else {
  die(header("HTTP/1.0 500 Internal Server Error"));
}
