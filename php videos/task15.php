<?php

// email
$msg = "Message";
$to = "surprise12345666@gmail.com";
$from = "stepan.rulyov@gmail.com";
$subject = "Theme";

$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
mail($to, $subject, $msg, $headers); // only on public servers

